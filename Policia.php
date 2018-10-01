<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Tu Cuenta</title>

<link rel="stylesheet" href="Policia.css" type="text/css" />	

<link rel="stylesheet" type="text/css" href="DataTables/media/css/jquery.dataTables.css"/>
<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/media/js/jquery.dataTables.js"></script>


<script type="text/javascript">
	$(document).ready(function() 
	{							

		CargarCuerpo();				
	
		function CargarCuerpo()
		{  
		var codigo=<?php echo $_GET['id']; ?>;
		$("#Cuerpo").load('Buscar.php',{id:codigo});		
		}					
	});
</script>	

<script type="text/javascript">
$(document).ready(function()
{
   $("#nav a").each(function(){
      var href = $(this).attr("href");		   
	  $(this).attr({ href: "#"});
	  
      $(this).click(function(){
	     var codigo=<?php echo $_GET['id'];?>;
         $("#Cuerpo").load(href,{id:codigo});		 
      });
   });
});		
</script>
	
			
</head>
<body bgcolor="#F3F3F3">	
<?php	   
  include('Conexion.php');  
  $cod=$_GET['id'];  
  
  $sql=$cn->prepare("SELECT * FROM cuenta WHERE CodigoCuenta=:Codigo");
  $sql->execute(array(':Codigo'=>$cod));
  $op=$sql->fetch(); 
 
  $sq2=$cn->prepare("SELECT * FROM cuenta WHERE CodigoCuenta=:Codigo");
  $sq2->execute(array(':Codigo'=>$cod));
  $op2=$sq2->fetch();  
  $CI=$op2['NumeroDocumento']; 
  
  $sq3=$cn->prepare("SELECT * FROM persona WHERE NumeroDocumento=:CI");
  $sq3->execute(array(':CI'=>$CI));
  $op3=$sq3->fetch();     
 
  $sql=$cn->prepare("SELECT * FROM cuenta WHERE CodigoCuenta=:Codigo");
  $sql->execute(array(':Codigo'=>$cod));
  $op=$sql->fetch(); 
?>
  
  
<div class="cabeza"> 

<ul id="menu">
 
   <table width="100%" border="0" cellspacing="0" cellpadding="0">   
     <tr>	 
       <td width="174" ></td>	   
       <td width="24">&nbsp;</td>
	   <td width="269">&nbsp;</td>
	   
  <td width="137"></td>
  
  <td width="28">&nbsp;</td>
  	   
  <td width="28">&nbsp;</td>
  	   
  <td width="28">&nbsp;</td>
	   	   
  <td width="104">&nbsp;</td>	   
  <td width="16">&nbsp;</td>      
  <td width="42"><img src="Imagenes/escudo2.png" width="42" height="32"/> </td>
       
  <td width="100"><li><strong>Cuenta</strong>
    <ul id="lista1">
      <li> <a href="" >Noticias</a></li>
      <li> <a href="index.php">Cerrar Sesion</a></li>
    </ul>
  </li>  </td>
	   
  <td width="73">
	   <li><strong>Inicio</strong>	     
         <ul id="nav">
           <li> <a href="Delitos.php">Mis Datos</a></li>
           <li> <a href="">Alertas</a></li>
           <li> <a href="">Correos</a></li>
         </ul>
	   </li>  </td>	 
  </tr>
  </table>
</ul>  
 
</div>

<div id="Cuerpo"></div>

</body>
</html>