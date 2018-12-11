<html>
<head>
<title>Modificar Oficina</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body background="imagenes/fondo1.jpg">

<?php
$oficina=$_POST["oficina_slc"];
include("conexionOficinas.php");
$consulta="select * from oficinas where oficina='$oficina'";
$ejecutar_consulta=$conexion->query($consulta);

if ($registro=$ejecutar_consulta->fetch_assoc()){
?>
<form name="form1" method="post" action="Modificacion.php">
  <p>&nbsp;</p>
  <h1 align="center">OFICINA A MODIFICAR </h1>
  <p align="center">Modifique los Datos Necesarios</p>
  <table width="57%" border="1" align="center">
    <tr>
       <td>OFICINA</td>
      <td align="center"><label for="textfield"></label>
      <input type="text" name="oficina_nvo" id="oficina_nvo" value="<?php echo $registro["oficina"] ?>">&nbsp;</td>&nbsp;</td>
    </tr>
    <tr>
      <td>CIUDAD</td>
      <td align="center"><label for="textfield"></label>
      <input type="text" name="ciudad_nvo" id="ciudad_nvo" value="<?php echo $registro["ciudad"] ?>">&nbsp;</td>
    </tr>
    <tr>
      <td>REGION</td>
      <td align="center"><label for="textfield2"></label>
      <input type="text" name="region_nvo" id="region_nvo" value="<?php echo $registro["region"]?>">&nbsp;</td>
    </tr>
    <tr>
      <td>DIRECTO</td>
      <td align="center"><label for="textfield3"></label>
      <input type="number" name="director_nvo" id="director_nvo" value="<?php echo $registro["director"]?>">&nbsp;</td>
    </tr>
    <tr>
      <td>OBJETIVO</td>
      <td align="center"><label for="textfield4"></label>
      <input type="number" name="objetivo_nvo" id="objetivo_nvo" value="<?php echo $registro["objetivo"]?>">&nbsp;</td>
    </tr>
    <tr>
      <td>VENTAS</td>
      <td align="center"><label for="textfield5"></label>
      <input type="number" name="ventas_nvo" id="ventas_nvo" value="<?php echo $registro["ventas"]?>">&nbsp;</td>
    </tr>
    <tr>
      <td><input name="oficina-oculto" type="hidden" id="oficina-oculto" value="<?php echo $registro["oficina"] ?>"></td>
      <td><div align="center">
          <input type="submit" name="Submit" value="MODIFICAR OFICINA">
        </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p align="center"><a href="Modifica-Contacto.php">OTRA OFICINA, CLICK AQUI</a></p>
</form>
<?php
}

?>
<p>&nbsp;</p></body>
</html>
