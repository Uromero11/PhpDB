<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body background="imagenes/fondo1.jpg">

<?php
$email=$_POST["email_slc"];
include("conexion.php");
$consulta="select * from oficinas where oficina='$oficina'";
$ejecutar_consulta=$conexion->query($consulta);

if ($registro=$ejecutar_consulta->fetch_assoc()){
?>
<form name="form1" method="post" action="Eliminacion.php">
  <p>&nbsp;</p>
  <p align="center">OFICINA A ELIMINAR </p>
  <table width="48%" border="1" align="center">
    <tr> 
      <td width="36%">OFICINA</td>
      <td width="64%"><?php echo $registro["oficina"] ?>&nbsp;</td>
    </tr>
    <tr> 
      <td>CIUDAD</td>
      <td><?php echo $registro["ciudad"] ?>&nbsp;</td>
    </tr>
    <tr> 
     <td>REGION</td>
      <td><?php echo $registro["region"] ?>&nbsp;</td>
    </tr>
    <tr> 
      <td>DIRECTOR</td>
      <td><?php echo $registro["director"] ?>&nbsp;</td>
    </tr>
    <tr> 
      <td>OBJETIVO</td>
      <td><?php echo $registro["objetivo"] ?>&nbsp;</td>
    </tr>
    <tr> 
      <td>VENTAS</td>
      <td><?php echo $registro["ventas"] ?>&nbsp;</td>
    <tr>
      <td><input name="oficina-oculto" type="hidden" id="oficina-oculto" value="<?php echo $registro["oficina"] ?>"></td>
      <td><div align="center">
          <input type="submit" name="Submit" value="ELIMINAR OFICINA">
        </div></td>
    </tr>
  </table>
  <p align="center"><a href="MAIN_IZDO.html" target="mainFrame">REGRESAR</a></p>
  <p>&nbsp;</p>
  <p align="center"><a href="Elimina-Oficina.php">OTRA OFICINA, CLICK AQUI</a></p>
</form>
<?php
}

?>
<p>&nbsp;</p></body>
</html>
