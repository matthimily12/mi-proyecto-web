<?php
// Usamos el archivo de conexión centralizado
include("/paginas/conexion.php");

// Recibimos los datos
$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';
$mensaje = $_POST['mensaje'] ?? '';

// CORRECCIÓN: Nombre de tabla cambiado a 'ephoria' para coincidir con tu BD
$sql = "INSERT INTO ephoria (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

$resultado = mysqli_query($conexion, $sql);

if($resultado){
    header("Location: gracias.html");
} else {
    echo "Error al guardar: " . mysqli_error($conexion);
}
?>
