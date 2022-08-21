<?php

include('basededatos.php');

//recibir por el metodo post,crear variables de recibimiento
$codigo=$_GET['cod_estudiante'];
$nombre=$_GET['nombre1'];
$apellido=$_GET['apellido'];
$nombredelibro=$_GET['nombre_libro'];

//crear consulta para insertar los datos
$consulta="INSERT INTO `alumno` (`cod_estudiante`, `nombre1`, `apellido`, `nombre_libro`) VALUES ('$codigo', '$nombre', '$apellido', '$nombredelibro');";
//crear variable resultado,esta variable va almacenar todo lo que hicimos
$resultado=mysqli_query($conexion,$consulta) or die("error de registro");
//echo "<br>registro exitoso</br>";

mysqli_closet($conexion);//cerrar la conexion
?>