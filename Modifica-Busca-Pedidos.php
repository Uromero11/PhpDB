<html>
<head>
<title>Modificar Oficina</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body background="imagenes/fondo1.jpg">

<?php
$oficina=$_POST["numpedido_slc"];
include("conexionOficinas.php");
$consulta="select * from pedidos where num_pedido='$num_pedido'";
$ejecutar_consulta=$conexion->query($consulta);

if ($registro=$ejecutar_consulta->fetch_assoc()){
?>
<form name="form1" method="post" action="Modificacion.php">
  <p>&nbsp;</p>
  <h1 align="center">PEDIDO A MODIFICAR </h1>
  <p align="center">Modifique los Datos Necesarios</p>
  <table width="57%" border="1" align="center">
    <tr>
       <td>NUMPEDIDO</td>
      <td align="center"><label for="textfield"></label>
      <input type="number" name="numpedido_nvo" id="numpedido_nvo" value="<?php echo $registro["num_pedido"] ?>">&nbsp;</td>&nbsp;</td>
    </tr>
    <tr>
      <td>FECHA</td>
      <td align="center"><label for="textfield"></label>
      <input type="date" name="fecha_nvo" id="fecha_nvo" value="<?php echo $registro["fecha_pedido"] ?>">&nbsp;</td>
    </tr>
    <tr>
      <td>CLIENTE</td>
      <td align="center"><label for="textfield2"></label>
      <input type="number" name="cliente_nvo" id="cliente_nvo" value="<?php echo $registro["cliente"]?>">&nbsp;</td>
    </tr>
    <tr>
      <td>VENDEDOR</td>
      <td align="center"><label for="textfield3"></label>
      <input type="number" name="vendedor_nvo" id="vendedor_nvo" value="<?php echo $registro["vendedor"]?>">&nbsp;</td>
    </tr>
    <tr>
      <td>PRODUCTO</td>
      <td align="center"><label for="textfield4"></label>
      <input type="text" name="producto_nvo" id="producto_nvo" value="<?php echo $registro["producto"]?>">&nbsp;</td>
    </tr>
    <tr>
      <td>CANTIDAD</td>
      <td align="center"><label for="textfield5"></label>
      <input type="number" name="cantidad_nvo" id="cantidad_nvo" value="<?php echo $registro["cantidad"]?>">&nbsp;</td>
    </tr>
    <tr>
      <td>PRECIO</td>
      <td align="center"><label for="textfield5"></label>
      <input type="number" name="precio_nvo" id="precio_nvo" value="<?php echo $registro["precio"]?>">&nbsp;</td>
    </tr>
    <tr>
      <td>IMPORTE</td>
      <td align="center"><label for="textfield5"></label>
      <input type="number" name="importe_nvo" id="importe_nvo" value="<?php echo $registro["importe"]?>">&nbsp;</td>
    </tr>
    <tr>
      <td><input name="numpedido-oculto" type="hidden" id="numpedido-oculto" value="<?php echo $registro["num_pedido"] ?>"></td>
      <td><div align="center">
          <input type="submit" name="Submit" value="MODIFICAR PEDIDO">
        </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p align="center"><a href="Modifica-Pedidos.php">OTRO PEDIDO, CLICK AQUI</a></p>
</form>
<?php
}

?>
<p>&nbsp;</p></body>
</html>
