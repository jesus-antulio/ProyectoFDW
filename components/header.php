<div class="header">
    <div class="logo">
        <img src="../assets/logo.png"  >
    </div>
    <div class="menu">
        <a href="index.php">Inicio</a>
        <a href="productos.php">Productos</a>
        <a href="contacto.php">Contacto</a>
    </div>
    <div class="carrito">
        <a href="../pages/carrito.php">
            <i class="fa-solid fa-cart-shopping fa-2x"></i>
        </a>
    </div>
    <div class="perfil">
        <a href = "../pages/login.php"> 
            <i class="fa-regular fa-circle-user fa-4x" ></i>
        </a>
    </div>
    <?php
    if(isset($_SESSION['rol'])){
        echo
        '<div class="perfil">
            <a href = "../pages/index.php?band=true">
            <i class="fa-solid fa-arrow-right-from-bracket fa-2x"></i>
            </a>
        </div>';
    }
    ?>
</div>