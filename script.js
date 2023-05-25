let menuVisible = false; 
//Función que oculta o muestra el menú
function mostrarOcultarMenu(){
	if(menuVisible){
		document.getElementById("nav").classList = "";
		menuVisible = false;
	} else{
		document.getElementById("nav").classList = "responsive";
		menuVisible = true;
	}
}
function seleccionar(){
	//oculto el menú una vez que selecciono una opción
	document.getElementById("nav").classList = "";
	menuVisible = false; 
}
//Función que aplica las animaciones de las habilidades
function efectoHabilidades(){
	var skills = document.getElementById("skills");
	var distancia_skills = window.innerHeight - skills.getBoundingClientRect().top;
	if(distancia_skills >= 300){
		let habilidades = document.getElementsByClassName("progreso");
		habilidades[0].classList.add("javascript");
		habilidades[1].classList.add("htmlcss");
		habilidades[2].classList.add("bootstraps");
		habilidades[3].classList.add("phpmysql");
		habilidades[4].classList.add("python");
		habilidades[5].classList.add("equipo");
		habilidades[6].classList.add("comunicacion");
		habilidades[7].classList.add("creatividad");
		habilidades[8].classList.add("dedicacion");
		habilidades[9].classList.add("copywriting");
	}
}

//Detecto el scrolling para las barras de las habilidades
window.onscroll = function(){
	efectoHabilidades();
}

// ajax
$(document).ready(function() {
  	$('#miFormulario').submit(function(e) {
    	e.preventDefault(); // Evita que se realice el envío normal del formulario
      
     // Obtén los datos del formulario
     var formData = $(this).serialize();
      
      // Realiza la solicitud AJAX
      $.ajax({
        type: 'POST',
        url: 'enviar.php',
        data: formData,
       success: function(response) {
          // Aquí puedes manejar la respuesta del servidor si es necesario
         console.log(response);
         alert('¡Formulario enviado!');
       },
       error: function() {
         alert('Hubo un error al enviar el formulario.');
      }
    });
  });
});







