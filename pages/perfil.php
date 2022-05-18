<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link rel="shortcut icon" type="image/jpg" href="../assets/logo.png" />
    <script src="https://kit.fontawesome.com/933e55e7ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/compartido.css">
    <link rel="stylesheet" href="../styles/perfil.css">
</head>
<body>
    <?php include '../components/header.php'; ?>

    <div class="container">
        <h1> Mi Perfil </h1>
        <div class="flex-container">
            <div>
                <i class="fa-solid fa-image-portrait fa-10x"></i>
            </div>
            <div>
                <h2> <?php echo $_SESSION['nombre']; ?> </h2>
                <p> <b>Correo: </b><?php echo $_SESSION['correo']; ?> </p>
                <p> <b>Teléfono: </b> <?php echo $_SESSION['telefono']; ?> </p>
                <p> <b>Tipo de cuenta: </b> 
                    <?php 
                    if(isset($_SESSION['rol']) == 1){
                        echo "Cliente";
                    }
                    ?> 
                </p>
                
            </div>
        </div>    
    </div>

    <?php include '../components/footer.php'; ?>
</body>
</html>