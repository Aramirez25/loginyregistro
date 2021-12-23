<?php
include 'conexion.php';

$name = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

//TO DO : Hacer validacion

$consulta = "INSERT INTO usuarios (nombre_usuario, email_usuario, contrasena_usuario) VALUES ('$name', '$email', '$password')";

$exito = $conn->query($consulta);

if ($exito){
    header('Location: /loginyregistro/login.php?ok=1');
}else{
    echo "Error: ".$conn->error;
    //header('Location: /loginyregistro/index.php?ok=0');
}

?>