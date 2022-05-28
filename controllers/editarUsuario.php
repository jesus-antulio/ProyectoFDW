<?php
    session_start();

    require "../database/CAD.php";
    if(isset($_SESSION['rol']) && isset($_SESSION['rol'])==2){
        $id = $_POST['id_usuario'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $rol = $_POST['rol'];

        $cad = new CAD();
        $cad->updateUsuario($id, $nombre, $correo, $telefono, $rol);
    }
?>