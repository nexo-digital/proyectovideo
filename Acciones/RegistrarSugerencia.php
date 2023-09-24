
	<?php
	
		
	include("config.php");
	
	if($_POST)
	{
	$nombre=$_POST['txtNombre'];
	$apellido=$_POST['txtApellido'];
	$email=$_POST['txtEmail'];
	$pais=$_POST['txtPais'];
	$sugerencia=$_POST['txtSugerencia'];
	
	
	try {


$sql = "INSERT INTO sugerencia(nombre,apellido,email,pais,sugerencia) 
VALUES('$nombre', '$apellido', '$email', '$pais', '$sugerencia')";
if(mysqli_query($mysqli, $sql)){
       echo '<script language="javascript">';
	echo 'alert("Mensaje enviado con exito!");';
	header("Location:../index.php");
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("No se envio el mensaje!");';
	header("Location:../sugerencia.php");
	echo '</script>';
		
}
      
}catch(PDOException $e)
{

}
	
	
}
	
	?>
     
