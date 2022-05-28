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
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="../styles/perfil.css">
</head>
<body>
    <?php include '../components/header.php'; ?>
    <?php
        require "../database/CAD.php";
        if(isset($_SESSION['rol']) && isset($_SESSION['rol'])==2){
            $cad = new CAD();
            $usuarios = $cad->getUsuarios();
            foreach ($usuarios as $usuario) {
                if($usuario['id_usuario'] == $_GET['id']){
                    $id = $usuario['id_usuario'];
                    $nombre = $usuario['nombre'];
                    $correo = $usuario['correo'];
                    $telefono = $usuario['telefono'];
                    $rol = $usuario['rol'];
                }
            }
        }
    ?>
    <div class="container">
        <h1> Editar Perfil </h1>
        <div class="flex-container">
            <div>
                <i class="fa-solid fa-image-portrait fa-10x"></i>
            </div>
            <div>
                <form action="../controllers/editarUsuario.php" method="POST">
                    <p> <b>ID de usuario: </b> <?php echo $id; ?> </p>
                    <input type="hidden" name="id_usuario" value="<?php echo $id; ?>">
                    <p> Nombre </p>
                    <input type="text" name="nombre" value="<?php echo $nombre; ?>">
                    <p> Correo </p>
                    <input type="text" name="correo" value="<?php echo $correo; ?>">
                    <p> Teléfono </p>
                    <input type="text" name="telefono" value="<?php echo $telefono; ?>">
                    <p> Tipo de cuenta </p>
                    <select name="rol">
                        <option value="1" <?php if($rol==1){echo "selected";} ?>>Cliente</option>
                        <option value="2" <?php if($rol==2){echo "selected";} ?>>Administrador</option>
                    </select>
                    <input type="submit" value="Modificar">
                </form>
            </div>
        </div>
    </div>
    <?php include '../components/footer.php'; ?>
</body>