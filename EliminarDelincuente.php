<?php 
		include("Conexion.php");
		$cod=$_GET['id'];
		
		$sql=mysql_query("SELECT * FROM detenido WHERE CodigoDetenido='$cod'",$cn);
  		$op=mysql_fetch_array($sql); 
		$NumeroDocumento=$op['NumeroDocumento'];
 
		$consul="DELETE FROM persona WHERE NumeroDocumento='$NumeroDocumento'";
		$consulta=mysql_query($consul,$cn);	
			
		
		$consul1="DELETE FROM detenido WHERE CodigoDetenido='$cod'";
		$consulta1=mysql_query($consul1,$cn);	
			
		
		$consul2="DELETE FROM delito WHERE CodigoDetenido='$cod'";
		$consulta2=mysql_query($consul2,$cn);	
		
		echo "<script>alert ('Eliminado con exito');</script>";
		
	

?>


