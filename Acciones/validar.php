


<?php
include("config.php");
session_start();




if($_POST)
	{
	$usuario=$_POST['txtUsuario'];
	$clave=$_POST['txtClave'];


 
$usuario = $mysqli->real_escape_string($usuario);
 
$query = "SELECT usuario, clave FROM usuario WHERE usuario = '$usuario' AND clave='$clave';";
$result = $mysqli->query($query);
 
if($result->num_rows == 1) 
{
	
	$_SESSION['user'] = $usuario;
	header("Location:../HomeAdmin.php");
}
else{ 
header("Location:../Login.php");
}

}
?>