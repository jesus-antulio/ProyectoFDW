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
                require_once '../database/CAD.php';
                $cad = new CAD();
                $cad -> mostrarProductos();

                for($i = 0; $i < $_SESSION['tam']; $i++){
                    $id = $_SESSION['info'][$i]['id_producto'];
                    $nombre = $_SESSION['info'][$i]['nombre'];
                    $descripcion = $_SESSION['info'][$i]['descripcion'];
                    $precio = "$".$_SESSION['info'][$i]['precio'];
                    $imagen = $_SESSION['info'][$i]['imagen'];

                    echo "
                    <div class='producto'>
                        <div class='producto-img'>
                            <img src='$imagen'/>
                        </div>
                        <div class='producto-info'>
                            <h2>$nombre</h2>
                            <p>$descripcion</p>
                            <a href='#'>Ver más</a>
                            <label>$precio</label>
                        </div>
                    </div>";


                    // echo "
                    // <div class='producto'>
                    //     <div class='img'>
                    //         <img src='$imagen' alt='$nombre'>
                    //     </div>
                    //     <div class='producto-info'>
                    //         <h2>$nombre</h2>
                    //         <p>$descripcion</p>
                    //         <p>$precio</p>
                    //     </div>
                    //     <div class='btn-container'>
                    //         <a href='../pages/producto.php?id='.$id.'' class='btn-ver'>Ver</a>
                    //         <a href='../pages/carrito.php?id='.$id.'' class='btn-carrito'>Agregar al carrito</a>
                    //     </div>
                    // </div>";
                }
            ?>
        </div>
    </div>

    <?php include '../components/footer.php'; ?>
</body>
</html>