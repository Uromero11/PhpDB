<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificacion</title>
</head>

<body>
<?php
$oficina=$_POST["oficina-oculto"];
$ciudad=$_POST["ciudad_nvo"];
$region=$_POST["region_nvo"];
$director=$_POST["director_nvo"];
$objetivo=$_POST["objetivo_nvo"];
$ventas=$_POST["ventas_nvo"];

include("conexionOficinas.php");

$consulta="UPDATE oficinas SET oficina='$oficina',ciudad='$ciudad',region='$region',director='$director',objetivo='$objetivo',ventas='$ventas' where oficina='$oficina'";
$ejecutar_consulta=$conexion->query($consulta);
if ($ejecutar_consulta)
echo "<script> alert('Se ha Modificado el contacto con oficina: $oficina');</script>";
else
echo"<script> alert('No se pudo Modificar el contacto con el oficina: <b> $oficina </b> :(');</script>";

$conexion->close();
?>
</body>
</html>
