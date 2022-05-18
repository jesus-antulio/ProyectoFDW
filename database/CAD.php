<?php
#CAD -> Capa de Acceso de Datos
require_once 'conexion.php';

class CAD
{
    public $con;

    static public function agregaUsuario($nombre, $pass, $mail, $telefono, $rol)
    {
        $con = new Conexion(); //Establecer conexión a la BD
        $query = $con->conectar()->prepare("INSERT INTO usuarios (nombre, correo, contraseña, telefono, rol) VALUES ('$nombre', '$mail', '$pass', '$telefono', '$rol')");

        if ($query->execute()) {
            // echo 'El usuario '.$nombre.' se ha registrado correctamente';
            echo
            '<script>
                    alert("El usuario ' . $nombre . ' se ha registrado correctamente. Ahora ya puedes iniciar sesión");
                    window.location.href="../pages/login.php";	
            </script>';
        } else {
            echo
            '<script>
                    alert("Error al registrar el usuario");
                    window.location.href="../pages/singup.php";
            </script>';
        }
    }

    static public function verificaUsuario($correo, $password) {
        $con = new Conexion(); //Establecer conexión a la BD
        $query = $con->conectar()->prepare("SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$password'");
        
        if($query->execute()){
            $row = $query->fetch(PDO::FETCH_NUM);
            if($row){
                // echo $row[0].' - '.$row[1].' - '.$row[2].' - '.$row[3];
                $_SESSION['nombre'] = $row[1];
                $_SESSION['correo'] = $row[2];
                $_SESSION['telefono'] = $row[4];
                $_SESSION['rol'] = $row[5];
                return true;
            }
        } else {
            return false;
        }
    }
}
