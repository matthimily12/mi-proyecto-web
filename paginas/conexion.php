<?php

$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "ephoria",
    3307
);

if(!$conexion){
    die("Error de conexión: " . mysqli_connect_error());
}

?>