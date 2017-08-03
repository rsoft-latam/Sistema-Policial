<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
}
-->
</style>
</head>

<body>

<?php 
include("conexion.php");
$cod=$_GET['recordID'];
$correo=" ";
$contraseña=" ";
$con="SELECT * FROM Cuenta WHERE CodigoCuenta='$cod'";
$sq=mysql_query($con,$cn);
	while($result=mysql_fetch_array($sq))
	{
	$cod=$result['CI'];
	$correo=$result['CorreoElectronico'];
	$contraseña=$result['Contraseña'];
	}
?>
<form id="form1" name="form1" method="post" action="">
          <p>
            <input type="text" name="T1"  value="<?php echo $cod?>"/>
            <span class="Estilo1">CI</span></p>
          <p class="Estilo1">
            <input type="text" name="T2" value="<?php echo $correo?>"/>
            CORREO ELECTRONICO</p>
          <p class="Estilo1">
            <input type="text" name="T3" value="<?php echo $contraseña?>"/>
            CONTRASE&Ntilde;A</p>
          <p>
            <input type="submit" name="B" value="Modificar" />
          </p>
        </form>
        <p>&nbsp;</p>
		
		
<?php

if(isset($_POST['B']))
{
		$text=$_POST['B'];
		if($text=="Modificar")
		{
		$a1 = $_POST['T1'];
		$a2 = $_POST['T2'];
		$a3 = $_POST['T3'];
		$consul="UPDATE cuenta set CI='$a1',CorreoElectronico='$a2',Contraseña='$a3' WHERE CodigoCuenta='$cod'";
		$consulta=mysql_query($consul,$cn);
		
		echo "<script>alert ('Modificado con exito');</script>";
		header('Location: Cuenta.php');
		}
}


?>
		
</body>
</html>

