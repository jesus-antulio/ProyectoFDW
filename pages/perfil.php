<?php 
    session_start();
    if(!isset($_SESSION['rol'])){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/info.php'; ?>
    <title>Mi Perfil</title>
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
                    switch ($_SESSION['rol']) {
                        case '1':
                            echo "Cliente";
                            break;
                        case '2':
                            echo "Administrador";
                            break;
                        default:
                            echo "No definido";
                            break;
                    }
                    ?> 
                </p>

            </div>
        </div>    
    </div>

    <?php include '../components/footer.php'; ?>
</body>
</html>