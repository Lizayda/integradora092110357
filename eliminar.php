<?php
//llamar a la conexion de la base de datos
include("basededatos.php");

$consulta="DELETE FROM `practica`.`alumno` WHERE  `cod_estudiante`=2";

//recibir por GET o código o ID
$codigo_estudiante=$_GET['cod_estudiante'];

if (mysqli_query($conexion,$consulta)) {
    
    //regresar a la pagina principal
    header("Location: mostrar.php   ");//nos indica que va regresar a la ventana mostrar.php

  } else {
    echo "Error al tratar de eliminar un nombre: " . mysqli_error($conexion);
  }
  
  mysqli_close($conexion);



?>