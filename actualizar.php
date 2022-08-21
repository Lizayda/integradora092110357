
<?php

//recibir las variables del formulario y actualizar

// a actualizar los datos";
$codigo=$_POST["codigo"];
$nombre=$_POST["nombre1"];
$apellido=$_POST["apellido"];
$nombrelibro=$_POST["nombre_libro"];

//llamar al archivo conexión
include("basededatos.php");

$sql = "UPDATE `practica`.`alumno` SET `cod_estudiante`='$codigo', `nombre1`='$nombre', `apellido`='$apellido', `nombre_libro`='$nombrelibro' WHERE  `cod_estudiante`=$codigo";

echo "consulta: ".$sql;
if (mysqli_query($conexion, $sql)) {
  
  header("Location: modificar.php");
} else {
  echo "Error al modificar un campo: " . mysqli_error($conexion);
}

mysqli_close($conexion);



?>