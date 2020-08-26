<?


if($_POST["password"] > "")
	var_dump($_POST);

?><!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Menu</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="ccs/estilos.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="fonts.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/main.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
posicionarMenu();
 
$(window).scroll(function() {    
    posicionarMenu();
});
 
function posicionarMenu() {
    var altura_del_header = $('header').outerHeight(true);
    var altura_del_logo = $('.logo').outerHeight(true);
    var altura_del_menu = $('.menu_bar').outerHeight(true);
 	
	/*  */
	
	
    if ($(window).scrollTop() >= altura_del_logo){
        $('nav').addClass('fixed');
        $('.menu_bar').addClass('fixed');
        $('nav').addClass('sombraMenu');
		$('.menu_bar').addClass('sombraMenu');
        $('header').css('margin-top', (altura_del_menu) + 'px');
		
    } else {
        $('nav').removeClass('fixed');
		$('.menu_bar').removeClass('fixed');
        $('nav').removeClass('sombraMenu');
		$('.menu_bar').removeClass('sombraMenu');
        $('header').css('margin-top', '0');
    }
}
 
</script>
<title>Untitled Document</title>
</head>

<body>
<header>
	<div>
		<div style="background-color: #061C6A" class="logo">
		   <picture>
			  <source srcset="/img/head1.png" media="(max-width: 420px )">
			  <source srcset="/img/head2.png" media="(max-width: 720px )">
			  <img src="/img/head3.png" alt="Logo" style="width:100%; max-width: 1200px">
			</picture>
		</div>
	</div>
 	<div class="menu_bar">
		<a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
	</div>
	<nav>
		<ul>
			<li><a href="#"><span class="icon-home"></span>Inicio</a></li>
			<li><a href="#"><span class="icon-briefcase"></span>Trabajos</a></li>
			<li class="submenu">
				<a href="#"><span class="icon-rocket"></span>Proyectos<span class="caret icon-arrow-down6"></span></a>
				<ul class="children">
					<li><a href="#">SubElemento #1 <span class="icon-dot"></span></a></li>
					<li><a href="#">SubElemento #2 <span class="icon-dot"></span></a></li>
					<li><a href="#">SubElemento #3 SubElemento #3 <span class="icon-dot"></span></a></li>
				</ul>
			</li>
			<li><a href="#"><span class="icon-earth"></span>Servicios</a></li>
			<li><a href="#"><span class="icon-mail"></span>Contacto</a></li>
		</ul>
	</nav>
</header>	  
	  	  
	  	  	  
	  	  	  	  	  
	  
<hr>



<div class="row">
	<div class="col-md-12">
	
		<div class="w3-container w3-card-4" style="float: right; min-width: 300px; padding-left: 20px; padding-right: 20px; padding-bottom: 20px" >
				<form method="post" action=""  >
				  <h2>Ingrese</h2>
				  <div class="w3-section">      
					<input name="usuario" id="usuario" class="w3-input" type="text" required>
					<label>Usuario/email</label>
				  </div>
				  <div class="w3-section">      
					<input name="password" id="password" class="w3-input" type="password" required>
					<label>Clave</label>
				  </div>
				  <div class="w3-section">      
					<input class="w3-input" value="entrar" type="submit">
				  </div>

				</form>
			</div>
	
	
	<p>
	
	
	<?
	
		
    // Definimos la función cURL
    function curl($url) {
        $ch = curl_init($url); // Inicia sesión cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // Configura cURL para devolver el resultado como cadena
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Configura cURL para que no verifique el peer del certificado dado que nuestra URL utiliza el protocolo HTTPS
        $info = curl_exec($ch); // Establece una sesión cURL y asigna la información a la variable $info
        curl_close($ch); // Cierra sesión cURL
        return $info; // Devuelve la información de la función
    }

    $sitioweb = curl("http://www.bcv.org.ve/");  // Ejecuta la función curl escrapeando el sitio web https://devcode.la and regresa el valor a la variable $sitioweb
    
	
	$inicio = strpos($sitioweb , "<strong>" , strpos($sitioweb , "Bs/USD")) + 8;	
		
	$fin = strpos($sitioweb , "</strong>" , strpos($sitioweb , "Bs/USD"));	
	$largo = $fin - $inicio;
		
	$txt = substr($sitioweb,$inicio,$largo);	
		echo "$inicio - $fin - $largo = ...$txt...";
		
	
	?>
	
	
	Content for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes Here
	
	
		
		
	
	
	</div>
</div>



<hr>	  
	  
	  
<div class="row">
	<div class="col-md-12">
		<div>
			CONTENIDO				
		        <article>
		            <p>Content for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes Here
		            </p>
		            <p>Content for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes Here</p>
		            <p>Content for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes Here</p>
		            <p>Content for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes HereContent for New article Tag Goes Here
		            
		            
		            </p>
		        </article>
		</div>
	</div>
</div>





</body>
</html>