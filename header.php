<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head(); ?>
</head>
<body><!--se cierra en footer.php-->
	<header class="site-header">
	    <nav class="navegacion navbar-fixed-top" id="navbarjs" role="navigation">
			<div class="botones-header-llamado container-fluid">
				<div class="col-md-8 col-xs-12">	            
					<div class="navbar-brand">
			            <a href="<?php bloginfo('url'); ?>">
			              	<h3><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logocsmi.jpeg" alt="Responsive image"></h3>
			            </a>  
			        </div> 
		        </div>
			<div class="col-md-2 col-xs-12">
				<div class="llamado-telefono">
					<div class="telefono-boton"><i class="fa fa-phone" aria-hidden="true"></i></div>
					<div class="texto-boton">
						<p>Contáctate con nosotros</p>
						<a href="tel:+569987654321"><button>99 876 543 21</button></a>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-xs-12">
				<div class="llamado-telefono">
					<div class="telefono-boton"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="texto-boton">
						<p>Escribenos</p>
						<a href="mailto:contacto@csmi.cl"><button>contacto@csmi.cl</button></a>
					</div>
				</div>
			</div>
			</div>
	        <div class="container menu_principal">
	          <div class="navbar-header"> 
	            <button type="button" class="navbar-toggle smooth-scroll" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
	              <span class="sr-only">Toggle navigation</span> 
	              <span class="icon-bar"></span> 
	              <span class="icon-bar"></span> 
	              <span class="icon-bar"></span> 
	            </button>  
	          </div>
	          <div class="smooth-scroll collapse navbar-collapse navbar-right navbar-ex1-collapse">
	            <ul class="nav navbar-nav">
			        <li class="active">
		        		<a href="<?php bloginfo('url'); ?>">Inicio</a>
		        		<div class="cuadrado azul_dos"></div>
		        		<div class="borde-menu azul_uno"></div>
			        </li>
			        <li class="azul_dos">
			       		<a href="<?php bloginfo('url'); ?>/quienes-somos/">Quiénes somos</a>
			       		<div class="cuadrado azul_tres"></div>
		        		<div class="borde-menu azul_dos"></div>
			        </li>
			        <li class="azul_tres">
			       		<a href="<?php bloginfo('url'); ?>/especialidades/">Especialidades</a>
			       		<div class="cuadrado azul_cuatro"></div>
		        		<div class="borde-menu azul_tres"></div>
			        </li>
			        <li class="azul_cuatro">
			       		<a href="<?php bloginfo('url'); ?>/profesionales/">Profesionales</a>
			       		<div class="cuadrado azul_cinco"></div>
		        		<div class="borde-menu azul_cuatro"></div>
			        </li>
			        <li class="azul_cinco">
			       		<a href="<?php bloginfo('url'); ?>/articulos/">Artículos</a>
			       		<div class="cuadrado azul_seis"></div>
		        		<div class="borde-menu azul_cinco"></div>
			        </li>
			        <li class="azul_seis">
			       		<a href="<?php bloginfo('url'); ?>/contacto/">Contacto</a>
			       		<div class="cuadrado azul_uno"></div>
		        		<div class="borde-menu azul_seis"></div>
			        </li>
			    </ul>
	          </div>
	        </div>        
	    </nav><!-- fin navegacion-->
	</header>

<!-- botoneras redes sociales -->
