<?php
    session_start();

    if(isset($_SESSION['rol'])){
        if(isset($_SESSION['rol']) == 1){
            header('Location: ../pages/perfil.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="shortcut icon" type="image/jpg" href="../assets/logo.png" />
    <script src="https://kit.fontawesome.com/933e55e7ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/compartido.css">
    <link rel="stylesheet" href="../styles/login-singup.css">
</head>
<body>
    <?php include '../components/header.php'; ?>
    <div class="container">
        <h1> Iniciar Sesión </h1>
        <div class="flex-container">
            <div class="datos">
                <form action="../controllers/login.php" method="post">
                    <p> Correo Electrónico </p>
                    <input type="text" name="correo" placeholder="Correo">
                    <p> Contraseña </p>
                    <input type="password" name="pass" placeholder="Contraseña">
                    <p></p>
                    <input type="submit" value="Iniciar Sesión">
                </form>
            </div>
            <div class="line"></div>
            <div class="opciones">
                <h2> ¿No tienes una cuenta? </h2>
                <a href="singup.php">Registrate</a>
            </div>
        </div>
    </div>
    <?php include '../components/footer.php'; ?>
</body>
</html>