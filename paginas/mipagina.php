<?php

$conexion = mysqli_connect(
    "host_online",
    "usuario",
    "password",
    "nombre_bd"
);

if(!$conexion){
    die("Error de conexión");
}

?>
