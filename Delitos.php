<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Muyuhjhjk</title>

<link rel="stylesheet" href="Delitos.css" type="text/css"/> 
<script src="js/jquery-1.11.0.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() 
	{							
		setInterval(CargarMuro,1000);
		function CargarMuro()
		{  
		var codigo=<?php echo $_GET['id'];?>;
		$("#Muro").load('Publicacion.php',{id:codigo});	
		}		
	});
</script>			

</head>

<body>
<?php 
include('Conexion.php');
$cod=$_GET['id'];
$sql=$cn->prepare("SELECT * FROM detenido,persona WHERE detenido.CodigoDetenido=:Codigo AND detenido.NumeroDocumento=persona.NumeroDocumento");
$sql->execute(array(':Codigo'=>$cod));
$op=$sql->fetch(); 

   
?>
  





<div   class="datos">
<table width="100%" height="258" border="1">
  <tr>
    <td width="157" rowspan="7"><img src="<?php echo $op['Foto'];?>" width="151" height="133" /></td>
    <td width="142" height="53">Tipo Documento:</td>
    <td width="10">&nbsp;</td>
    <td width="140">&nbsp;</td>
    <td width="9">&nbsp;</td>
    <td width="151">Telefono:</td>
    <td width="8">&nbsp;</td>
    <td width="133">&nbsp;</td>
    <td width="85">&nbsp;</td>
    <td width="116">&nbsp;</td>
  </tr>
  <tr>
    <td>Numero Documento:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Celular:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nombre</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Departamento:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Apellido Paterno</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Provincia:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Apellido Materno </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Municipio:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Genero:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Zona:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Estado Civil: </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Calle:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>



</div>
<div id="Muro" style=" padding:2px; width:600px; margin-top:170px;  float:left;"></div>	  
	
</body>
</html>
