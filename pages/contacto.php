<?php session_start() ?>

<html>
    <head>
        <title>Reposteria | Contacto</title>
        <link rel="shortcut icon" type="image/jpg" href="../assets/logo.png" />
        <script src="https://kit.fontawesome.com/933e55e7ca.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../styles/compartido.css">
        <link rel="stylesheet" href="../styles/contacto.css">
    </head>
    <body>
        <?php
            include '../components/header.php';
        ?>

        <div class="banner"></div>

        <div class="info">
            <h1>Contáctanos</h1>
            <div>
                <nota>*Campos obligatorios</nota>
            </div>
            
            <form>
                <p> <span>*</span>Nombre </p>
                <input type="text" name="nombre" placeholder="Nombre">
                <p> Apellido: </p>
                <input type="text" name="apellido" placeholder="Apellido">
                <p> <span>*</span>Correo electrónico: </p>
                <input type="text" name="email" placeholder="Correo electrónico">
                <p> Teléfono: </p>
                <input type="text" name="telefono" placeholder="Teléfono">
                <p> <span>*</span>Mensaje: </p>
                <textarea name="mensaje" placeholder="Mensaje"></textarea> <br>
                <center>
                    <input type="submit" value="Enviar">
                </center>
            </form>
        </div>

        <?php
            include '../components/footer.php';
        ?>
    </body>
</html>