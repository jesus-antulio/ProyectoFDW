<?php
    session_start();

    if(isset($_SESSION['carrito'])){
        $carrito = $_SESSION['carrito'];
        if(isset($_POST['producto'])){
            $producto = $_POST['producto'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
            $imagen = $_POST['imagen'];
            $id_producto = $_POST['id_producto'];
            $num=0;
            $carrito[]=array(
                "producto"=>$producto,
                "descripcion"=>$descripcion,
                "precio"=>$precio,
                "cantidad"=>$cantidad,
                "imagen" => $imagen,
                "id_producto" => $id_producto);
        }
    } else {
        $producto = $_POST['producto'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $imagen = $_POST['imagen'];
        $id_producto = $_POST['id_producto'];
        $num=0;
        $carrito[]=array(
            "producto"=>$producto,
            "descripcion"=>$descripcion,
            "precio"=>$precio,
            "cantidad"=>$cantidad,
            "imagen" => $imagen,
            "id_producto" => $id_producto);
    }

    echo $id_producto;

    $_SESSION['carrito'] = $carrito;

    header("Location: ".$_SERVER['HTTP_REFERER']."");
?>