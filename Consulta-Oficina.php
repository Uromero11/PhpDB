<html>
<head>
<title>Consulta Oficina</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include("conexionOficinas.php");
$consulta="Select * from oficinas order by oficina";
echo "<table border='2'>
<tr>
<th>oficina </th>
<th>ciudad </th>
<th>region </th>
<th>director </th>
<th>objetivo </th>
<th>ventas </th>
</tr>
";
$ejecutar_consulta=$conexion->query($consulta);
while($registro=$ejecutar_consulta->fetch_assoc())  // es lo mismo que fetch_array, asocia con el nombre pais
{
    $oficina=$registro['oficina'];
	$ciudad=$registro['ciudad'];
    $region=$registro['region'];
	$director=$registro['director'];
	$objetivo=$registro['objetivo'];
	$ventas=$registro['ventas'];

echo "
<tr>
<td>$oficina </td>
<td>$ciudad </td>
<td>$region </td>
<td>$director </td>
<td>$objetivo </td>
<td>$ventas </td>
</tr>";
}

echo "</table>";
$conexion->close();
?>
</body>
</html>
