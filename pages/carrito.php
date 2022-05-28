<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/info.php'; ?>
    <title>Resposteria | Carrito de Compras</title>
    <link rel="stylesheet" href="../styles/carrito.css">
</head>
<body>
    <?php include '../components/header.php'; ?>

    <div class="container">
        <h1> Tu carrito </h1>
        <div class="flex-container">
            <div>
                <img src="../assets/logistica-de-compras.jpg">
            </div>
            <div class="line"></div>
            <div class="datos">
                <?php
                if(isset($_SESSION['carrito'])){
                    $carrito = $_SESSION['carrito'];
                    $_SESSION['carrito'] = $carrito;               
                }
                $total=0;

                if(isset($_SESSION['carrito'])){
                    $totalCantidad = 0;
                    for($i = 0; $i <= count($carrito)-1; $i++){
                        if($carrito[$i] != NULL){
                            //$total_cantidad = $carrito['cantidad'];
                            $total_cantidad = $carrito[$i]['cantidad'];
                            $total_cantidad ++;
                            $totalCantidad += $total_cantidad; //cantdad de productos a comprar
                        }
                    }
                }
                ?>

                <div class='carrito'>
                    <h2>Productos</h2>
                    <div class='product'>
                        <?php
                        if(isset($_SESSION['carrito'])){
                            for($i = 0; $i <= count($carrito)-1; $i++){
                                if($carrito[$i]!=NULL){
                        ?>
                        <div class='flex-row'>
                            <div class='imgP'>
                                <img src='<?php echo $carrito[$i]['imagen'] ?>'>
                            </div>
                            <div class='datP'>
                                <h3><?php echo $carrito[$i]['producto'] ?></h3>
                                <p><?php echo $carrito[$i]['descripcion'] ?></p>
                                <div class='flex'>
                                    <p><b>$<?php echo $carrito[$i]['precio'] ?> </b></p>
                                    <p><b> <?php echo $carrito[$i]['cantidad'] ?> unidade(s) </b></p>
                                </div>
                            </div>
                        </div>
                        <?php
                                $total += $carrito[$i]['precio'] * $carrito[$i]['cantidad'];
                                }
                            } 
                        } else {
                            echo "<h2>No hay productos en el carrito</h2>";
                        }
                        ?>
                    </div>
                    <div class='fin'>
                            <div class='total'>
                                <p><b>Total: <?php echo "$$total"?> </b></p>
                            </div>
                            <div class='boton'>
                                <?php if(isset($_SESSION['carrito'])){ ?>
                                <form action='../controllers/comprar.php' method='POST'>
                                    <input type='hidden' name='total' value='".$total."'>
                                    <input type='submit' value='Comprar'>
                                </form>
                                <?php } else {  ?>
                                <form action='../controllers/comprar.php' method='POST'>
                                    <input type='submit' value='Comprar' disabled>
                                </form>
                                <?php } ?>
                            </div>
                            <div class = 'boton'>
                                <button> <a href='../controllers/borrarCarrito.php'> Vaciar Carrito </a> </button>
                            </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    <?php include '../components/footer.php'; ?>
</body>
</html>