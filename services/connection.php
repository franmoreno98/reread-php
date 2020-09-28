<?php
//estilo por procedimientos

$host = "localhost";
$user = "root";
$pass = "";
$db = "reread";

//crear la conexion
$conn = mysqli_connect($host, $user, $pass, $db);

//chekear la conexion
if(!$conn){
    echo "Error: No se pudo conectar al a Mysqli" . PHP_EOL;
    echo "Error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}else{
    mysqli_set_charset($conn, "utf8");
}
?>