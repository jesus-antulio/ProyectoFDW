<?php
#CAD -> Capa de Acceso de Datos
require_once 'conexion.php';

class CAD
{
    public $con;

    static public function agregaUsuario($nombre, $pass, $mail, $telefono, $rol)
    {
        $con = new Conexion(); //Establecer conexión a la BD
        $query = $con->conectar()->prepare("INSERT INTO usuarios (nombre, correo, contraseña, telefono, rol) VALUES ('$nombre', '$mail', '$pass', '$telefono', '$rol')");

        if ($query->execute()) {
            // echo 'El usuario '.$nombre.' se ha registrado correctamente';
            echo
            '<script>
                    alert("El usuario ' . $nombre . ' se ha registrado correctamente. Ahora ya puedes iniciar sesión");
                    window.location.href="../pages/login.php";	
            </script>';
        } else {
            echo
            '<script>
                    alert("Error al registrar el usuario");
                    window.location.href="../pages/singup.php";
            </script>';
        }
    }

    static public function verificaUsuario($correo, $password) {
        $con = new Conexion(); //Establecer conexión a la BD
        $query = $con->conectar()->prepare("SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$password'");
        
        if($query->execute()){
            $row = $query->fetch(PDO::FETCH_NUM);
            if($row){
                // echo $row[0].' - '.$row[1].' - '.$row[2].' - '.$row[3];
                $_SESSION['idUsuario'] = $row[0];
                $_SESSION['nombre'] = $row[1];
                $_SESSION['correo'] = $row[2];
                $_SESSION['telefono'] = $row[4];
                $_SESSION['rol'] = $row[5];
                return true;
            }
        } else {
            return false;
        }
    }

    static public function agregarProducto($producto, $descripcion, $precio, $stock, $imagen){
        $con = new Conexion(); //Establecer conexión a la BD
        $query = $con->conectar()->prepare("INSERT INTO productos (nombre, descripcion, cantidad, precio, imagen) VALUES ('$producto', '$descripcion', '$stock', '$precio', '$imagen')");

        if ($query->execute()) {
            // echo 'El usuario '.$nombre.' se ha registrado correctamente';
            echo
            '<script>
                    alert("El producto ' . $producto . ' se ha registrado correctamente");
                    window.location.href="../pages/agregarProducto.php";	
            </script>';
        } else {
            echo
            '<script>
                    alert("Error al registrar el producto");
                    window.location.href="../pages/agregarProducto.php";
            </script>';
        }
    }

    static public function modificarProducto($id_producto, $producto, $descripcion, $precio, $stock, $imagen){
        $con = new Conexion(); //Establecer conexión a la BD
        $query = $con->conectar()->prepare("UPDATE productos SET nombre = '$producto', descripcion = '$descripcion', cantidad = '$stock', precio = '$precio', imagen = '$imagen' WHERE id_producto = '$id_producto'");

        if ($query->execute()) {
            echo
            '<script>
                    alert("El producto ' . $producto . ' se ha modificado correctamente");
                    window.location.href="../pages/productos.php";	
            </script>';
        } else {
            echo
            '<script>
                    alert("Error al modificar el producto");
                    window.location.href="../pages/productos.php";
            </script>';
        }
    }

    static public function mostrarProductos(){
        $con = new Conexion(); //Establecer conexión a la BD
        $query = $con->conectar()->prepare("SELECT * FROM productos");
        if($query->execute()){
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $datos[] = $row;
            }

            $tam = count($datos);
            $_SESSION['info'] = $datos;
            $_SESSION['tam'] = $tam;
        }
    }

    static public function eliminarProducto($id_producto){
        $con = new Conexion(); //Establecer conexión a la BD
        $query = $con->conectar()->prepare("DELETE FROM productos WHERE id_producto = '$id_producto'");

        if ($query->execute()) {
            echo
            '<script>
                    alert("El producto se ha eliminado correctamente");
                    window.location.href="../pages/productos.php";	
            </script>';
        } else {
            echo
            '<script>
                    alert("Error al eliminar el producto");
                    window.location.href="../pages/productos.php";
            </script>';
        }
    }

    static public function updateStock($id){
        $con = new Conexion(); //Establecer conexión a la BD
        $query = $con->conectar()->prepare("SELECT * FROM productos WHERE id_producto = '$id'");
        if($query->execute()){
            $row = $query->fetch(PDO::FETCH_NUM);
            if($row){
                $stock = $row[3];
                $stock--;
                $query = $con->conectar()->prepare("UPDATE productos SET cantidad = '$stock' WHERE id_producto = '$id'");
                if($query->execute()){
                    return true;
                }
            } else {
            }
        }
    }

    static public function crearVenta($idUsuario, $productos, $total){
        $con = new Conexion(); //Establecer conexión a la BD
        $query = $con->conectar()->prepare("INSERT INTO venta (id_usuario, productos, total, fecha_compra) VALUES ('$idUsuario', '$productos', '$total', NOW())");

        if ($query->execute()) {
            header('Location: ../controllers/sendMail.php');
        } else {
            echo
            '<script>
                    alert("Error al registrar la venta");
                    window.location.href="../pages/index.php";
            </script>';
        }
    }
}
