<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" type="text/css" href="DataTables/media/css/jquery.dataTables.css"/>
<link rel="stylesheet" type="text/css" href="DatosPersona.css" />
<script type="text/javascript" language="javascript" src="DataTables/media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/media/js/jquery.dataTables.js"></script>



<script>
$(document).ready(function() {
    $('#example').dataTable( {
        "language": {         	
	"processing": "Bitte warten...",
	"lengthMenu": "",
	"zeroRecords": "Nothing found - sorry",
	"info": "Showing page _PAGE_ of _PAGES_",
	"infoEmpty": "No records available",
	"infoFiltered": "(filtered from _MAX_ total records)",
	"infoPostFix": "",
	"search": null,
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
.Estilo4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.Estilo5 {font-size: 12px}
.Estilo11 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color:#949494; }
-->
tr {
border-bottom:1px #000000 solid;

}
.Estilo12 {font-family: Vrinda}
.Estilo18 {font-size: 16}
.Estilo22 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.Estilo26 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14px; }
</style>
</head>

<body>
<?php
include('Conexion.php');
$Codigo=$_POST['id'];

$sql=$cn->prepare("SELECT * FROM detenido WHERE detenido.CodigoDetenido=:Codigo");
$sql->execute(array(':Codigo'=>$Codigo)); 
$op=$sql->fetch();
$NumeroDocumento=$op['NumeroDocumento'];

$sql2=$cn->prepare("SELECT * FROM persona WHERE persona.NumeroDocumento=:NumeroDocumento");
$sql2->execute(array(':NumeroDocumento'=>$NumeroDocumento)); 
$Datos=$sql2->fetch();

?>



<div style="width:500px; margin:0 auto;">
<table width="387" height="586" border="0" cellpadding="0" cellspacing="0" style="margin-top:20px; " id="example" class="display compact">

  <tfoot>
  </tfoot>
  <tr>
    <th width="13" height="35" scope="row"><span class="Estilo12"></span></th>
    <td width="141"><span class="Estilo22">Tipo de Documento</span></td>
    <td width="9"><span class="Estilo5"></span></td>
    <td width="180"><span class="Estilo11"><?php echo $Datos['TipoDocumento']; ?></span></td>
    <td width="12"><span class="Estilo5"></span></td>
    <td width="21">&nbsp;</td>
    <td width="11">&nbsp;</td>
  </tr>
  <tr>
    <th height="32" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Numero de Documento </span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['NumeroDocumento'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="36" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Nombres</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['Nombre']?></span></td>
    <td><span class="Estilo5"></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="32" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Apellido Paterno</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['Paterno'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="37" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Apellido Materno</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['Materno'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="31" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Genero</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['Genero'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="32" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Estado Civil</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['EstadoCivil'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Telefono</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['Telefono'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="34" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Celular</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['Celular'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="31" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Departamento</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['Departamento'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="30" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Provincia</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['Provincia'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="32" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Municipio</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['Municipio'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Zona</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['Zona'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="31" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Calle</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['Calle'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="38" scope="row">&nbsp;</th>
    <td><span class="Estilo22">Numero</span></td>
    <td>&nbsp;</td>
    <td><span class="Estilo11"><?php echo $Datos['Numero'];?></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="38" scope="row"><span class="Estilo12"></span></th>
    <td><span class="Estilo22">Fecha de Nacimiento</span></td>
    <td><span class="Estilo5"></span></td>
    <td><span class="Estilo11"><?php echo $Datos['FechaNacimiento'];?></span></td>
    <td><span class="Estilo5"></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</body>
</html>
