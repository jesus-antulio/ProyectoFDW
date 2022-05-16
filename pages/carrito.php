<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposteria | Carrito de Compras</title>
    <link rel="shortcut icon" type="image/jpg" href="../assets/logo.png" />
    <script src="https://kit.fontawesome.com/933e55e7ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/compartido.css">
    <link rel="stylesheet" href="../styles/carrito.css">
</head>
<body>
    <?php include '../components/header.php'; ?>

    <div class="container">
        <h1> Tu carrito </h1>
        <div class="flex-container">
            <div>
                <img src="../assets/logistica-de-compras.jpg">
            </div>
            <div class="line"></div>
            <div class="datos">
                <?php
                echo
                "<div class='carrito'>
                    <h2>Productos</h2>
                    <div class='product'>
                        <div class='imgP'>imagen</div>
                        <div class='datP'>
                            <h3>Producto 1</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                            <p><b>$$$</b></p>
                        </div>
                    </div>
                </div>";
                ?>
            </div>
        </div>
    </div>

    <?php include '../components/footer.php'; ?>
</body>
</html>