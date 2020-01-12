
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SCE CBTIS226</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FreeHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.cO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/cbtis.png">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Prata" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="style.css">
<

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<?php
	session_start();
	$usuarioAlumno = $_SESSION['alumno'];

	if(!isset($usuarioAlumno)){
		header("location: login/login_alumno.php");
	}
	else{
	
	
	?>
	
	<header role="banner" id="fh5co-header">
		
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<a class="navbar-brand" href="index.html" >SCE CBTIS226</a> 
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right" >
						<li><a href="Alumnos/calificaciones.php" data-nav-section="practice-areas" style="color:white;"><span>Calificaciones</span></a></li>
						<li><a href="Alumnos/datos.php" data-nav-section="testimony" style="color:white;"><span>Informacion Personal</span></a></li>
						<li><a href="http://cbtis226.edu.mx" data-nav-section="services" style="color:white;"><span>Pagina CBTIS 226</span></a></li>
						<li><a href="Alumnos/contraseña_alumno.php" data-nav-section="team"style="color:white;"><span>Cambiar Contraseña</span></a></li>
						<li><a href="login/salir.php" data-nav-section="contact" style="color:white;"><span>Salir</span></a></li>
					</ul>
				</div>
			</div>
		</nav>
 
	</header>

	<section id="fh5co-home" data-section="home" style="background-image: url(images/flat2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div id="titulo" class="col-md-10 col-md-offset-1 to-animate">
							<h1 >Bienvenido 
							<?php 
								include ("conex.php");
								$id=$_SESSION['alumno'];
								$query="SELECT * FROM alumnos WHERE id_alumnos='$id'";
								$resultado=$link->query($query);
								$row=$resultado->fetch_assoc();
								echo $row['nombre_alumno'];

							?></h1>
							<h2>Sistema de control de estudiantes<a href="https://www.youtube.com/watch?v=74Zex34owSk" target="_blank">Video Promocional cbtis </h2>
		
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	

	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
	<?php 
	}?>
	</body>
</html>

