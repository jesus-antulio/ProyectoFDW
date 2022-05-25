<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/info.php'; ?>
    <title>Resposteria | Productos </title>
    <link rel="stylesheet" href="../styles/product-info.css">
</head>
<body>
    <?php include '../components/header.php'; ?>

    <div class="container">
        <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];

                for ($i = 0; $i < $_SESSION['tam']; $i++) {
                    if ($_SESSION['info'][$i]['id_producto'] == $id) {
                        $nombre = $_SESSION['info'][$i]['nombre'];
                        $descripcion = $_SESSION['info'][$i]['descripcion'];
                        $precio = "$".$_SESSION['info'][$i]['precio'];
                        $imagen = $_SESSION['info'][$i]['imagen'];
                        $stock = $_SESSION['info'][$i]['cantidad'];
                    }
                }
                echo "
                <h1> $nombre </h1>
                <div class='flex-container'>
                    <div class='image-container'>
                        <img src='$imagen' alt='$imagen' />
                    </div>
                    <div class='informacion'>
                        <p> $descripcion </p>
                        <p> Precio: $precio </p>
                        <p> Stock: $stock </p>
                        <button> Agregar al carrito </button>
                    </div>
                </div>
                ";
            } else {
                echo "
                <h1> Productos </h1>
                <div class='flex-container'>
                    <div class='image-container'>
                        <img src='../images/producto.png' />
                    </div>
                    <div class='informacion'>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque possimus maxime quos odio assumenda libero rerum pariatur reprehenderit porro, fuga excepturi, earum doloribus vero impedit dolorem magni a nemo atque! </p>
                        <p> Precio: XXX </p>
                        <button> Agregar al carrito </button>
                    </div>
                </div>
                ";
            }

        ?>
    

    </div>

    <?php include '../components/footer.php'; ?>
</body>
</html>