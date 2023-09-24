<html >
     <head>
	   
	   <title>Formulario de sugerencia</title>
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
				<h1>&nbsp; FORMULARIO DE SUGERENCIA.
</h1>
			</div>
			
			

			<section id="Contenido">
				    <div id="texo">
                   <font color="#708085"> <h3>Para nosotros es de vital importancia su opinión. Siempre deseamos que están satisfecho con el servicio que proporcionamos, pero si las cosas no marchan bien, queremos saber lo que podemos hacer para mejorarla. Así que, por favor háganos llegar cualquier tipo de sugerencia, queja o duda que pueda tener. </h3> </font>
                    
                       
          

<section class="formulario">
    <form action="Acciones/RegistrarSugerencia.php" method="POST">
<label for="nombre">Nombre:</label>
 <input id="nombre" type="text" name="txtNombre" placeholder="Nombre" required="" />
 <label for="apellido">Apellido:</label>
  <input id="apellido" type="text" name="txtApellido" placeholder="Apellido" required="" />
 <label for="email">Email:</label>
 <input id="email" type="email" name="txtEmail" placeholder="ejemplo@correo.com" required="" />
  <label for="pais">Pais:</label>
 <input id="asunto" type="text" name="txtPais" placeholder="Pais" required="" />
 <label for="sugerencia">Sugerencia:</label>
 <textarea id="sugerencia" name="txtSugerencia" placeholder="Sugerencia" required=""></textarea>
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