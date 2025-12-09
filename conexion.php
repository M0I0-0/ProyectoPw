<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$bdd = "proyecto";


$conectar = mysqli_connect($host, $usuario, $contrasena, $bdd);


if(!$conectar)  {
  echo "no se pudo conectar con el servidor";
}
 ?>