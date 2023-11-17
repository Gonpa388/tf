<?php
$servidor = "mangov1.mysql.database.azure.com";
$usuario = "azureuser";
$contrasena = "1234567Gc";
$base_de_datos = "tienda";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_de_datos);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if (isset($_POST['title']) && isset($_POST['price'])) {
    $titulo = $_POST['title'];
    if ($_POST['price'] !== null && is_string($_POST['price'])) {
        $precio = floatval(str_replace('$', '', $_POST['price']));
        
        $sql = "INSERT INTO carrito (titulo, cantidad, precio) VALUES ('$titulo', 1, $precio)";
        
        if ($conexion->query($sql) === TRUE){
            $conexion->close();
        }
    }
}
?>
