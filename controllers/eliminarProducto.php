<?php 
session_start();
require '../database/CAD.php';
if(isset($_SESSION['rol']) && $_SESSION['rol'] == 2){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $cad = new CAD();
        $cad -> eliminarProducto($id);
    }
}
?>