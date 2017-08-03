<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Muro</title>

<link rel="stylesheet" href="Buscar2.css" type="text/css"/> 
<link rel="stylesheet" type="text/css" href="DataTables/media/css/jquery.dataTables.css"/>
<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/media/js/jquery.dataTables.js"></script>



<script type="text/javascript">
	$(document).ready(function() 
	{							
		CargarMuro();	
		function CargarMuro()
		{  
		var codigo=<?php echo $_POST['id'];?>;
		$("#Medio").load('Criminal2.php',{id:codigo});	
		}
	});
</script>


<script type="text/javascript">
$(document).ready(function()
{
   $("p a").each(function(){
      var href = $(this).attr("href");
	 
	  $(this).attr({ href: "#"});
      $(this).click(function(){
	  
	  var codigo=<?php echo $_POST['id']; ?>; 
      $("#Medio").load(href,{id:codigo});		 
		 
      });
	  
	 
	  
   });
});
</script>





</head>
<body>
<?php   
include('Conexion.php');
  $cod=$_POST['id'];  
 
  $sql=$cn->prepare("SELECT * FROM cuenta WHERE CodigoCuenta=:Codigo");
  $sql->execute(array(':Codigo'=>$cod));
  $op=$sql->fetch(); 
?>

<div class="Menudiv">
  <span><img src=<?php echo $op['Foto'];?> width="128" height="116" class="foto1" /></span>
  <p class="letra1"><strong>Mi Perfil</strong></p>
		 
	<p><img src="Imagenes/Printed-Matter-Book-stack-icon.png" width="23" height="21" style=" margin-left:2px;margin-right:5px;"/><a href="Criminal2.php"  class="letra2">Datos Delincuentes</a>	</p> 
	
	<p><img src="Imagenes/Eliminar2.jpg" width="23" height="21" style=" margin-left:2px;margin-right:5px;"/><a href="Policias2.php"  class="letra2">Datos Policias</a></p>	
		  
	<p><img src="Imagenes/escudo3.png" width="23" height="21" style=" margin-left:2px;margin-right:5px;"/><a href="DatosPersonales.php" class="letra2 ">Contrato</a>	</p>	
	  
	<p><img src="Imagenes/Nuevo.jpg" width="23" height="21" style=" margin-left:2px;margin-right:5px;"/><a href="Cuenta.php" class="letra2">Horarios</a>	</p>	
	
	<p><img src="Imagenes/iconos-messenger1.jpg" width="23" height="21" style=" margin-left:2px;margin-right:5px;"/><a href="Actividad.php"  class="letra2">Consultas</a>	</p>
	<p><img src="Imagenes/Nuevo.jpg" width="23" height="21" style=" margin-left:2px;margin-right:5px;"/><a href="Registro2.php"  class="letra2">Nuevo Delincuente</a>	</p>			  
	<p><img src="Imagenes/Nuevo.jpg" width="23" height="21" style=" margin-left:2px; margin-right:5px;"/><a href="Registro3.php"  class="letra2">Nuevo Policia</a>	</p>	
	 
</div>	 
   
<div id="Medio" style="width:1000px; margin:10px; padding:5px; float:left; border:1px #D5FFD5 solid;">					 
</div>

</body>
</html>

