<?php 
include "conexion.inc.php";
$sql="select * from paciente";
$resultado=mysqli_query($con, $sql);
?>
<table>
	<tr>
		<td>ID</td>
		<td>Nombre</td>
		<td>Actividad Física (hrs/semana)</td>
		<td>Consumo de Frutas/Verduras</td>
		<td>Operaciones</td>
	</tr>
<?php
while($fila=mysqli_fetch_array($resultado))
{
	echo "<tr>";
	echo "<td>$fila[id]</td>";
	echo "<td>$fila[nombre]</td>";
	echo "<td>$fila[actividad]</td>";
	echo "<td>$fila[consumo]</td>";
	echo "<td>";
	echo "<a href='editar.php?id=$fila[id]'>Editar</a>";
	echo "</td>";
	echo "</tr>";
}
?>

</table>