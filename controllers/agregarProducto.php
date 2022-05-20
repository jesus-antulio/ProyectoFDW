<?php
    require "../database/CAD.php";
    session_start();

    $producto = $_POST['producto'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $imagen = "../images/".$_POST['imagen'];

    $cad = new CAD();
    $cad->agregarProducto($producto, $descripcion, $precio, $stock, $imagen);
    
    unset($_POST['producto']);
    unset($_POST['descripcion']);
    unset($_POST['precio']);
    unset($_POST['stock']);
    unset($_POST['imagen']);
?>