<?php

$conexion = mysqli_connect(
    "aws-123.mysql.server.com",
    "usuario123",
    "contraseña123",
    "ephoria"
);

if(!$conexion){
    die("Error de conexión: " . mysqli_connect_error());
}

?>
