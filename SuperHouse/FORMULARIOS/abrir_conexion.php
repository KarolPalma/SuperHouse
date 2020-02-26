<?php
  $servidor="localhost";
  $usuario="root";
  $clave="";
  $baseDeDatos="superhouse";

  $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
  if(!$enlace){
    echo "Error con el error del servidor";
  }
?>
