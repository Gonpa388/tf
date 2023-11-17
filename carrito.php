<?php
$servidor = "mangov1.mysql.database.azure.com";
$usuario = "azureuser";
$contrasena = "1234567Gc";
$base_de_datos = "tienda";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_de_datos);
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="carro.php">
    <title>VerCarrito</title>
    <style>
        .styled-table thead tr {
            background-color: #eb920e;
            color: #ffffff;
            text-align: middle;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
    </style>
    <a href="/Arqui/tienda.php" style="
    display: flex;
    padding: 5px 12px;
    text-decoration: none;
    font-weight: bold;
    color: #6F4E37;
    flex-direction: row-reverse;
    ">
        <p>Regresar</p>
    </a>
</head>

<body style="
    display: flex;
    flex-direction: column;
    align-items: stretch;
    font-family: 'Roboto',sans-serif;
">
    <h1>Carrito</h1>
    <br>
    <table class="styled-table">
        <thead>
            <tr>
                <th>id</th>
                <th>producto</th>
                <th>cantidad</th>
                <th>precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM carrito";
            $result = mysqli_query($conexion, $sql);
            while ($mostrar = mysqli_fetch_array($result)) :
            ?>
                <tr>
                    <td><?= $mostrar['id'] ?></td>
                    <td><?= $mostrar['titulo'] ?></td>
                    <td><?= $mostrar['cantidad'] ?></td>
                    <td><?= $mostrar['precio'] ?></td>
                </tr>
            <?php
            endwhile;
            ?>
        </tbody>
    </table>
</body>

</html>