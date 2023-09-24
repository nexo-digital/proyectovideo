<html >
     <head>
	   
	   <title>Formulario Login</title>
	 

	
	
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
				<h1>&nbsp; INICIO DE SESSIÓN.
</h1>
			</div>
			
			

			<section id="Contenido">
				    <div id="texo">
                   
 <div class="imgcontainer">
    <img src="imagenes/login.png" alt="Login" class="user" width="200" height="200">
  </div>


<form action="Acciones/validar.php" method="POST">
 
  <input id="usuario" type="text" name="txtUsuario" placeholder="Usuario" required="" />
  <label for=""></label>
 <input id="clave" type="password" name="txtClave" placeholder="Contraseña" required="" />

 <input id="submit" type="submit" name="submit" value="Ingresar" />
 
<input id="submit" type="submit" name="Cancelar" value="Cancelar" onClick="location.href='../ProyectoFinal/index.php'">

</form>

	
					
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