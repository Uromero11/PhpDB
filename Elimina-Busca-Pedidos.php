<html>
<head>
<title>Eliminar Pedidos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body background="imagenes/fondo1.jpg">

<?php
include("conexionOficinas.php");
$num_pedido=$_POST["numpedido_slc"];
$consulta="select * from pedidos where num_pedido='$num_pedido'";
$ejecutar_consulta=$conexion->query($consulta);

if ($registro=$ejecutar_consulta->fetch_assoc()){
?>
<form name="form1" method="post" action="EliminacionP.php">
  <p>&nbsp;</p>
  <p align="center">PEDIDO A ELIMINAR </p>
  <table width="48%" border="1" align="center">
    <tr> 
      <td width="36%">NUMPEDIDO</td>
      <td width="64%"><?php echo $registro["num_pedido"] ?>&nbsp;</td>
    </tr>
    <tr> 
      <td>FECHA</td>
      <td><?php echo $registro["fecha_pedido"] ?>&nbsp;</td>
    </tr>
    <tr> 
     <td>CLIENTE</td>
      <td><?php echo $registro["cliente"] ?>&nbsp;</td>
    </tr>
    <tr> 
      <td>VENDEDOR</td>
      <td><?php echo $registro["vendedor"] ?>&nbsp;</td>
    </tr>
    <tr> 
      <td>PRODUCTO</td>
      <td><?php echo $registro["producto"] ?>&nbsp;</td>
    </tr>
    <tr> 
      <td>CANTIDAD</td>
      <td><?php echo $registro["cantidad"] ?>&nbsp;</td>
    </tr>
    <tr> 
      <td>PRECIO</td>
      <td><?php echo $registro["precio"] ?>&nbsp;</td>
    </tr>
    <tr> 
      <td>IMPORTE</td>
      <td><?php echo $registro["importe"] ?>&nbsp;</td>
    </tr>
      <td><input name="numpedido-oculto" type="hidden" id="numpedido-oculto" value="<?php echo $registro["num_pedido"] ?>"></td>
      <td><div align="center">
          <input type="submit" name="Submit" value="ELIMINAR PEDIDO">
        </div></td>
    </tr>
  </table>
  <p align="center"><a href="MAIN_IZDO.html" target="mainFrame">REGRESAR</a></p>
  <p>&nbsp;</p>
  <p align="center"><a href="Elimina-Pedidos.php">OTRO PEDIDO, CLICK AQUI</a></p>
</form>
<?php
}

?>
<p>&nbsp;</p></body>
</html>
