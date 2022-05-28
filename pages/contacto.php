<?php session_start() ?>

<html>
    <head>
        <?php include '../components/info.php'; ?>
        <title>Reposteria | Contacto</title>
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
            
            <form action="../controllers/contacto.php" method="post">
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