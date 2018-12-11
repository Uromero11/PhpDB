<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro de Oficinas</title>
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
#form1 h2 {
	font-family: Times New Roman, Times, serif;
	color: #003;
}
#form1 h3 {
	color: #003;
}
</style>
</head>

<body background="imagenes/fondo1.jpg">
<form action="Agregar-Oficina.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>&nbsp;</p>
  <h2 align="center">REGISTRO DE OFICINAS</h2>
  <h3 align="center">Proporciona los Datos que se Solicitan:</h3>

    <div align="center">
      <table width="422" border="5" cellpadding="5" cellspacing="5">
        <tr>
          <td height="5" bgcolor="#CCFFCC"><strong>Numero de Oficina:</strong></td>
          <td width="307"><input name="oficina_txt" type="number" id="oficina_txt" size="52" maxlength="2"  placeholder="Escribe aquí tu Numero de Oficina" title="Tu Oficina" required="required"/></td>
        </tr>
        <tr>
          <td height="5" bgcolor="#CCFFCC"><strong>Ciudad:</strong></td>
          <td><input name="ciudad_txt" type="text" id="ciudad_txt" size="52" maxlength="30"  placeholder="Escribe aqui tu ciudad" title="Tú ciudad" required="required"/></td>
        </tr>
        <tr>
          <td height="5" bgcolor="#CCFFCC"><strong>Region:</strong></td>
          <td width="307"><input name="region_txt" type="text" id="region_txt" size="52" maxlength="10"  placeholder="Escribe aquí tu Region" title="Tu Region" required="required"/></td>
        </tr>
        <tr>
          <td height="5" bgcolor="#CCFFCC"><strong>Director:</strong></td>
          <td><input type="number" name="director_txt" id="director_txt"  placeholder="Numero de Director" title="Director" required/></td>
        </tr>
        <tr>
          <td height="5" bgcolor="#CCFFCC"><strong>Objetivo:</strong></td>
          <td><input type="number" name="objetivo_txt" id="objetivo_txt" placeholder="Objetivo de Oficina" title="Objetivo de Oficina"required/></td>
        </tr>
        <tr>
          <td height="5" bgcolor="#CCFFCC"><strong>Ventas:</strong></td>
          <td><input type="number" name="ventas_txt" id="ventas_txt"  placeholder="Ventas de Oficina" title="Ventas de Oficina"required/></td>
        </tr>
        <tr>
          <td><input type="submit" name="button" id="button" value="Guardar Datos" /></td>
          <td><div align="center">
            <input type="reset" name="button2" id="button2" value="Inicializar Formulario" />
          </div></td>
        </tr>
        </table>
    </div>
     <p>&nbsp;</p>
  <p align="center"><a href="MAIN_IZDO.html" target="mainFrame">REGRESAR</a></p>
    <p>&nbsp;</p>
  <p>
    <label for="oficina_txt"></label>
  </p>
  <p>
    <label for="ciudad_txt"></label>
  </p>
  <p>&nbsp;</p>
</form>
</body>
</html>
