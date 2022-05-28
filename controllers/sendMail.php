<?php
    session_start();

    #Importar lasclases de PHPmailer
    use PHPmailer\PHPMailer\PHPMailer;
    use PHPmailer\PHPMailer\SMTP;
    use PHPmailer\PHPMailer\Exception;

    //Ubicación de los archivos
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'PHPMailer/src/Exception.php';

    #Datos del cliente
    $idUsuario = $_SESSION['idUsuario'];
    $nombre = $_SESSION['nombre'];
    $correo = $_SESSION['correo'];
    $telefono = $_SESSION['telefono'];
    $carrito = $_SESSION['carrito'];
    $total = "$".$_SESSION['total'];
    
    #Mandar correo de confirmación de compra
    $mail = new PHPMailer(true);

    try {        
        #Configuración de la cuenta de donde saldran los correos
        $mail -> isSMTP();
        $mail -> Username = 'j_antulio_j@aol.com';
        $mail -> Password = 'nghoyxmnxfdzkgfv'; //Es necesario generar una contraseña de aplicación
        $mail -> Host = 'smtp.aol.com'; //verificar en la documentación del correo
        $mail -> SMTPAuth = true; //verificar en la documentación del correo
        $mail -> Port = 465; //verificar en la documentación del correo
        $mail -> SMTPSecure = 'ssl'; //verificar en la documentación del correo

        #Configurar mensaje
        $mail -> setFrom('j_antulio_j@aol.com','ProyectoFDW | Reposteria');
        $mail -> addAddress($correo, $nombre);
        $mail -> isHTML(true);
        $mail -> Subject = 'Confirmación de compra | Reposteria';
        $mail -> Body = "
                        <div style='width: 100%; margin: 0 auto; padding: 0;
                                    border-radius: 10px; background-color: rgb(203, 227, 233);
                                    padding-bottom: 20px;'>
                            <center> <img src='LOGO.png' height = 150px; width = 150px;> </center>
                            <h1 style='font-family: Pacifico, cursive; text-align: center; font-size: 50pt;'>
                                ¡Gracias por tu compra!
                            </h1>
                            <div style='background-color: beige;
                                        margin: 20px;
                                        border-radius: 10px;
                                        padding: 30px;'>
                                <div style='font-family: Comfortaa, cursive;'>
                                    <h2 style='font-size: 20pt;'> 
                                        Hola, $nombre 
                                    </h2>
                                    <p style='font-size: 18pt; line-height: 0.8em;'>
                                        Hemos recibido tu compra, te enviaremos un correo de confirmación en cuanto esta sea procesada.
                                    </p>
                                    <p style='font-size: 18pt; line-height: 0.8em;'>
                                        Para cualquier duda o aclaración, puedes contactarnos a través de nuestro correo electrónico.
                                    </p>
                                    <p style='font-size: 18pt; line-height: 0.8em;'>
                                        ¡Gracias por tu compra!
                                    </p>
                                </div>
                            </div>
                        </div>
                        ";
        //Puede ser información de la base de datos
        $mail -> addAttachment('../assets/LOGO.png');        
        $mail -> CharSet = 'UTF-8'; //Para que se interpreten de manera correcta los acentos y caracteres especiales
        $mail -> send();

        #Se eliminia el carrito de compras
        unset($_SESSION['carrito']);
        unset($_SESSION['total']);
        echo'
            <script>
                window.location.href = "../pages/index.php";
            </script>';
    } catch (Exception $ex) {
        echo 'El mensaje no se mando';
    }
?>