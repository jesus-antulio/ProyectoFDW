<?php
    require "../database/CAD.php";

    session_start();

    if(isset($_POST['correo']) && isset($_POST['pass'])){
        $correo = $_POST['correo'];
        $pass = $_POST['pass'];

        $cad = new CAD();
        if($cad->verificaUsuario($correo, $pass)){
            $_SESSION['correo'] = $correo;
            header('Location: ../pages/index.php');
        } else {
            echo
            '<script>
                alert("Error al verificar el usuario");
                window.location.href="../pages/login.php"
            </script>';
        }
    }

    unset($_POST['correo']);
    unset($_POST['pass']);
?>