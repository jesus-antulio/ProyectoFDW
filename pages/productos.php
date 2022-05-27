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
                    $idP = $_SESSION['info'][$i]['id_producto'];
                    $nombre = $_SESSION['info'][$i]['nombre'];
                    $descripcion = $_SESSION['info'][$i]['descripcion'];
                    $precio = $_SESSION['info'][$i]['precio'];
                    $imagen = $_SESSION['info'][$i]['imagen'];
            ?>
                    <form method='post' action='../controllers/cart.php'>
                        <input name='id_producto' type='hidden' id='id_producto' value='<?php echo $idP ?>' />
                        <input name='imagen' type='hidden' name='imagen' value='<?php echo $imagen ?>'> 
                        <input name='producto' type='hidden' id='producto' value='<?php echo $nombre ?>' />
                        <input name='descripcion' type='hidden' id='descripcion' value='<?php echo $descripcion ?>' />
                        <input name='precio' type='hidden' id='precio' value='<?php echo $precio ?>' />
                        <input name='cantidad' type='hidden' id='cantidad' value=1 />
                        <div class='producto'>
                            <div class='producto-img'>
                                <img src='<?php echo $imagen ?>'/>
                            </div>
                            <div class='producto-info'>
                                <h2><?php echo $nombre ?></h2>
                                <p><?php echo $descripcion ?></p>
                                <center> <p> $<?php echo $precio ?></p> </center>
                            </div>
                            <div class='producto-btn'>
                                <button class='btn-detalle'> <a href='../pages/detalleProducto.php?id=<?php echo $idP ?>'>Ver</a> </button>
                                <button class='btn-comprar'
                                        type='submit'> Añadir al carrito </button>
                                <?php if(isset($_SESSION['rol']) && $_SESSION['rol'] == 2){ ?>
                                    <button class='btn-editar'><a href='../pages/editarProducto.php?id=<?php echo $idP ?>'>Editar</a></button>
                                    <button class='btn-eliminar'><a href='../controllers/eliminarProducto.php?id=<?php echo $idP ?>'>Eliminar</a></button>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
            <?php
            }
            ?>
        </div>
    </div>

    <?php include '../components/footer.php'; ?>
</body>
</html>