<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/info.php'; ?>
    <title>Agregar Productos</title>
    <link rel="stylesheet" href="../styles/agregarProducto.css">
</head>
<body>
    <?php include '../components/header.php'; ?>

    <div class="container">
        <h1> Editar Producto </h1>
        <h2> Lea el siguiente formulario para modifica el producto </h2>
        <div class=flex-container>
            <div class="datos">
                <?php
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $band = false;
                    
                    for ($i = 0; $i < $_SESSION['tam']; $i++) {
                        if ($_SESSION['info'][$i]['id_producto'] == $id) {
                            $nombre = $_SESSION['info'][$i]['nombre'];
                            $descripcion = $_SESSION['info'][$i]['descripcion'];
                            $precio = $_SESSION['info'][$i]['precio'];
                            $imagen = $_SESSION['info'][$i]['imagen'];
                            $stock = $_SESSION['info'][$i]['cantidad'];
                            $band = true;
                        }
                    }
                    
                    if($band){
                        echo "
                        <form id='formulario' name='formulario' method='post' action='../controllers/editarProducto.php'>
                            <p> Nombre: </p>
                            <input name='producto' id='producto' value='$nombre' />
                            <p> Descripción: </p>
                            <input name='descripcion' id='descripcion' value='$descripcion' />
                            <p> Precio: </p>
                            <input name='precio' id='precio' value='$precio' />
                            <p> Stock: </p>
                            <input name='cantidad' id='cantidad' value='$stock' />
                            <p> Imagen: </p>
                            <input name='imagen' name='imagen' value='$imagen'>
                            <input name='id_producto' type='hidden' id='id_producto' value='$id' />
                            <p> Asegurese que la imagen esté en la carpeta <i>images</i> </p>
                            <center>
                                <input type='submit' value='Modificar Producto'>
                            </center>
                            <div class='nota'>
                                <p> <b>NOTA:</b> En caso de no existir una imagen del producto, poner <i>producto.png</i> </p>
                            </div>
                        </form>
                        ";
                    } else {
                        echo "
                        <h1> No se encontró el producto </h1>
                        ";
                    }
                }
                ?>
            </div>
            <div class="line"></div>
            <div class="imag">
                <img src="../assets/inventario.jpg" alt="inventario">
            </div>
        </div>
    </div>

    <?php include '../components/footer.php'; ?>
</body>
</html>