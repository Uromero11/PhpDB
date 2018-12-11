<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro de Pedidos</title>
<style type="text/css">
body,td,th {
	font-size: 16px;
	color: #003;
	font-family: Tahoma, Geneva, sans-serif;
}
body {
	background-color: #FFF;
}
#form1 p {
	font-family: Tahoma, Geneva, sans-serif;
}
</style>
</head>

<body background="imagenes/fondo1.jpg">
<form action="Agregar-Pedidos.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>&nbsp;</p>
  <h2 align="center">REGISTRO DE PEDIDOS</h2>
  <h3 align="center">Proporciona los Datos que se Solicitan:</h3>

    <div align="center">
      <table width="422" border="5" cellpadding="5" cellspacing="5">
        <tr>
          <td height="5" bgcolor="#CCFFCC"><strong>Numero de Pedido:</strong></td>
          <td width="307"><input name="numpedido_txt" type="number" id="numpedido_txt" size="52" maxlength="10"  placeholder="Escribe aquí tu Numero de Pedido" title="Tu Pedido" required="required"/></td>
        </tr>
        <tr>
          <td height="5" bgcolor="#CCFFCC"><strong>Fecha:</strong></td>
          <td><input name="fecha_txt" type="date" id="fecha_txt" size="52" maxlength="30"  placeholder="Escribe aqui tu fecha" title="Tú fecha" required="required"/></td>
        </tr>
        <tr>
          <td height="5" bgcolor="#CCFFCC"><strong>Cliente:</strong></td>
          <td width="307"><input name="cliente_txt" type="number" id="cliente_txt" size="52" maxlength="4"  placeholder="Escribe aquí tu Cliente" title="Tu Cliente" required="required"/></td>
        </tr>
        <tr>
          <td height="5" bgcolor="#CCFFCC"><strong>Vendedor:</strong></td>
          <td><input type="number" name="vendedor_txt" id="vendedor_txt"  placeholder="Numero de vendedor" title="vendedor" required/></td>
        </tr>
        <tr>
          <td height="5" bgcolor="#CCFFCC"><strong>Producto:</strong></td>
          <td><input type="text" name="producto_txt" id="producto_txt" maxlength="10" placeholder="producto" title="producto"required/></td>
        </tr>
        <tr>
          <td height="5" bgcolor="#CCFFCC"><strong>Cantidad:</strong></td>
          <td><input type="number" name="cantidad_txt" id="cantidad_txt"  placeholder="cantidad" title="cantidad"required/></td>
        </tr>
        <tr>
          <td height="5" bgcolor="#CCFFCC"><strong>Precio:</strong></td>
          <td><input type="number" name="precio_txt" id="precio_txt"  placeholder="precio" title="precio"required/></td>
        </tr>
        <tr>
          <td height="5" bgcolor="#CCFFCC"><strong>Importe:</strong></td>
          <td><input type="number" name="importe_txt" id="importe_txt"  placeholder="importe" title="importe"required/></td>
        </tr>
        <tr>
          <td><input type="submit" name="button" id="button" value="Guardar Datos" /></td>
          <td><div align="center">
            <input type="reset" name="button2" id="button2" value="Inicializar Formulario" />
          </div></td>
        </tr>
        </table>
    </div>
    <p align="center"><a href="MAIN_IZDO.html" target="mainFrame">REGRESAR</a></p>
    <p>&nbsp;</p>
  <p>
    <label for="numpedido_txt"></label>
  </p>
  <p>
    <label for="fecha_txt"></label>
  </p>
  <p>&nbsp;</p>
</form>
</body>
</html>
