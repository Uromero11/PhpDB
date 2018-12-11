<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificar Pedidos</title>
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
<form id="form1" name="form1" method="post" action="Modifica-Busca-Pedidos.php">
  <p>&nbsp;</p>
  <p align="center">MODIFICACION DE PEDIDOS</p>
  <p align="center">Elige el Pedido a Modificar:</p>
  <p align="center">
    <label for="numpedido_slc"></label>
    <select name="numpedido_slc" size="1" id="numpedido_slc">
      <option value="">- - - </option>
      <?php include("conexionOficinas.php");
$consulta="SELECT * FROM pedidos ORDER BY num_pedidos";
$ejecutar_consulta=$conexion->query($consulta);
while($registro=$ejecutar_consulta->fetch_assoc())
{
$num_pedido=$registro["num_pedido"];
echo "<option value='$num_pedido'>$num_pedido </option>";
}?>
    </select>
  </p>
  <p align="center"><a href="MAIN_IZDO.html" target="mainFrame">REGRESAR</a></p>
  <p>&nbsp;</p>
  <p align="center">
    <input type="submit" name="button" id="button" value="MOSTRAR EL PEDIDO A MODIFICAR" />
  </p>
</form>
</body>
</html>
