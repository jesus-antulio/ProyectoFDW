<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/info.php'; ?>
    <title>Resposteria | Productos </title>
    <link rel="stylesheet" href="../styles/detalleProducto.css">
</head>
<body>
    <?php include '../components/header.php'; ?>

    <div class="container">
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
                    <form id='formulario' name='formulario' method='post' action='../controllers/cart.php'>
                        <input name='imagen' type='hidden' name='imagen' value='$imagen'>
                        <input name='producto' type='hidden' id='producto' value='$nombre' />
                        <input name='descripcion' type='hidden' id='descripcion' value='$descripcion' />
                        <input name='precio' type='hidden' id='precio' value='$precio' />
                        <input name='cantidad' type='hidden' id='cantidad' value=1 />
                        <input name='id_producto' type='hidden' id='id_producto' value='$id' />

                        <h1> $nombre </h1>
                            <div class='flex-container'>
                                <div class='image-container'>
                                    <img src='$imagen' alt='$imagen' />
                                </div>
                                <div class='informacion'>
                                    <p> $descripcion </p>
                                    <p> Precio: $$precio </p>
                                    <p> Stock: $stock </p>
                                    <button type='submit'> Agregar al carrito </button>
                                </div>
                            </div>
                    </form>
                    ";
                } else {
                    echo "
                    <h1> No se encontró el producto </h1>
                    ";
                }
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
            
            if(isset($_SESSION['rol']) && $_SESSION['rol'] == 2){ ?>
                <div class="opc">
                    <button> 
                        <a href='../pages/editarProducto.php?id=<?php echo $id ?>'>Editar</a>
                    </button>
                    <button > 
                        <a href='../controllers/eliminarProducto.php?id=<?php echo $id ?>'>Eliminar</a>
                    </button>
                </div>
        <?php   
            }
        ?>
    

    </div>

    <?php include '../components/footer.php'; ?>
</body>
</html>