<?php
    session_start();

    if(isset($_SESSION['rol']) != 2){
        header('Location: ../pages/index.php');
    }
?>

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
        <h1> Agregar Productos </h1>
        <h2> Lea el siguiente formulario para agregar un nuevo producto </h2>
        <div class=flex-container>
            <div class="datos">
                <form action="../controllers/agregarProducto.php" method="post">
                    <p> Nombre del producto </p>
                    <input type="text" name="producto" placeholder="Nombre">
                    <p> Descripción </p>
                    <input type="text" name="descripcion" placeholder="Descripción">
                    <p> Precio </p>
                    <input type="number" name="precio" placeholder="Precio">
                    <p> Stock </p>
                    <input type="number" name="stock" placeholder="Stock">
                    <p> Imagen (ingresa el nombre del archivo, ejemplo: nombre.jpg) </p>
                    <input type="text" name="imagen" placeholder="Imagen">
                    <p> Asegurese que la imagen esté en la carpeta "images" </p>
                    <center>
                        <input type="submit" value="Agregar Producto">
                    </center>
                    <div class="nota">
                        <p> <b>NOTA:</b> En caso de no existir una imagen del producto, poner "producto.png" </p>
                    </div>
                </form>
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