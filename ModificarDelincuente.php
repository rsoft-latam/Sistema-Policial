<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Modificar Datos Delincuente</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" media="all" href="Registro2.css" />

</head>

<body bgcolor="#F4F4F4">
<?php	   
  include('Conexion.php');  
  $cod=$_GET['id']; 
  
  $sql=mysql_query("SELECT * FROM persona,detenido WHERE persona.NumeroDocumento='$cod' AND detenido.NumeroDocumento='$cod'",$cn);
  $op=mysql_fetch_array($sql);    
?>


<form action="" method="post" enctype="multipart/form-data">

<fieldset>
<legend><strong>Datos Personales</strong></legend>
<table width="837" height="279" border="0" cellpadding="2" cellspacing="0">
 <tr>
	 <td width="2" scope="row">&nbsp;</td>
	 <td width="177" height="22" scope="row"><label for="label">Tipo de Documento:</label></td>
	 <td width="211">
		<select size="1" name="TipoD" id="label">
			  <option value="Cedula de Identidad">Cedula de Identidad</option>
			  <option value="Libreta Militar">Libreta Militar</option>
			  <option value="Pasaporte">Pasaporte</option>
			  <option value="Certificado Nacimiento">Certificado Nacimiento</option>
	  </select>            </td>
	 <td width="9">&nbsp;</td>
	 <td width="189"><label for="label2">Departamento:</label></td>
	 <td width="6">&nbsp;</td>
	 <td width="205"><input name="T8"  type="text" id="password8" value="<?php echo $op['Departamento']; ?>" size="30" /></td>
	 <td width="6">&nbsp;</td>
 </tr>
          
 <tr>
     <td scope="row">&nbsp;</td>
     <td height="26" scope="row"><label for="label">Numero de Documento:</label></td>
     <td><input type="text" name="T1"   value="<?php echo $op['NumeroDocumento']; ?>" size="30" maxlength="32" /></td>
     <td>&nbsp;</td>
     <td><label for="label2">Provincia:</label></td>
     <td>&nbsp;</td>
     <td><input type="text" name="T9" id="password9" size="30" maxlength="32" value="<?php echo $op['Provincia']; ?>" /></td>
     <td>&nbsp;</td>
 </tr>
          
 <tr>
     <td height="22" scope="row">&nbsp;</td>
     <td scope="row"><label for="label3">Nombre:</label></td>
     <td><input type="text" name="T2" size="30" maxlength="128" value="<?php echo $op['Nombre']; ?>"/></td>
     <td>&nbsp;</td>
     <td><label for="label2">Municipio:</label> </td>
     <td>&nbsp;</td>
     <td><input type="text" name="T10" id="email4" size="30" maxlength="128" value="<?php echo $op['Municipio']; ?>"/></td>
     <td>&nbsp;</td>
 </tr>
          
 <tr>
     <td scope="row">&nbsp;</td>
     <td height="22" scope="row"><label for="label">Apellido Paterno:</label></td>
     <td><input type="text" name="T3" id="password4" size="30" maxlength="32" value="<?php echo $op['Paterno']; ?>"/></td>
     <td>&nbsp;</td>
     <td><label for="label2">Zona:</label> </td>
     <td>&nbsp;</td>
     <td><input type="text" name="T11" id="email5" size="30" maxlength="128"value="<?php echo $op['Zona']; ?>" /></td>
     <td>&nbsp;</td>
 </tr>
   
 <tr>
     <td scope="row">&nbsp;</td>
     <td height="22" scope="row"><label for="label2">Apellido Materno:</label></td>
     <td><input type="text" name="T4" id="password5" size="30" maxlength="32" value="<?php echo $op['Materno']; ?>" /></td>
     <td>&nbsp;</td>
     <td><label for="label2">Calle:</label></td>
     <td>&nbsp;</td>
     <td><input type="text" name="T12" id="password10" size="30" maxlength="32" value="<?php echo $op['Calle']; ?>" /></td>
     <td>&nbsp;</td>
 </tr>
       
 <tr>
     <td scope="row">&nbsp;</td>
     <td height="22" scope="row"><label for="label2">Genero:</label></td>
     <td><select size="1" name="Sexo" id="select">
       <option value="Masculino">Masculino</option>
       <option value="Femenino">Femenino</option>
     </select></td>
     <td>&nbsp;</td>
     <td><label for="label2">Numero:</label></td>
     <td>&nbsp;</td>
     <td><input type="text" name="T13" id="T13" size="30" maxlength="32" value="<?php echo $op['Numero']; ?>"/></td>
     <td>&nbsp;</td>	 
 </tr>
         
 <tr>
     <td scope="row">&nbsp;</td>
     <td height="22" scope="row"><label for="label2">Estado Civil:</label></td>
     <td><input type="text" name="T5" id="password11" size="30" maxlength="32" value="<?php echo $op['EstadoCivil']; ?>"/></td>
     <td>&nbsp;</td>
     <td><label for="label2">Fecha de Nacimiento:</label></td>
     <td>&nbsp;</td>
     <td><select size="1" name="Mes" id="dobMonth">
       <option value="Enero">Enero</option>
       <option value="Febrero">Febrero</option>
       <option value="Marzo">Marzo</option>
       <option value="Abril">Abril</option>
       <option value="Mayo">Mayo</option>
       <option value="Junio">Junio</option>
       <option value="Julio">Julio</option>
       <option value="Agosto">Agosto</option>
       <option value="Septiembre">Septiembre</option>
       <option value="Octubre">Octubre</option>
       <option value="Noviembre">Noviembre</option>
       <option value="Diciembre">Diciembre</option>
     </select>
       <select size="1" name="Dia" id="dobDay">
         <option value="01">01</option>
         <option value="02">02</option>
         <option value="03">03</option>
         <option value="04">04</option>
         <option value="05">05</option>
         <option value="06">06</option>
         <option value="07">07</option>
         <option value="08">08</option>
         <option value="09">09</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>
         <option value="24">24</option>
         <option value="25">25</option>
         <option value="26">26</option>
         <option value="27">27</option>
         <option value="28">28</option>
         <option value="29">29</option>
         <option value="30">30</option>
         <option value="31">31</option>
       </select>
       <select size="1" name="Gestion" id="dobYear">
         <option value="2000">2000</option>
         <option value="1999">1999</option>
         <option value="1998">1998</option>
         <option value="1997">1997</option>
         <option value="1996">1996</option>
         <option value="1995">1995</option>
         <option value="1994">1994</option>
         <option value="1993">1993</option>
         <option value="1992">1992</option>
         <option value="1991">1991</option>
         <option value="1990">1990</option>
         <option value="1989">1989</option>
         <option value="1988">1988</option>
         <option value="1987">1987</option>
         <option value="1986">1986</option>
         <option value="1985">1985</option>
         <option value="1984">1984</option>
         <option value="1983">1983</option>
         <option value="1982">1982</option>
         <option value="1981">1981</option>
         <option value="1980">1980</option>
         <option value="1979">1979</option>
         <option value="1978">1978</option>
         <option value="1977">1977</option>
         <option value="1976">1976</option>
         <option value="1975">1975</option>
         <option value="1974">1974</option>
         <option value="1973">1973</option>
         <option value="1972">1972</option>
         <option value="1971">1971</option>
         <option value="1970">1970</option>
         <option value="1969">1969</option>
         <option value="1968">1968</option>
         <option value="1967">1967</option>
         <option value="1966">1966</option>
         <option value="1965">1965</option>
         <option value="1964">1964</option>
         <option value="1963">1963</option>
         <option value="1962">1962</option>
         <option value="1961">1961</option>
         <option value="1960">1960</option>
         <option value="1959">1959</option>
         <option value="1958">1958</option>
         <option value="1957">1957</option>
         <option value="1956">1956</option>
         <option value="1955">1955</option>
         <option value="1954">1954</option>
         <option value="1953">1953</option>
         <option value="1952">1952</option>
         <option value="1951">1951</option>
         <option value="1950">1950</option>
       </select></td>
     <td>&nbsp;</td>
 </tr>
         
 <tr>
     <td scope="row">&nbsp;</td>
     <td height="26" scope="row"><label for="label2">Telefono:</label></td>
     <td><input type="text" name="T6" id="password6" size="30" maxlength="32" value="<?php echo $op['Telefono']; ?>" /></td>
     <td>&nbsp;</td>
     <td><label for="label2">Nacionalidad:</label></td>
     <td>&nbsp;</td>
     <td><input type="text" name="T14" id="password12" size="30" maxlength="32" value="<?php echo $op['Nacionalidad']; ?>"/></td>
     <td>&nbsp;</td>
 </tr>
         
 <tr>
     <td scope="row">&nbsp;</td>
     <td width="177"><label for="label">Celular:</label></td>
     <td width="211"><input type="text" name="T7" id="password7" size="30" maxlength="32" value="<?php echo $op['Celular']; ?>" /></td>
     <td scope="row">&nbsp;</td>
     <td scope="row">&nbsp;</td>
     <td scope="row">&nbsp;</td>
     <td scope="row">&nbsp;</td>
     <td scope="row">&nbsp;</td>
 </tr>
 
 <tr>
     <td scope="row">&nbsp;</td>
     <td></td>
     <td>&nbsp;</td>
     <td scope="row">&nbsp;</td>
     <td scope="row">&nbsp;</td>
     <td scope="row">&nbsp;</td>
     <td scope="row">&nbsp;</td>
     <td scope="row">&nbsp;</td>
 </tr>
  </table>
