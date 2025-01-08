<?php 
include "conexion.inc.php";
$id=$_GET["id"];
$nombre=$_GET["nombre"];
$sql="update paciente set nombre='$nombre' where id=$id";
mysqli_query($con, $sql);
header("Location: listado.php");
?>