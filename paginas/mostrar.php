<?php
// Incluimos la conexión para que funcione la base de datos
include("conexion.php");

// Consultamos todos los datos de la tabla 'ephoria'
$sql = "SELECT * FROM ephoria";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registros de Contacto</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; padding: 20px; }
        .contenedor { width: 80%; margin: auto; background: white; padding: 20px; border-radius: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
        th { background: #ff4d94; color: white; }
        .boton { display: inline-block; padding: 10px 15px; background: #333; color: white; border-radius: 5px; text-decoration: none; margin-top: 20px; }
    </style>
</head>
<body>

<div class="contenedor">
    <h1>Mensajes recibidos</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Mensaje</th>
        </tr>

        <?php 
        // Mostramos cada fila de la base de datos
        while($fila = mysqli_fetch_assoc($resultado)){ ?>
        <tr>
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['correo']; ?></td>
            <td><?php echo $fila['mensaje']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <a href="index2.html" class="boton">Volver al inicio</a>
</div>

</body>
</html>