</fieldset>
	
<fieldset>
   <legend><strong>Datos Detenido</strong></legend>
   <table width="872" height="105" border="0" cellpadding="2" cellspacing="0">
   <tr>
       <td width="33" scope="row">&nbsp;</td>
       <td width="119" height="26" scope="row"><label for="label2">Estatura:</label></td>
       <td width="236"><input type="text" name="C1"  size="30" maxlength="32" value="<?php echo $op['Estatura']; ?>"/></td>
       <td></td>
       <td><label for="label2">Color de Cabello:</label></td>
       <td></td>
       <td><input type="text" name="C4"  size="30" maxlength="32" value="<?php echo $op['ColorCabello']; ?>"/></td>
       <td></td>
   </tr>
   
   <tr>
       <td scope="row">&nbsp;</td>
       <td height="26" scope="row"><label for="label4">Peso:</label></td>
       <td><input type="text" name="C2"  size="30" maxlength="32" value="<?php echo $op['Peso']; ?>"/></td>
	   
	   <td></td>
	   <td><label for="label2">Rasgos:</label></td>
	   <td></td>
	   <td><input type="text" name="C5"  size="30" maxlength="32" value="<?php echo $op['Rasgos']; ?>" /></td>
	   <td></td>	   
  </tr>
  
  <tr>
      <td height="28" scope="row">&nbsp;</td>
      <td scope="row"><label for="label2">Color de Piel:</label></td>
      <td><input type="text" name="C3"  size="30" maxlength="32" value="<?php echo $op['ColorPiel']; ?>"/></td>
      <td width="5" scope="row">&nbsp;</td>
      <td width="183" scope="row">&nbsp;</td>
      <td width="12" scope="row">&nbsp;</td>
      <td width="240" scope="row">&nbsp;</td>
      <td width="12" scope="row">&nbsp;</td>
  </tr>
          
  <tr>
      <td></td>
      <td><label for="label4">Foto:</label></td>
      <td colspan="5"><input type="file" name="C6" id="files"/></td>
      <td></td>
 </tr>
		      
 <tr>
     <td></td>
     <td>   </td>
     <td>&nbsp;</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
 </tr>
 </table>
 </fieldset>
	
 <fieldset>
 <table width="495" height="34" border="0" cellpadding="0" cellspacing="0">
   
 <tr>
  <td width="25" height="32" scope="row">&nbsp;</td>
  <td width="96"><input type="submit" name="B"  value="Modificar" class="submit"/></td>
  <td width="28">&nbsp;</td>
  <td width="99"><input type="reset" name=""id="submit12"value="Limpiar"class="submit"/></td>
  <td width="247">&nbsp;</td>
 </tr>
 </table>
 </fieldset>
