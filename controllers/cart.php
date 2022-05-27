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
            $num=0;
            $carrito[]=array(
                "producto"=>$producto,
                "descripcion"=>$descripcion,
                "precio"=>$precio,
                "cantidad"=>$cantidad,
                "imagen" => $imagen);
        }
    } else {
        $producto = $_POST['producto'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $imagen = $_POST['imagen'];
        $num=0;
        $carrito[]=array(
            "producto"=>$producto,
            "descripcion"=>$descripcion,
            "precio"=>$precio,
            "cantidad"=>$cantidad,
            "imagen" => $imagen);
    }

    $_SESSION['carrito'] = $carrito;

    header("Location: ".$_SERVER['HTTP_REFERER']."");

    echo "
    <script>
    alert('Producto añadido al carrito');
    </script>";
?>