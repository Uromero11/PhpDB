<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EliminacionP</title>
</head>

<body>
<?php
$num_pedido=$_POST["numpedido-oculto"];
include("conexionOficinas.php");
$consulta="delete from pedidos where num_pedido='$num_pedido'";
$ejecutar_consulta=$conexion->query($consulta);
if ($ejecutar_consulta)
echo "<script> alert('Se ha Eliminado el pedido con numpedido: $num_pedido');</script>";
else
echo"<script> alert('No se pudo Eliminar el pedido con numpedido: <b> $num_pedido </b> :(');</script>";

$conexion->close();
?>
</body>
</html>