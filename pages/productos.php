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
                    $precio = $_SESSION['info'][$i]['precio'];
                    $imagen = $_SESSION['info'][$i]['imagen'];

                    echo "
                    <form id='formulario' name='formulario' method='post' action='../controllers/cart.php'>
                        <div class='producto'>
                            <div class='producto-img'>
                                <img src='$imagen'/>
                                <input name='imagen' type='hidden' name='imagen' value='$imagen'>
                            </div>
                            <div class='producto-info'>
                                <h2>$nombre</h2>
                                <input name='producto' type='hidden' id='producto' value='$nombre' />
                                <p>$descripcion</p>
                                <input name='descripcion' type='hidden' id='descripcion' value='$descripcion' />
                                <center> <p> $$precio</p> </center>
                                <input name='precio' type='hidden' id='precio' value='$precio' />
                                <input name='cantidad' type='hidden' id='cantidad' value=1 />
                            </div>
                            <div class='producto-btn'>
                                <button class='btn-detalle'> <a href='../pages/detalleProducto.php?id=$id'>Ver</a> </button>
                                <button class='btn-comprar'
                                        type='submit'> Añadir al carrito </button>
                                <!-- 
                                <a href='../pages/detalleProducto.php?id=$id' class='btn-detalle'>Ver más</a>
                                <a> comprar </a> -->
                            </div>
                        </div>
                    </form>";
                }
            ?>
        </div>
    </div>

    <?php include '../components/footer.php'; ?>
</body>
</html>