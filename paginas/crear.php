<?php
// 1. Incluimos la conexión
include("/paginas/conexion.php");

// 2. Recibimos los datos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// 3. Insertamos en la base de datos
$sql = "INSERT INTO ephoria(nombre, correo, mensaje) VALUES('$nombre', '$correo', '$mensaje')";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <style>
        body { font-family: Arial; background: #fff0f5; text-align: center; margin-top: 100px; }
        .mensaje { background: #ff4d94; color: white; padding: 20px; width: 300px; margin: auto; border-radius: 10px; font-weight: bold; }
        .boton { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #333; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>

<?php
// 4. Mostramos el mensaje basado en el resultado de la consulta
if($resultado){
    echo "<div class='mensaje'>¡Mensaje enviado correctamente!</div>";
} else {
    echo "<div class='mensaje' style='background:red;'>Error al enviar: " . mysqli_error($conexion) . "</div>";
}
?>

<br>
<a href="index2.html" class="boton">Volver al formulario</a>

</body>
</html>
