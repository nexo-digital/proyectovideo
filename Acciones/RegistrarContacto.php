
	<?php
	
	include("config.php");
	
	
		

	if($_POST)
	{
	$nombre=$_POST['txtNombre'];
	$apellido=$_POST['txtApellido'];
	$email=$_POST['txtEmail'];
	$asunto=$_POST['txtAsunto'];
	$mensaje=$_POST['txtMensaje'];
	
	

try {


$sql = "INSERT INTO contacto(nombre,apellido,email,asunto,mensaje) 
VALUES('$nombre', '$apellido', '$email', '$asunto', '$mensaje')";
if(mysqli_query($mysqli, $sql)){
       echo '<script language="javascript">';
	echo 'alert("Mensaje enviado con exito!");';
	header("Location:../index.php");
	echo '</script>';
	
	
	
	
	
} else {
	echo '<script language="javascript">';
	echo 'alert("No se envio el mensaje!");';
	header("Location:../contacto.php");
	echo '</script>';
		
}


		
      
}catch(PDOException $e)
{

}
 
	
	
}
	
	?>
     