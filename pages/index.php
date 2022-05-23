<?php
    session_start();
    function logout(){
        session_destroy();
    }

    if(isset($_GET['band'])){
        logout();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../components/info.php'; ?>
        <title>Reposteria</title>
        <link rel="stylesheet" href="../styles/homePage.css">
    <body>
        <?php include '../components/header.php'; ?>
        
        <div class = "banner"></div>
        
        <div class="content">
            <div class="info"> 
                <h1>Bienvenido a Reposteria</h1>
                <p>
                    En esta pagina encontraras todo lo necesario para poder elavorar todos tus postres,
                    desde lo más sencillo hasta lo más complejo.
                </p>
                <h2>Productos</h2>
                <p>
                    Los productos que encontraras pueden ser:
                    <ul>
                        <li> Harinas </li>
                        <li> Esencias </li>
                        <li> Decoraciones </li>
                        <li> Moldes </li>
                        <li> y más!!! </li>
                    </ul>
                </p>
            </div>
        </div>

        <?php
            include '../components/footer.php';
        ?>
        
    </body>
</html>