<?php 
/*
Template Name: Profesionales
*/
?>
<?php get_header(); ?>
<div class="container-fluid contenedor-principal">
	<div class="col-md-8">
		<h1 class="titulo-pagina wow fadeInUp">Especialistas</h1>
		<hr>
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<?php
		        $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1 ; //cuenta el numero de post y si no existen vuelve a la primera pagina
		            global $wp_query;
		            $original_query = $wp_query;
		            $args = array(
		                'post_type' => 'especialista',
		                'showposts' => '6', //numero de noticias que treara
		                'paged' => $currentPage ,
		                'orderby' => 'date', 
		                'order' => 'ASC',
		            ); 
			        $custom_post_type = new WP_Query( $args );
		            $wp_query = $custom_post_type;
		            if ( $custom_post_type->have_posts() ) : ?>
		                <?php $i = 1; while ( $custom_post_type->have_posts() ) : $custom_post_type->the_post(); ?>
		                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		                <?php if(!empty($url)){ ?>
					<div class="tarjeta-especialista">
						<div class="foto-profesional">
							<a href="<?php the_permalink(); ?>">
	                            <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('large', array('class' => 'img-responsive')); }?>
	                        </a>
						</div>
						<div class="bloque-texto">
							<h3><?php the_title(); ?></h3>
							<hr>
							<p class="etiqueta">Especialidad: </p>
							<p class="contenido-especialista"><?php the_excerpt(); ?></p>
						</div>
					</div>
				<?php } ?>
          	<?php $i++; endwhile; endif; ?>
          	<?php rewind_posts(); ?>
			</div>
		</div>
		<div class="col-md-8">
            <?php 
            the_posts_pagination(
              array(
                  'mid_size' => 2,
                  'screen_reader_text'=> '&nbsp;',//poner texto sobre paginacion
                  'prev_text' => __( '<i class="fa fa-arrow-left"></i>', 'textdomain' ),
                  'next_text' => __( '<i class="fa fa-arrow-right"></i>', 'textdomain' ),
              )
            ); 
            wp_reset_postdata();
            $wp_query = $original_query;
            ?>
          </div>
	</div>
	<div class="col-md-4">
		<?php include_once( 'sidebar.php' ); ?>
	</div>
</div>
<?php get_footer(); ?>