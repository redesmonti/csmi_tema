<?php 
/*
Template Name: Quienes somos
*/
?>
<?php get_header(); ?>
<div class="container-fluid contenedor-principal">
	<div class="col-md-8">
		<h1 class="titulo-pagina wow fadeInUp"><?php the_title(); ?></h1>
		<hr>
		<div class="imagen-equipo wow fadeInUp">
			<?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?>
		</div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="contenedor-contenido">
			<p class="parrafo-pagina wow fadeInUp"><?php the_content(); ?></p>
		</div>
		<?php endwhile; endif; ?>
	</div>
	<div class="col-md-4">
		<?php include_once( 'sidebar.php' ); ?>
	</div>
</div>
<?php get_footer(); ?>