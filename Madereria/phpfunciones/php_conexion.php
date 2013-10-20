<?php
	function conectarse()
	{
		if (!($link=mysql_connect("localhost","root","")))
		//if (!($link=mysql_connect("localhost","informatic","Uh5Nhr1A")))
		{
			echo "Error conectando a la base de datos.";
			exit();
		}
		//if (!mysql_select_db("informatic_siga",$link))
		if (!mysql_select_db("madereria",$link))
		{
			echo "Error seleccionando la base de datos.";
			exit();
		}
		return $link;
		}
?>