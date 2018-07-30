<?php get_header(); ?>
<div class="container-fluid contenedor-principal">
	<div class="col-md-8">
		<?php if ( have_posts() ) : the_post(); ?>
		<h1 class="titulo-pagina wow fadeInUp"><?php the_title(); ?></h1>
		<hr>
		<div class="contenedor-contenido">
			<p><?php the_content(); ?></p>
		</div>
		<?php previous_post_link('%link', '<i class="fa fa-arrow-left"></i> Atras '); ?><!--hacia atras-->
        <?php next_post_link('%link', ' Siguiente <i class="fa fa-arrow-right"></i>'); ?><!--hacia adelante-->
	</div>
	<?php endif; ?>
	<?php rewind_posts(); ?>
	<div class="col-md-4">
		<?php include_once( 'sidebar.php' ); ?>
	</div>
</div>	

<?php get_footer(); ?>