<?php
$usuario=$_POST['user'];
$nueva_contrase�a=$_POST['txtnuevacontra'];
$confirma_contrase�a=$_POST['txtconfirmacontra'];

if($nueva_contrase�a==$confirma_contrase�a){

//realizamos la actualizacion de la contrase�a
mysql_connect('localhost','root','root')or die ('Ha fallado la conexi?n: '.mysql_error());
mysql_select_db('madereria')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

$query = "update usuario set Password='$nueva_contrase�a' WHERE 	Username='$usuario'";
mysql_query($query) or die(mysql_error());

echo('<script language="JavaScript" >');
echo ('alert("La Contrase�a se ha Cambiado Correctamente.");');
echo('location.replace("../index.php")');
echo('</script>');



}else{
echo('<script language="JavaScript" >');
echo('alert("Error. El Respuesta Incorrecta");');
echo('</script>');

echo "<form action='ResetPassword.php' method='post' name='incorrecto' id='incorrecto'>";
echo "<input type='hidden' name='usuario' value='$usuario'>";
echo "</form>";


}



?>

<script>
function someter(){
document.incorrecto.submit();
}
someter();
</script>
