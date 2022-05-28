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
                <p> <b> ID de usuario: </b> <?php echo $_SESSION['idUsuario']; ?> </p>

            </div>
        </div>
        <?php if(isset($_SESSION['rol']) && isset($_SESSION['rol'])==2){?>
        <h1> Modificar Cuentas </h1>
        <div class="flex-container">
            <center>
                <table border="1" cellpadding="5" cellspacing="0">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Tipo de Cuenta</th>
                    </tr>
                    <?php
                    require "../database/CAD.php";
                    $cad = new CAD();
                    $usuarios[] = $cad->getUsuarios();
                    for($i = 0; $i < count($usuarios[0]); $i++){
                        echo '<tr>';
                        echo '<td>'.$usuarios[0][$i]['id_usuario'].'</td>';
                        echo '<td>'.$usuarios[0][$i]['nombre'].'</td>';
                        echo '<td>'.$usuarios[0][$i]['correo'].'</td>';
                        echo '<td>'.$usuarios[0][$i]['telefono'].'</td>';
                        echo '<td>'.$usuarios[0][$i]['rol'].'</td>';
                        echo '<td><button><a href="editarUsuario.php?id='.$usuarios[0][$i]['id_usuario'].'">Editar</a></button></td>';
                        echo '<td><button><a href="../controllers/eliminarUsuario.php?id='.$usuarios[0][$i]['id_usuario'].'">Eliminar</a></button></td>';
                        echo '</tr>';
                    }
                    ?>
                </table>
            </center>
        </div>
        <?php } ?>
    </div>

    <?php include '../components/footer.php'; ?>
</body>
</html>