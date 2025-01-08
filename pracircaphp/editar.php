<?php 
include "conexion.inc.php";
$id=$_GET["id"];
$sql="select * from paciente where id=$id";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
?>
<form action="editarguardar.php" method="get">
	<label>id</label>
	<input type="text" name="id" value="<?php echo $fila["id"];?>">
	<br>
	<label>nombre</label>
	<input type="text" name="nombre" value="<?php echo $fila["nombre"];?>">
	<br>
	<input type="submit" name="Enviar" value="Enviar">	
</form>