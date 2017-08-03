<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Muro</title>

<link rel="stylesheet" href="Buscar.css" type="text/css"/> 
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
		$("#Medio").load('Criminal.php',{id:codigo});	
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
 
  $sql=mysql_query("SELECT * FROM cuenta WHERE CodigoCuenta='$cod'",$cn);
  $op=mysql_fetch_array($sql); 
?>

<div class="Menudiv">
  <span><img src=<?php echo $op['Foto'];?> width="143" height="122" class="foto1" /></span>
  <p class="letra1"><strong>Mi Perfil</strong></p>
		 
	<p><a href="Muro3.php"  class="letra2">Mapas</a>	</p> 
	
	<p><a href="Registro.php" class="letra2 ">Actividades</a>	</p>	
		  
	<p><a href="DatosPersonales.php" class="letra2 ">Contrato</a>	</p>	
	  
	<p><a href="Cuenta.php" class="letra2">Horarios</a>	</p>	
	
	<p><a href="Actividad.php"  class="letra2">Consultas</a>	</p>		  
	
	 
</div>	 
   
<div id="Medio" style="width:1000px; margin:10px; padding:5px; float:left; border:1px #D5FFD5 solid;">					 
</div>

</body>
</html>

