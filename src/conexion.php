<?php

//Create connection
$conn = new mysqli("localhost","root","","control_calidad");
//Check connection
if($conn->connect_error){
    die("Fallo la conexión: ". $conn->connect_error);
}

?> 