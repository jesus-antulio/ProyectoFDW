<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/info.php'; ?>
    <title>Resposteria | Productos </title>
    <link rel="stylesheet" href="../styles/product.css">
</head>
<body>
    <?php include '../components/header.php'; ?>

    <div class="banner"></div>

    <div class="container">
        <h1>Productos</h1>
        <?php
        if (isset($_SESSION['rol']) && $_SESSION['rol'] == 2) {
            echo '
            <center>
                <a href="../pages/agregarProducto.php" class="btn-agregar">Agregar Productos</a>
            </center>';
        }
        ?>
        <div class="flex-container">
            <?php
                for($i = 0; $i < 9; $i++){
                    echo "
                    <div class='producto'>
                        <div class='producto-img'>
                            <img src='../images/producto.png'/>
                        </div>
                        <div class='producto-info'>
                            <h2>Producto 1</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                            <a href='#'>Ver más</a>
                            <label>$$$</label>
                        </div>
                    </div>";
                }
            ?>
        </div>
    </div>

    <?php include '../components/footer.php'; ?>
</body>
</html>