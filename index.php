<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="jquery-3.7.0.min.js"></script> 
	<title>Portfolio: Gonzalo Civita</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<!--MENU ENCABEZADO-->
	<div class="contenedor-header">
		<header>
			<div class="logo">
				<span>GonCiv</span>
			</div>
			<nav id="nav">
				<ul>
					<li><a href="#inicio" onclick="seleccionar()">INICIO</a></li>
					<li><a href="#sobremi" onclick="seleccionar()">SOBRE MI</a></li>
					<li><a href="#skills" onclick="seleccionar()">SKILLS</a></li>
					<li><a href="#curriculum" onclick="seleccionar()">CURRICULUM</a></li>
					<li><a href="#portfolio" onclick="seleccionar()">PORTFOLIO</a></li>
					<li><a href="#contacto" onclick="seleccionar()">CONTACTO</a></li>
				</ul>
			</nav>
			<div class="nav-responsive" onclick="mostrarOcultarMenu()">
				<i class="fa-solid fa-bars"></i>
			</div>
		</header>
	</div>
	<script>
		$(function() {
	$('#enviar').submit(function(event) {
    event.preventDefault();      
    $.ajax({
        url: 'enviar.php',
        type: "POST",
        data: $('#miFormulario').serialize(),
        success: function(response) {
            // Manejar la respuesta del servidor después de un envío exitoso
            $('#respuesta').html(response);
            // Puedes mostrar un mensaje de éxito, limpiar el formulario, etc.
            },
         error: function(xhr, status, error) {
            // Manejar los errores de la solicitud AJAX
            comsole.log('error')
            // Puedes mostrar un mensaje de error o tomar otras acciones
        }
    });
 });
}

	</script>

	<!--SECTION INICIO-->
	<section id="inicio" class="inicio">
		<div class="contenido-banner">
			<div class="contenedor-img">
				<img src="img/hero.png" alt="">
			</div>
			<h1>Gonzalo Civita</h1>
			<h2>Programador Web Fullstack - Data Scientist</h2>
			<div class="redes">
				<a href="https://www.linkedin.com/in/gonzalo-civita/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
				<a href="https://www.facebook.com/gonzalo.civita/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
				<a href="https://www.instagram.com/civitagonzalo/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
				<a href="" target="_blank"><i class="fa-brands fa-youtube"></i></a>
			</div>
		</div>
	</section>

	<!--SECTION SOBRE MI-->
	<section id="sobremi" class="sobremi">
		<div class="contenido-seccion">
			<h2>Sobre Mi</h2>
			<p><span>Hola, Soy Gonzalo Civita</span>,un apasionado programador web full stack con experiencia en frontend y backend, y un amante del arte en todas sus formas, especialmente la música. Además de mi experiencia en desarrollo web y gestión de bases de datos, también soy un cantante apasionado y formo parte de una banda de rock.
			<br>
			<br>
			Mi amor por la música y el arte me ha proporcionado una perspectiva única en mi enfoque hacia la programación y el diseño web. Me considero una persona creativa y siempre busco incorporar elementos artísticos en mis proyectos para crear experiencias web atractivas y memorables para los usuarios.
			<br>
			<br>
			Mi experiencia en la música me ha brindado habilidades adicionales, como la capacidad de trabajar en equipo de manera armoniosa, la habilidad para improvisar y adaptarme a diferentes situaciones, y la capacidad de expresarme de manera creativa. Estas habilidades se han traducido en mi enfoque hacia la programación, donde busco soluciones innovadoras y creativas para los desafíos técnicos.
			<br>
			<br>
			Mi pasión por el arte y la música también se refleja en mi deseo constante de aprender y crecer profesionalmente. Siempre estoy buscando oportunidades para combinar mis habilidades en programación web con mi amor por la música y el arte en general.
			<br>
			<br>
			Estoy emocionado de seguir desarrollando mi carrera como programador web full stack y, al mismo tiempo, seguir explorando mi lado artístico. Siempre estoy abierto a nuevas oportunidades y colaboraciones que me permitan combinar mis habilidades técnicas con mi pasión por la música y el arte. ¡Me encantaría conectarme contigo y descubrir cómo podemos trabajar juntos en proyectos creativos y emocionantes!</p>

			<div class="fila">
				<!--DATOS PERSONALES-->
				<div class="col">
					<h3>Datos Personales</h3>
					<ul>
						<li>
							<strong>Cumpleaños</strong>
							17-04-1990
						</li>
					</ul>
					<ul>
						<li>
							<strong>Teléfono</strong>
							351-6453580
						</li>
					</ul>
					<ul>
						<li>
							<strong>Email</strong>
							gonzalocivita@gmail.com
						</li>
					</ul>
					<ul>
						<li>
							<strong>Website</strong>
							www.gonzalociv.com
						</li>
					</ul>
					<ul>
						<li>
							<strong>Residencia</strong>
							Córdoba, Argentina
						</li>
					</ul>
					<ul>
						<li>
							<strong>Cargo</strong>
							FREELANCE
						</li>
					</ul>
				</div>

				<!--INTERESES-->
				<div class="col">
					<h3>Intereses</h3>
					<div class="contenedor-intereses">
						<div class="intereses">
							<i class="fa-solid fa-gamepad"></i>
							<span>JUEGOS</span>
						</div>
						<div class="intereses">
							<i class="fa-solid fa-music"></i>
							<span>MÚSICA</span>
						</div>
						<div class="intereses">
							<i class="fa-solid fa-plane"></i>
							<span>VIAJAR</span>
						</div>
						<div class="intereses">
							<i class="fa-sharp fa-solid fa-film"></i>
							<span>CINE</span>
						</div>
						<div class="intereses">
							<i class="fa-solid fa-microphone"></i>
							<span>PODCAST</span>
						</div>
						<div class="intereses">
							<i class="fa-solid fa-book"></i>
							<span>LÍBROS</span>
						</div>
						<div class="intereses">
							<i class="fa-solid fa-camera"></i>
							<span>FOTOS</span>
						</div>
						<div class="intereses">
							<i class="fa-sharp fa-solid fa-microchip"></i>
							<span>TECNOLOGÍA</span>
						</div>
					</div>
				</div>
			</div>
			<a download="Curriculum" href="cv_2023.pdf" target="_blank">
				<button>
					<a download="Curriculum" href="cv_2023.pdf" target="_blank">
					Descargar CV <i class="fa-solid fa-download"></i>
					<span class="overlay"></span>
				</button>
			</a>
		</div>

		<div class="fila">
			<div class="col"></div>
		</div>
	</section>

	<!--SECTION SKILLS-->
	<section id="skills" class="skills">
		<div class="contenido-seccion">
			<h2>Skills</h2>
			<div class="fila">
				<!--Technical Skills-->
				<div class="col">
					<h3>Technical Skills</h3>
					<div class="skill">
						<span>Javascript</span>
						<div class="barra-skill">
							<div class="progreso">
								<span>50%</span>
							</div>
						</div>
					</div>
					<div class="skill">
						<span>HTML & CSS</span>
						<div class="barra-skill">
							<div class="progreso">
								<span>79%</span>
							</div>
						</div>
					</div>
					<div class="skill">
						<span>Bootstraps</span>
						<div class="barra-skill">
							<div class="progreso">
								<span>72%</span>
							</div>
						</div>
					</div>
					<div class="skill">
						<span>PHP & MySQL</span>
						<div class="barra-skill">
							<div class="progreso">
								<span>75%</span>
							</div>
						</div>
					</div>
					<div class="skill">
						<span>Python</span>
						<div class="barra-skill">
							<div class="progreso">
								<span>75%</span>
							</div>
						</div>
					</div>
				</div>
				<!--Professional Skills-->
				<div class="col">
					<h3>Professional Skills</h3>
					<div class="skill">
						<span>Trabajo en equipo</span>
						<div class="barra-skill">
							<div class="progreso">
								<span>65%</span>
							</div>
						</div>
					</div>
					<div class="skill">
						<span>Comunicación</span>
						<div class="barra-skill">
							<div class="progreso">
								<span>85%</span>
							</div>
						</div>
					</div>
					<div class="skill">
						<span>Creatividad</span>
						<div class="barra-skill">
							<div class="progreso">
								<span>99%</span>
							</div>
						</div>
					</div>
					<div class="skill">
						<span>Dedicación</span>
						<div class="barra-skill">
							<div class="progreso">
								<span>90%</span>
							</div>
						</div>
					</div>
					<div class="skill">
						<span>Copywriting</span>
						<div class="barra-skill">
							<div class="progreso">
								<span>56%</span>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<!--SECTION CURRICULUN-->
	<section id="curriculum" class="curriculum">
		<div class="contenido-seccion">
			<h2>Curriculum</h2>
			<div class="fila">
				<div class="col izquierda">
					<h3>Educación</h3>
					<div class="item izq">
						<h4>Arte y Multimedia</h4>
						<span class="casa">Universidad de Oxford</span>
						<span class="fecha">2005 - 2008</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Vel, quia. Fugit voluptatum rerum doloribus fuga doloremque quam veritatis ut deserunt? Id iure beatae deleniti consectetur nulla alias explicabo architecto molestiae.</p>
						<div class="conectori">
							<div class="circuloi"></div>
						</div>
					</div>
						<div class="item izq">
						<h4>Arte y Multimedia</h4>
						<span class="casa">Universidad de Oxford</span>
						<span class="fecha">2005 - 2008</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Vel, quia. Fugit voluptatum rerum doloribus fuga doloremque quam veritatis ut deserunt? Id iure beatae deleniti consectetur nulla alias explicabo architecto molestiae.</p>
						<div class="conectori">
							<div class="circuloi"></div>
						</div>
					</div>
						<div class="item izq">
						<h4>Arte y Multimedia</h4>
						<span class="casa">Universidad de Oxford</span>
						<span class="fecha">2005 - 2008</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Vel, quia. Fugit voluptatum rerum doloribus fuga doloremque quam veritatis ut deserunt? Id iure beatae deleniti consectetur nulla alias explicabo architecto molestiae.</p>
						<div class="conectori">
							<div class="circuloi"></div>
						</div>	
					</div>
					</div>
				
					<div class="col derecha">
						<h3>Experiencia Laboral</h3>
						<div class="item der">
						<h4>Fron Developer</h4>
						<span class="casa">Nombre de Compañia</span>
						<span class="fecha">2005 - 2008</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Vel, quia. Fugit voluptatum rerum doloribus fuga doloremque quam veritatis ut deserunt? Id iure beatae deleniti consectetur nulla alias explicabo architecto molestiae.</p>
						<div class="conectord">
							<div class="circulod"></div>
						</div>
						</div>
						<div class="item der">
						<h4>Fron Developer</h4>
						<span class="casa">Nombre de Compañia</span>
						<span class="fecha">2005 - 2008</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Vel, quia. Fugit voluptatum rerum doloribus fuga doloremque quam veritatis ut deserunt? Id iure beatae deleniti consectetur nulla alias explicabo architecto molestiae.</p>
						<div class="conectord">
							<div class="circulod"></div>
						</div>
						</div>
						<div class="item der">
						<h4>Fron Developer</h4>
						<span class="casa">Nombre de Compañia</span>
						<span class="fecha">2005 - 2008</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Vel, quia. Fugit voluptatum rerum doloribus fuga doloremque quam veritatis ut deserunt? Id iure beatae deleniti consectetur nulla alias explicabo architecto molestiae.</p>
						<div class="conectord">
							<div class="circulod"></div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--SECTION PORTFOLIO-->
	<section id="portfolio" class="portfolio">
		<div class="contenido-seccion">
			<h2>PORTFOLIO</h2>
			<div class="galeria">
				<div class="proyecto">
					<img src="img/p1.jpg" alt="">
					<div class="overlay">
						<h3>Diseño Creativo</h3>
						<p>Fotografía</p>
					</div>
				</div>
				<div class="proyecto">
					<img src="img/p2.jpg" alt="">
					<div class="overlay">
						<h3>Diseño Creativo</h3>
						<p>Fotografía</p>
					</div>
				</div>
				<div class="proyecto">
					<img src="img/p3.jpg" alt="">
					<div class="overlay">
						<h3>Diseño Creativo</h3>
						<p>Fotografía</p>
					</div>
				</div>
				<div class="proyecto">
					<img src="img/p4.jpg" alt="">
					<div class="overlay">
						<h3>Diseño Creativo</h3>
						<p>Fotografía</p>
					</div>
				</div>
				<div class="proyecto">
					<img src="img/p5.jpg" alt="">
					<div class="overlay">
						<h3>Diseño Creativo</h3>
						<p>Fotografía</p>
					</div>
				</div>
				<div class="proyecto">
					<img src="img/p6.jpg" alt="">
					<div class="overlay">
						<h3>Diseño Creativo</h3>
						<p>Fotografía</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--SECTION CONTACTO-->
	<div class="contacto" id="contacto">
		<div class="contenido-seccion">
			<h2>CONTACTO</h2>
			<div class="fila">
				<!--Formulario-->
				<div class="col">
					<form id="miFormulario" method="POST">
						<input type="text" name="nombre" placeholder= "Tu Nombre" required>
						<input type="text" name="numero" placeholder= "Número Telefónico" required>
						<input type="email" name="correo" placeholder= "Dirección de Correo" required>
						<input type="text" name="tema" placeholder= "Tema" required>
						<textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje" required></textarea>
						<button type="submit" id="culia" value="Enviar">
							Enviar Mensaje <i class="fa-solid fa-paper-plane"></i>
							<span class="overlay"></span>
						</button>
					</form>
					<div id="respuesta"></div>
					 <?php 
                		if (isset ($_GET['ok_bd'])) {
                			echo "<p style= 'color: #1CB698'>Correo enviado.</p>";
            			};
            		 ?>
				</div>
		
				<!--mapa-->
				<div class="col">
					<img src="img/ubicacion.png" alt="imagen de mapa">
					<div class="info">
						<ul>
							<li>
								<i class="fa-solid fa-location-dot"></i>
								Alejandro Carbó 1850, Juniors 
							</li>
							<li>
								<i class="fa-solid fa-mobile-screen"></i>
								Llámame: +54 9 0351 156453580
							</li>
							<li>
								<i class="fa-solid fa-envelope"></i>
								gonzalocivita@gmail.com
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--FOOTER-->
	<footer>
		<a href="#inicio" class="arriba">
			<i class="fa-solid fa-angles-up"></i>
		</a>
			<div class="redes">
				<a href="https://www.linkedin.com/in/gonzalo-civita/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
				<a href="https://www.facebook.com/gonzalo.civita/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
				<a href="https://www.instagram.com/civitagonzalo/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
				<a href="" target="_blank"><i class="fa-brands fa-youtube"></i></a>
			</div>
	</footer>

	<script src="script.js"></script>
</body>
</html>