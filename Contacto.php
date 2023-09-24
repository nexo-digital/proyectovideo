<html >
     <head>
	   
	   <title>Formulario de contacto</title>
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
				<h1>&nbsp; FORMULARIO DE CONTACTO.
</h1>
			</div>
			
			

			<section id="Contenido">
				    <div id="texo">
                   <font color="#708085"> <h3>Puede utilizar nuestro formulario de contacto para comunicarse con nosotros. Estaremos encantado de responder a sus preguntas e inquietudes. </h3> </font>
                    
                       
          

<section class="formulario">

    <form action="Acciones/RegistrarContacto.php" method="POST">
<label for="nombre">Nombre:</label>
 <input id="nombre" type="text" name="txtNombre" placeholder="Nombre" required="" />
 <label for="apellido">Apellido:</label>
  <input id="apellido" type="text" name="txtApellido" placeholder="Apellido" required="" />
 <label for="email">Email:</label>
 <input id="email" type="email" name="txtEmail" placeholder="ejemplo@correo.com" required="" />
  <label for="asunto">Asunto:</label>
 <input id="asunto" type="text" name="txtAsunto" placeholder="Asunto" required="" />
 <label for="mensaje">Mensaje:</label>
 <textarea id="mensaje" name="txtMensaje" placeholder="Mensaje" required=""></textarea>
 <input id="submit" type="submit" name="submit" value="Enviar" />

</form>
  </section>

 

           


	
					
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