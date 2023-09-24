<?php
include("config.php");
include("session.php");

$id = $_GET['id'];


$sql = "DELETE FROM usuario WHERE usuario='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Usuario fue eliminador!");';
	header("Location:../InfoUsuario.php");
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error de eliminación!");';
    header("Location:../InfoUsuario.php");
	echo '</script>';
}
?>