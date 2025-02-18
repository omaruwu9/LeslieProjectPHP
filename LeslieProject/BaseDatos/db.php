<?php 
$servername = "localhost";
$username = "omaruwu9";
$password = "omaruwu9";
$dbname = "prueba_proyecto";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error){
	die("Conexion fallida: ".$conn->connect_error);
}
 ?>
