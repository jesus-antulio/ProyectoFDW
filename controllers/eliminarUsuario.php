<?php
session_start();
require "../database/CAD.php";
if(isset($_SESSION['rol']) && isset($_SESSION['rol'])==2 && isset($_GET['id'])){
    $cad = new CAD();
    $cad->deleteUsuario($_GET['id']);
}
?>