<?php 
/*
Template Name: Articulos
*/
?>
<?php get_header(); ?>
<div class="container-fluid">
	<div class="col-md-8 contenido-pagina">
		<h1 class="wow fadeInUp">Articulos</h1>
		<div class="row">
			<?php 
	          $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1 ; //cuenta el numero de post y si no existen vuelve a la primera pagina
	          global $wp_query;
	          $original_query = $wp_query;
	          $args = array( 
	          	'post_type'=> 'post',
	          	'showposts' => '6', //numero de noticias que treara
	            'paged' => $currentPage ,
	            'orderby' => 'date', 
	            'order' => 'DESC',
	          ); 
	           $custom_post_type = new WP_Query( $args );
	              $wp_query = $custom_post_type;
	              if ( $custom_post_type->have_posts() ) : ?>
	                <?php $i = 1; while ( $custom_post_type->have_posts() ) : $custom_post_type->the_post(); ?>
	                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	                <?php if(!empty($url)){ ?>
			 <!-- loop de wordpress este debe ser el contenido para editar desde wordpress -->
			<div class="col-md-4">
					<div class="tarjeta-grande wow fadeInUp">
						<div class="foto-noticia">
							<div class="gradiente-foto"></div>		
							<div class="redes-sociales">
								<a target="_blank" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>">
									<div class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></div>
								</a>
								<a target="_blank" href="https://twitter.com/intent/tweet?text=Estoy leyendo <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>">
									<div class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div>
								</a>	
								<a target="_blank" href="https://web.whatsapp.com/send?text=Estoy leyendo <?php the_permalink();?>&t=<?php the_title(); ?>">
									<div class="wsp"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
								</a>
							</div>
							<a href="<?php the_permalink(); ?>">
		                		<?php  if ( has_post_thumbnail() ) { the_post_thumbnail('large', array('class' => '')); }?>
		            		</a>							
						</div>
						<div class="texto">
							<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
							<p><?php the_excerpt(); ?></p>	
						</div>
					</div>
			</div>
			<?php } ?>
	        <?php $i++;endwhile; endif; ?>
		</div>
	</div>
	<div class="col-md-4">
		<?php include_once( 'sidebar.php' ); ?>
	</div>
</div>

<?php get_footer(); ?>