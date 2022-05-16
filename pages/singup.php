<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="shortcut icon" type="image/jpg" href="../assets/logo.png" />
    <script src="https://kit.fontawesome.com/933e55e7ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/compartido.css">
    <link rel="stylesheet" href="../styles/login-singup.css">
</head>
<body>
    <?php include '../components/header.php'; ?>
    <div class="container">
        <h1> Registrate </h1>
        <div class="flex-container">
            <div class="datos">
                <form action="../controllers/login.php" method="post">
                    <p> Nombre </p>
                    <input type="text" name="name" placeholder="Nombre" required>
                    <p> Correo </p>
                    <input type="email" name="email" placeholder="Correo" required>
                    <p> Contraseña </p>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <p> Telefono </p>
                    <input type="text" name="phone" placeholder="Telefono" required>
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