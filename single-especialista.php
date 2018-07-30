<?php 
/*
Template Name: Single Especialista
*/
?>
<?php get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<?php if ( have_posts() ) : the_post(); ?>
		<div class="col-md-8 contenido-pagina">
			<div class="titulo-noticia-pagina wow fadeInUp">
				<div class="">
					<h1><?php the_title(); ?></h1>	
				</div>
			</div>
			<div class="caja-foto-articulo wow fadeInUp">
				<?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?>
			</div>
			<div class="wow fadeInUp">
				<p><?php the_content(); ?></p>
			</div>
		</div>
	    <?php endif; ?>
	    <?php rewind_posts(); ?>
	    <div class="col-md-4">
			<?php include_once( 'sidebar.php' ); ?>
		</div>
		</div>
			<div class="col-md-12 navegacion-noticias">
	        <?php previous_post_link('%link', '<i class="fa fa-arrow-left"></i> Atras '); ?><!--hacia atras-->
	        <?php next_post_link('%link', ' Siguiente <i class="fa fa-arrow-right"></i>'); ?><!--hacia adelante-->
	    </div>
	</div>
</div>
<?php get_footer(); ?>
