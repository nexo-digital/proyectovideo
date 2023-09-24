<?php
include("config.php");
include("session.php");

$id = $_GET['id'];


$sql = "DELETE FROM contacto WHERE id_contacto='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Usuario fue eliminador!");';
	header("Location:../InfoContacto.php");
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error de eliminación!");';
    header("Location:../InfoContacto.php");
	echo '</script>';
}
?>