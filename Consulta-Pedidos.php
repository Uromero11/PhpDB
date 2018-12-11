<html>
<head>
<title>Consulta Oficina</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include("conexionOficinas.php");
$consulta="Select * from pedidos order by numpedido";
echo "<table border='2'>
<tr>
<th>num_pedido </th>
<th>fecha_pedido </th>
<th>cliente </th>
<th>vendedor </th>
<th>producto </th>
<th>cantidad </th>
<th>precio </th>
<th>importe </th>
</tr>";
$ejecutar_consulta=$conexion->query($consulta);
while($registro=$ejecutar_consulta->fetch_assoc())  // es lo mismo que fetch_array, asocia con el nombre pais
{
    $num_pedido=$registro['num_pedido'];
	$fecha_pedido=$registro['fecha_pedido'];
    $cliente=$registro['cliente'];
	$vendedor=$registro['vendedor'];
	$producto=$registro['producto'];
	$cantidad=$registro['cantidad'];
	$precio=$registro['precio'];
	$cantidad=$registro['cantidad'];

echo "
<tr>
<th>num_pedido </th>
<th>fecha_pedido </th>
<th>cliente </th>
<th>vendedor </th>
<th>producto </th>
<th>cantidad </th>
<th>precio </th>
<th>importe </th>
</tr>";
}

echo "</table>";
$conexion->close();
?>
</body>
</html>
