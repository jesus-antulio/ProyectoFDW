<?php
    require "../database/CAD.php";
    session_start();

    $id_producto = $_POST['id_producto'];
    $producto = $_POST['producto'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['cantidad'];
    $imagen = $_POST['imagen'];

    $cad = new CAD();
    $cad->modificarProducto($id_producto, $producto, $descripcion, $precio, $stock, $imagen);

    unset($_POST['id_producto']);
    unset($_POST['producto']);
    unset($_POST['descripcion']);
    unset($_POST['precio']);
    unset($_POST['stock']);
    unset($_POST['imagen']);
?>