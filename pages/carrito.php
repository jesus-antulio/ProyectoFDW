<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/info.php'; ?>
    <title>Resposteria | Carrito de Compras</title>
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
                        <div class='imgP'>
                            <img src='../images/producto.png'>
                        </div>
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