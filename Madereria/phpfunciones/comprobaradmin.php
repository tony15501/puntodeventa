<?php

 $nombre=$_POST['Username'];
 $contrase�a=$_POST['Password'];
 
 if ($nombre and $contrase�a)
 {
 		include "php_conexion.php";
		
		$consulta=mysql_query("SELECT * FROM usuario WHERE Username = '".$nombre."' AND Password ='".$contrase�a."' ");
		
		
		
		$filas = mysql_fetch_array($consulta);
		
		$nombrebd = $filas['Username'];
		$contrase�abd = $filas['Password'];
		$idusuario=$filas['Id_usuario'];
		
		
		
		
		if ($nombre == $nombrebd and $contrase�a == $contrase�abd)
		
		{
		
				session_start();
				$_SESSION['Username'] = $nombrebd;
				$_SESSION['Id_usuario']= $idusuario;
				
				
		
		echo  "
		<html>
		
		 	<head>
		 			<meta http-equiv='REFRESH' content = '0 ; url=../Administrador/Index.php'>
		 		
		 
			 </head>
		
		</html>
		
		
		";
		
		}
		else
		{
			echo  "
		<html>
		
		 	<head>
		 			<meta http-equiv='REFRESH' content = '0 ; url=../index.html'>
					
		 		<script>  
		 
		 			alert ('Usuario No Existe')
		 
				 </script>
		 
			 </head>
		
		</html>
		
		
		";
		}
 }

else
{
	echo  "
		<html>
		
		 	<head>
		 			<meta http-equiv='REFRESH' content='0 ; url=../index.html'>
		 		<script>  
		 
		 			alert ('LLena el formulario')
		 
				 </script>
		 
			 </head>
		
		</html>
		
		
		";
}

?>