<html>
<body>
<?php
$num_pedido=$_POST["numpedido_txt"];
$fecha_pedido=$_POST["fecha_txt"];
$cliente=$_POST["cliente_txt"];
$vendedor=$_POST["vendedor_txt"];
$producto=$_POST["producto_txt"];
$cantidad=$_POST["cantidad_txt"];
$precio=$_POST["precio_txt"];
$importe=$_POST["importe_txt"];
include("conexionOficinas.php");
$consulta="select * from pedidos where num_pedido='$num_pedido'";
$ejecutar_consulta=$conexion->query($consulta);
$num_rows=$ejecutar_consulta->num_rows;
if($num_rows==0){
$consulta="insert into pedidos values('$num_pedido','$fecha_pedido','$cliente','$vendedor','$cantidad','$precio','$importe')";
$ejecutar_consulta=$conexion->query($consulta);

   echo "Hemos enviado tus datos, gracias por visitarnos </br>";
   echo "<a href='Consulta-Pedidos.php'>Ver mi registro: </a>";

}else
echo "<script> alert('el pedido con el numpedido <b> $num_pedido </b> ya existe');</script>";
$conexion->close();
?>
</body>
</html>