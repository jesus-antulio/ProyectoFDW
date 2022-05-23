<?php
    session_start();

    if(isset($_SESSION['rol'])){
        header('Location: ../pages/perfil.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/info.php'; ?>
    <title>Iniciar Sesión</title>
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