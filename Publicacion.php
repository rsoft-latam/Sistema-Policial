<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Muro</title>

<link rel="stylesheet" href="Publicacion.css" type="text/css"/> 

</head>

<body>

<?php	   
  include('Conexion.php'); 
  $codigo=$_POST['id'];  
	
  $sql=$cn->prepare("SELECT * FROM delito WHERE CodigoDetenido=:Codigo ORDER BY Fecha DESC");
  $sql->execute(array(':Codigo'=>$codigo));
  
  while($op=$sql->fetch())
  { 
 
?>


<div  style=" width:470px; margin-bottom:15px; border:1px #002448 solid; background-color:#FFFFFF; cursor:pointer; margin-left:70px; margin-top:30px; padding:3px; border-radius:10px;" >

 <table width="457" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="59">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td width="213">&nbsp;</td>
    </tr>
    <tr>
      <td height="65"></td>
	  <td width="131"><img src="Imagenes/escudo2.png" width="65" height="59" style="padding:2px; border:1px #006F00 solid;"/>	    </td>
	  <td colspan="3">	
	  <label style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:17px; color:#4A0000;"><?php echo $op['Fecha'];?></label>      	  </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"> <label style="width:200px;  font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#008000; ">Codigo Delito</label></td>
      <td width="23">&nbsp;</td>
      <td width="213"><label style="width:200px;  font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000000; "><?php echo $op['CodigoDelito'];?></label></td>
      <td width="6">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><label style="width:200px;  font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#008000; ">Codigo del Detenido</label></td>
      <td>&nbsp;</td>
      <td><label style="width:200px;  font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000000; "><?php echo $op['CodigoDetenido'];?></label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"> <label style="width:200px;  font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#008000; ">Nombre del Delito</label></td>
      <td>&nbsp;</td>
      <td><label style="width:200px;  font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000000; "><?php echo $op['Nombre'];?></label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="30">&nbsp;</td>
      <td colspan="2"><label style="width:200px;  font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#008000; ">Tipo del Delito</label></td>
      <td>&nbsp;</td>
      <td><label style="width:200px;  font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000000; "><?php echo $op['Tipo'];?></label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table> 
</div>
  

	<?php 
 }
?>
	

	
</body>
</html>
