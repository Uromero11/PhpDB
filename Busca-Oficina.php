<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminacion de Contactos</title>

</head>

<body background="imagenes/fondo1.jpg">

<form id="form1" name="form1" method="post" action="Elimina-Mostrar-Contacto.php">
<p>&nbsp;</p>
<p align="center">Busqueda de Oficinas</p>
<p align="center">&nbsp;</p>
<p align="center">
<label for="select"></label>
<select name="oficina_slc" size="1" id="select">
<option value="">- - -</option>

<?php
include("conexionOficinas.php")
$consulta="select * from oficinas order by oficina";
$ejecutar_consulta=$conexion->query($consulta);
while ($registro=$ejecutar_consulta->fetch_assoc())//agarra todos los datos que trae la consulta
{
$oficina=$registro["oficina"];
echo "<option value='$oficina'>$oficina</option>"; //despliega la informacion indicada
}
?>
</select>

<p align="center">
<input type="submit" name="button" id="button" value="Mostrar Oficina" />
</p>
</form>

</body>

</html>
