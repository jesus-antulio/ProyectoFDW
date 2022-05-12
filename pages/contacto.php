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
            <h1>CONTÁCTANOS</h1>
            <div>
                <nota>*Campos obligatorios</nota>
            </div>
            <div>
                <label>
                    <span>*</span>Nombre: <br/>
                    <input type="text" name="nombre" class="input" /> <br />
                </label>
                <label>
                    <span>*</span>Apellido: <br/>
                    <input type="text" name="apellido" class="input" /> <br />
                </label>
                <label>
                    <span>*</span>Correo: <br/>
                    <input type="text" name="correo" class="input" /> <br />
                </label>
                <label>
                    <span>*</span>Mensaje: <br>
                    <textarea class="form"></textarea>
                </label>
            </div>
        </div>

        <?php
            include '../components/footer.php';
        ?>
    </body>
</html>