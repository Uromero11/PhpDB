<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificar Oficina</title>
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
<form id="form1" name="form1" method="post" action="Modifica-Busca-Oficina.php">
  <p>&nbsp;</p>
  <p align="center">MODIFICACION DE OFICINAS</p>
  <p align="center">Elige la Oficina a Modificar:</p>
  <p align="center">
    <label for="oficina_slc"></label>
    <select name="oficina_slc" size="1" id="oficina_slc">
      <option value="">- - - </option>
      <?php include("conexionOficinas.php");
$consulta="SELECT * FROM oficinas ORDER BY oficina";
$ejecutar_consulta=$conexion->query($consulta);
while($registro=$ejecutar_consulta->fetch_assoc())
{
$oficina=$registro["oficina"];
echo "<option value='$oficina'>$oficina </option>";
}?>
    </select>
  </p>
  <p align="center"><a href="MAIN_IZDO.html" target="mainFrame">REGRESAR</a></p>
  <p>&nbsp;</p>
  <p align="center">
    <input type="submit" name="button" id="button" value="MOSTRAR LA OFICINA A MODIFICAR" />
  </p>
</form>
</body>
</html>
