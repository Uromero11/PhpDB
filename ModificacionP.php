<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ModificacionP</title>
</head>

<body>
<?php
$num_pedido=$_POST["numpedido-oculto"];
$fecha_pedido=$_POST["fecha_nvo"];
$cliente=$_POST["cliente_nvo"];
$vendedor=$_POST["vendedor_nvo"];
$producto=$_POST["producto_nvo"];
$cantidad=$_POST["cantidad_nvo"];
$precio=$_POST["precio_nvo"];
$importe=$_POST["importe_nvo"];

include("conexionOficinas.php");

$consulta="UPDATE pedidos SET num_pedido='$num_pedido',fecha_pedido='$fecha_pedido',cliente='$cliente',vendedor='$vendedor',producto='$producto',cantidad='$cantidad',precio='$precio',importe='$importe', where num_pedido='$num_pedido'";
$ejecutar_consulta=$conexion->query($consulta);
if ($ejecutar_consulta)
echo "<script> alert('Se ha Modificado el pedido con numpedido: $num_pedido');</script>";
else
echo"<script> alert('No se pudo Modificar el pedido con numpedido: <b> $numpedido </b> :(');</script>";

$conexion->close();
?>
</body>
</html>
