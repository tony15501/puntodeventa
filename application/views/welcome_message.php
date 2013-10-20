<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../Madereria/jquery/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../Madereriajquery/bootstrap-responsive.css">
<title>Inicio de sesión</title>
</head>
<style type="text/css">
  body {
	padding-top: 80px;
	padding-bottom: 60px;
	background-color: #fff;
  }

  .form-signin {
	max-width: 400px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	
  }
  .form-signin .form-signin-heading,
  .form-signin .checkbox {
	margin-bottom: 10px;
  }
  .form-signin input[type="text"],
  .form-signin input[type="password"] {
	font-size: 16px;
	height: auto;
	margin-bottom: 10px;
	padding: 7px 9px;
  }

</style>
<body>
<div class="container">


<form action="../Madereria/phpfunciones/validarusuario.php" method="post" name="formularioAcceso" class="form-signin">
	<legend>Inicio de sesión</legend>
	
	
	﻿    <input name="Username" type="text" class="input-block-level" id="Username" placeholder="Usuario" required="required" title="Usuario es obligatorio">
    <input name="Password" type="password" class="input-block-level" id="Password" placeholder="Contraseña" required="required" title="Contraseña es obligatorio">
    <input class="btn btn-primary btn-block btn-large" name="Accion" type="submit" value="Iniciar">
	
	
</form>



<center><img src="../Madereria/images/logo.jpg" width="280" height="280" alt="Smile"></center>

</div>
<script src="../Madereria/jquery/jquery.js"></script>
<script src="../Madereria/jquery/bootstrap.js"></script>
</body>
</html>