</form>

<?php

if(isset($_POST['B']))
{
		$text=$_POST['B'];
		if($text=="Modificar")
		{
	$TipoDocumento=$_POST['TipoD'];	
	$NumeroDocumento=$_POST['T1'];
	$Nombre=$_POST['T2'];
	$Paterno=$_POST['T3'];
	$Materno=$_POST['T4'];
	$Genero=$_POST['Sexo'];
	$EstadoCivil=$_POST['T5'];
	$Telefono=$_POST['T6'];
	$Celular=$_POST['T7'];
	$Departamento=$_POST['T8'];
	$Provincia=$_POST['T9'];
	$Municipio=$_POST['T10'];
	$Zona=$_POST['T11'];
	$Calle=$_POST['T12'];
	$Numero=$_POST['T13'];
	
	$Dia=$_POST['Dia'];
	$Mes=$_POST['Mes'];
	$Gestion=$_POST['Gestion'];
	
	$MesOrigen="";
	if($Mes == 'Enero')
	{$MesOrigen='01';}
	if($Mes == 'Febrero')
	{$MesOrigen='02';}
	if($Mes == 'Marzo')
	{$MesOrigen='03';}
	if($Mes == 'Abril')
	{$MesOrigen='04';}
	if($Mes == 'Mayo')
	{$MesOrigen='05';}
	if($Mes == 'Junio')
	{$MesOrigen='06';}
	if($Mes == 'Julio')
	{$MesOrigen='07';}
	if($Mes == 'Agosto')
	{$MesOrigen='08';}
	if($Mes == 'Septiembre')
	{$MesOrigen='09';}
	if($Mes == 'Octubre')
	{$MesOrigen='10';}
	if($Mes == 'Noviembre')
	{$MesOrigen='11';}
	if($Mes == 'Diciembre')
	{$MesOrigen='12';}
	
	$FechaNacimiento=$Gestion."-".$MesOrigen."-".$Dia;
	$Nacionalidad=$_POST['T14'];
			
	$Estatura=$_POST['C1'];
	$Peso=$_POST['C2'];
	$ColorPiel=$_POST['C3'];
	$ColorCabello=$_POST['C4'];	
	$Rasgos=$_POST['C5'];	
	
	$NombreFoto=$_FILES['C6']['name'];
	$Ruta=$_FILES['C6']['tmp_name'];	
    $Destino="Fotos/".$NombreFoto;
	copy($Ruta,$Destino);	
	
	$Destino2=$op['Foto'];
	
	if($NombreFoto == "")
	{$Destino=$Destino2;}
	else
	{$Destino=$Destino;}
	
		$consul="UPDATE persona set TipoDocumento='$TipoDocumento',NumeroDocumento='$NumeroDocumento',Nombre='$Nombre',Paterno='$Paterno',
		Materno='$Materno',Genero='$Genero',EstadoCivil='$EstadoCivil',Telefono='$Telefono',Celular='$Celular',Departamento='$Departamento',
		Provincia='$Provincia',Municipio='$Municipio',Zona='$Zona',Calle='$Calle',Numero='$Numero',FechaNacimiento='$FechaNacimiento',
		Nacionalidad='$Nacionalidad' WHERE NumeroDocumento='$cod'";
		$consulta=mysql_query($consul,$cn);
		
		$consul1="UPDATE detenido set NumeroDocumento='$NumeroDocumento',Estatura='$Estatura',Peso='$Peso',ColorPiel='$ColorPiel',ColorCabello='$ColorCabello',Rasgos='$Rasgos',Foto='$Destino' WHERE NumeroDocumento='$cod'";
		$consulta1=mysql_query($consul1,$cn);
				
		echo "<script>alert ('Modificado con exito');</script>";
		}
	}

?>
	


</body>
</html>
