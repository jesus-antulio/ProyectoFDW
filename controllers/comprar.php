<?php
    session_start();
    require_once '../database/CAD.php'; //ARchivo que se encargara de realizar la conexion a la BD


    if(!isset($_SESSION['idUsuario'])){
        header('Location: ../pages/login.php');
    } else{
        $idUsuario = $_SESSION['idUsuario'];
        #Datos del producto
        $carrito = $_SESSION['carrito'];
        $productos = '';
        for($i = 0; $i <= count($carrito)-1; $i++){
            if($carrito[$i]!=NULL){
                $producto = $carrito[$i]['producto'];
                $productos .= $producto . ',';
                $descripcion = $carrito[$i]['descripcion'];
                $precio = $carrito[$i]['precio'];
                $cantidad = $carrito[$i]['cantidad'];                
            }
        }
        $total = $_SESSION['total'] = $_POST['total'];

        #Crear venta en la BD
        $cad = new CAD();
        $cad -> crearVenta($idUsuario, $productos, $total);
    }

?>