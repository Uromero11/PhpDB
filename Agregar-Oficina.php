<html>
<body>
<?php
$oficina=$_POST["oficina_txt"];
$ciudad=$_POST["ciudad_txt"];
$region=$_POST["region_txt"];
$director=$_POST["director_txt"];
$objetivo=$_POST["objetivo_txt"];
$ventas=$_POST["ventas_txt"];	

include("conexionOficinas.php");
$consulta="select * from oficinas where oficina='$oficina'";
$ejecutar_consulta=$conexion->query($consulta);
$num_rows=$ejecutar_consulta->num_rows;
if($num_rows==0){
$consulta="INSERT INTO oficinas VALUES('$oficina','$ciudad','$region','$director','$objetivo','$ventas')";
$ejecutar_consulta=$conexion->query($consulta);

if($ejecutar_consulta){
   echo "Hemos enviado tus datos, gracias por visitarnos </br>";
   echo "<a href='consulta-contacto.php'>Ver mi registro: </a>";
}else{
	echo "Error 1 en mi consulta: $consulta ", "------>","Si me arrastra los datos que necisito, pero no los guarda </br>";
	echo "Error 2 en Num_Rows: $num_rows ","------->","Si entra, pero no hace nada </br>";
	
}

}else
echo "<script> alert('el contacto con la oficina <b> $oficina </b> ya existe');</script>";
$conexion->close();
?>
</body>
</html>