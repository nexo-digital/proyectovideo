
<?php
	include("Acciones/session.php");
	include("Acciones/config.php");
?>



<html >




     <head>
	   
	   <title>Formulario Usuario Administración</title>
	 

	
	
	  <link href="css/hojacss.css" rel="stylesheet" type="text/css" />
	

     </head>
<body id="cuerpo">
	<header>
		<div  id="contenedor">
			<div  id="logo">
				<a href="index.php"><img src="imagenes/orica_logo.png" alt="Orica"></a>
			</div>
			<nav id="Navegacion">
				<ul>
				    	
					<li><a href="Login.php">Login</a></li>		
				    <li><a href="Contacto.php">Contactos</a></li>					
					<li><a href="Sugerencia.php">Sugerencias</a></li>
					<li><a href="Sustentabilidad.php">Sustentabilidad</a></li>
					<li><a href="Servicios.php">Servicios</a></li>
					<li><a href="QuienesSomos.php">Quienes somos</a></li>
					<li><a href="Index.php">Inicio </a></li>
					
				</ul>
			</nav>
		</div>
	</header>
	
	
	
	
	
	<section id="Cuerpo">
		<div  id="contenedor">
			<div  id="Cabecera">
				<h1>&nbsp; PANEL DE ADMINISTRACIÓN.
</h1>
			</div>
			
			

			<section id="Contenido">
				    <div id="texo">
					
	
</button>	

<ul>				
<a class="btn info" href="HomeAdmin.php"> HOME</a> 	
<a class="btn info" href="InfoSugerencia.php"> SUGERENCIAS</a>
<a class="btn info" href="InfoContacto.php"> CONTACTOS</a>
<a class="btn info" href="InfoUsuario.php"> USUARIOS</a>
<a class="btn info" href="Acciones/Salir.php"> SALIR</a>		

</ul>
                   
<hr/>
<div class="container">
<?php

$result = mysqli_query($mysqli,"SELECT * FROM usuario");

echo "<table border='1'>
<tr>
<th>No</th>
<th>Usuario</th>
<th>Contraseña</th>
<th>Eliminar</th>


</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['usuario'] . "</td>";
echo "<td>" . $row['clave'] . "</td>";

echo "<td><a href='Acciones/EliminarUsuario.php?id=".$row['id']."'><img src='./imagenes/eliminar.png' alt='Eliminar'></a></td><tr>";


echo "</tr>";
}
echo "</table>";

mysqli_close($mysqli);

?>
</div>



	
					
                </div>
			</div>

	
	</section>
	<br>
	<footer id="Pie">
		
			<div  id="contenedor">
			<p>	victor alfonso vargas 2011-0847</p>
		</div>
		
	</footer>
</body>
</html>