<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/info.php'; ?>
    <title>Registrate</title>
    <link rel="stylesheet" href="../styles/login-singup.css">
</head>
<body>
    <?php include '../components/header.php'; ?>
    <div class="container">
        <h1> Registrate </h1>
        <div class="flex-container">
            <div class="datos">
                <form action="../controllers/singup.php" method="post">
                    <p> Nombre </p>
                    <input type="text" name="nombre" placeholder="Nombre" >
                    <p> Correo </p>
                    <input type="text" name="correo" placeholder="Correo" >
                    <p> Contraseña </p>
                    <input type="password" name="pass" placeholder="Contraseña" >
                    <p> Telefono </p>
                    <input type="text" name="phone" placeholder="Telefono">
                    <p> </p>
                    <input type="submit" value="Registrarse">
                </form>
            </div>
            <div class="line"></div>
            <div class="opciones">
                <h2> ¿Ya tienes una cuenta? </h2>
                <a href="login.php">Inicia Sesión</a>
            </div>
        </div>
    </div>
    <?php include '../components/footer.php'; ?>
</body>
</html>