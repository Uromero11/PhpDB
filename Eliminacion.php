<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminacion</title>
</head>

<body>
<?php
$email=$_POST["oficina-oculto"];
include("conexionOficinas.php");
$consulta="delete from oficinas where oficina='$oficina'";
$ejecutar_consulta=$conexion->query($consulta);
if ($ejecutar_consulta)
echo "<script> alert('Se ha Eliminado la oficina con oficina: $oficina');</script>";
else
echo"<script> alert('No se pudo Eliminar la oficina con oficina: <b> $oficina </b> :(');</script>";

$conexion->close();
?>
</body>
</html>