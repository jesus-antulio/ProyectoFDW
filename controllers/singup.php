<?php 
    require_once '../database/CAD.php'; //ARchivo que se encargara de realizar la conexion a la BD

    if(isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['pass']) && isset($_POST['phone'])){
        #Enviar a la BD
        $con = new Conexion(); //Establecer conexión a la BD
        //Variables auxiliares
        $nombre = $_POST['nombre']; 
        $correo = $_POST['correo'];
        $pass = $_POST['pass'];
        $telefono = $_POST['phone'];

        $cad = new CAD();
        $cad->agregaUsuario($nombre, $pass, $correo, $telefono);
    } else {
        echo $_POST['nombre'].'-'.$_POST['correo'].'-'.$_POST['pass'].'-'.$_POST['phone'];
        echo
        '
        <script>
                alert("Favor de llenar todos los datos");
                window.location.href="../pages/singup.php";
        </script>';
    }

    unset($_POST['name']);
    unset($_POST['email']);
    unset($_POST['password']);
?>