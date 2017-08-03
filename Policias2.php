<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>


<link rel="stylesheet" type="text/css" href="DataTables/media/css/jquery.dataTables.css"/>
<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/media/js/jquery.dataTables.js"></script>

<script>
$(document).ready(function() {
    $('#example').dataTable( {
        "language": {         	
	"processing": "Bitte warten...",
	"lengthMenu": "Mostrar _MENU_ registros",
	"zeroRecords": "Nothing found - sorry",
	"info": "Showing page _PAGE_ of _PAGES_",
	"infoEmpty": "No records available",
	"infoFiltered": "(filtered from _MAX_ total records)",
	"infoPostFix": "",
	"search": "Buscar",
	"url": "",
	"paginate": {
		"first":    "Erster",
		"previous": "Anterior",
		"next":     "Siguiente",
		"last":     "Letzter"
				}			
        }
    } );
} );
</script>




<style type="text/css">
<!--
.Estilo1 {font-family:Arial, Helvetica, sans-serif}
.Estilo4 {font-size: 12px}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo5 {color: #000000}
.Estilo6 {color: #0000FF}
-->
.centro{

margin:5px auto;
}
</style>

</head>

<body>


<?php
include("Conexion.php");
/* isset($_POST['B']); */
$codigo=$_POST['id'];  
	
?>





  <table width="938" height="164" border="0" cellpadding="3" cellspacing="4" id="example" class="display" align="center">
  <thead>
    <tr >
      <td width="91" height="34"><span class="Estilo15">Foto</span></td>
	  <td width="80" height="34"><span class="Estilo15">Numero Documento </span></td>
      <td width="95"><span class="Estilo15">Nombre</span></td>
	  <td width="94"><span class="Estilo15">Apellido Paterno</span></td>
      <td width="96"><span class="Estilo15">Apellido Materno</span></td>
      <td width="84"><span class="Estilo15">Grado</span></td>
      <td width="72"><span class="Estilo15">Genero</span></td>
      <td width="77"><span class="Estilo15">Tipo Cuenta</span></td>
      <td width="155"><span class="Estilo15">Acciones</span></td>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td width="91" height="25"><span class="Estilo15">Foto</span></td>
	  <td width="80" height="25"><span class="Estilo15">Numero Documento</span></td>
      <td width="95"><span class="Estilo15">Nombre</span></td>
	  <td width="94"><span class="Estilo15">Apellido Paterno</span></td>
      <td width="96"><span class="Estilo15">Apellido Materno</span></td>
      <td width="84"><span class="Estilo15">Nacionalidad</span></td>
      <td width="72"><span class="Estilo15">Genero</span></td>
      <td width="77"><span class="Estilo15">Tipo Cuenta</span></td>
      <td width="155"><span class="Estilo15">Acciones</span></td>
    </tr>
  </tfoot>
 
     
  <?php 
  $sql=$cn->prepare("SELECT * FROM persona,policia,cuenta WHERE persona.NumeroDocumento=policia.NumeroDocumento AND persona.NumeroDocumento=cuenta.NumeroDocumento");
  $sql->execute();
  while($op=$sql->fetch())	 	
   { ?>
    <tr bgcolor="#D7D7D7">
      <td height="75" class="Estilo26"><img src=<?php echo $op['Foto'];?> width="73" height="61" style="padding:2px; border:1px #004000 solid; margin:1px;"/></td>
	   <td class="Estilo26"><span class="Estilo33"><?php echo $op['NumeroDocumento'];?></span></td>
      <td class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['Nombre'];?></span></td>	  
      <td class="Estilo26"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['Paterno'];?></span></td>
      <td class="Estilo34"><span class="Estilo33"><?php echo $op['Materno'];?></td>
      <td class="Estilo34"><span class="Estilo33"><?php echo $op['Grado'];?></td>
      <td class="Estilo34"><span class="Estilo33"><?php echo $op['Genero'];?></td>
      <td class="Estilo34"><span class="Estilo33 Estilo1 Estilo4"><?php echo $op['Tipo'];?></td>
      <td class="sorting_asc">
	  <a href="DatosPersonales2.php?id=<?php echo $op['CodigoDetenido'];?>"><img src="Imagenes/Ver.png" width="28" height="27" style=" margin-left:2px;"/></a>
	  
	  <a href="DatosPersonales2.php?id=<?php echo $op['CodigoDetenido'];?>"><img src="Imagenes/Lapiz2.png" width="18" height="22" style=" margin-left:2px;"/></a>	
	  
	  <a href="DatosPersonales2.php?id=<?php echo $op['CodigoDetenido'];?>"><img src="Imagenes/Basura.png" width="23" height="21" style=" margin-left:2px;"/></a>   </td>
    </tr>  		
    <?php  }  ?>
</table>



</body>
</html>
