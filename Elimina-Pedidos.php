<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Elimina Pedidos</title>
<style type="text/css">
body,td,th {
	color: #00C;
}
body {
	background-color: #FF9;
}
</style>
</head>

<body background="imagenes/fondo1.jpg">
<form id="form1" name="form1" method="post" action="Elimina-Busca-Pedidos.php">
  <p>&nbsp;</p>
  <p align="center">ELIMACION DE PEDIDOS</p>
  <p align="center">Elige el Pedido a Eliminar:</p>
  <p align="center">
    <label for="numpedido_slc"></label>
    <select name="numpedido_slc" size="1" id="numpedido_slc">
    <option value="">- - - </option>
		<?php include("conexionOficinas.php");
$consulta="SELECT * FROM pedidos ORDER BY num_pedido";
$ejecutar_consulta=$conexion->query($consulta); 
while($registro=$ejecutar_consulta->fetch_assoc()) 
{
$num_pedido=$registro["num_pedido"];
echo "<option value='$num_pedido'>$num_pedido </option>";
}?>
    </select>
  </p>
  <p>&nbsp;</p>
  <p align="center">
    <input type="submit" name="button" id="button" value="MOSTRAR EL PEDIDO A ELIMINAR" />
  </p>
</form>
</body>
</html>