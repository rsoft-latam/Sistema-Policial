<?php
include("conexion.php");

	$a1=$_POST['T1'];
	$a2=$_POST['T2'];
		
	
	$sql=$cn->prepare("SELECT * FROM cuenta WHERE CorreoElectronico=:a1 AND Contrasena=:a2");		
	$sql->execute(array(':a1'=>$a1,':a2'=>$a2));
	$resultado=$sql->fetch();
	
	$tam=count($resultado);	
	$cod=$resultado['CodigoCuenta'];    
	$Tipo=$resultado['Tipo'];
	
	
	
	if($tam>1)		
	{
			if($Tipo == "Administrador")
			{	
	   				header("Location: Administrador.php?id=$cod");		
			}	
			if($Tipo == "Usuario")
			{					
	    			header("Location: Policia.php?id=$cod");							
			}	

	}
	else
	{
	header('Location: index.php');
	}	

?>