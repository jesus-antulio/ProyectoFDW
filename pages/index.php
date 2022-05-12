<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reposteria</title>
        <link rel="shortcut icon" type="image/jpg" href="../assets/logo.png" />
        <script src="https://kit.fontawesome.com/933e55e7ca.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../styles/compartido.css">
        <link rel="stylesheet" href="../styles/homePage.css">
    </head>
    <body>
        <?php
            include '../components/header.php';
        ?>
        
        <div class = "banner"></div>
        
        <div class="content">
            <div class="info"> 
                <h1>Bienvenido a Reposteria</h1>
                <p>
                    En esta pagina encontraras todo lo necesario para poder elavorar todos tus postres,
                    desde lo más sencillo hasta lo más complejo.
                </p>
                <h2>Productos</h2>
                <p>
                    Los productos que encontraras pueden ser:
                    <ul>
                        <li> Harinas </li>
                        <li> Esencias </li>
                        <li> Decoraciones </li>
                        <li> Moldes </li>
                        <li> y más!!! </li>
                    </ul>
                </p>
            </div>
        </div>

        <?php
            include '../components/footer.php';
        ?>
        
    </body>
</html>