<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" href="DatosPersonales2.css" type="text/css" />	


<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>



<script type="text/javascript">
	$(document).ready(function() 
	{							
		CargarPersona();
		
		function CargarPersona()
		{
		var Codigo=<?php echo $_GET['id']; ?>;
		$("#Contenido").load('DatosPersona.php',{id:Codigo});
		}	
					
	});
</script>




<script type="text/javascript">
$(document).ready(function()
{
   $("#lista a").each(function(){
      var href = $(this).attr("href");
      $(this).attr({ href: "#"});
      $(this).click(function()
	  {
         var Codigo=<?php echo $_GET['id']; ?>;
		 $("#Contenido").load(href,{id:Codigo});
      });
   });
});
</script>



<style type="text/css">
<!--
.Estilo1 {
	font-family: Arial, Helvetica, sans-serif;
	color: #006600;
	font-size: 24px;
}
.Estilo2 {
	font-size: 18px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body >
<?php
include('Conexion.php');
$cod=$_GET['id'];

$sql=$cn->prepare("SELECT * FROM detenido,persona WHERE detenido.CodigoDetenido=:Codigo AND detenido.NumeroDocumento=persona.NumeroDocumento");
$sql->execute(array(':Codigo'=>$cod));
$op=$sql->fetch(); 

   
?>

<div>

<div style="float:left; border-right:1px #004000 solid;   margin:-10px; width:400px; height:100%; margin-left:60px; position:fixed; ">
<p class="Estilo2">DATOS GENERALES</p>
<a href="Policia.php?id=<?php echo $cod;?>" ></a><img src="Imagenes/icono-pdf.jpg" width="35" height="33"  />
<img src="Imagenes/download-green.jpg" width="35" height="33"  />
<img src="Imagenes/libros-1.png" width="35" height="33"  />


  <img src="<?php echo $op['Foto'];?>" width="351" height="275" style="padding:3px; border:1px #000000 solid; margin:5px;" />
  <ul id="lista" style="list-style:none;">
		 <li> <a href="DatosPersona.php"><img src="Imagenes/perfil-icono-7508-48.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Personales</a> </li> 
		 <li> <a href="DatosDetenido.php"><img src="Imagenes/sin-tc3adtulo.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Detenido</a> </li>  
      <li> <a href="Publicacion.php"><img src="Imagenes/3.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Delitos</a> </li> 
		 <li> <a href="DatosCuenta.php"><img src="Imagenes/perfil-icono-7508-48.png" width="21" height="19" style="margin:0px; padding:0px; margin-right:10px; margin-bottom:-4px;"/>Datos Jueces</a></li> 
		 <li></li>  
	     <li></li> 
    </ul>
</div>

<div  id="Contenido" style="float:left;background-color:#FFFFFF;  margin-top:-17px;width:570px; margin-left:480px; padding:20px;"></div>

</div>

</body>
</html>
