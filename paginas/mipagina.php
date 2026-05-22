<?php

$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "ephoria"
);

if(!$conexion){
    die("Error de conexión");
}

?>