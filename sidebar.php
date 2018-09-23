<div class="sidebar">
	<h2>Ultimos artículos</h2>
	<hr>
	<div class="tarjetas-chicas">
		<?php
        $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1 ; //cuenta el numero de post y si no existen vuelve a la primera pagina
            global $wp_query;
            $original_query = $wp_query;
            $args = array(
                'post_type' => 'post',
                'showposts' => '5', //numero de noticias que treara
                'paged' => $currentPage ,
                'orderby' => 'date', 
                'order' => 'DESC'
            ); 
            $the_query = new WP_Query( $args );    
    		?>
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="tarjeta-chica wow fadeInUp">
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
		<?php endwhile; endif; ?>
	</div>	
	<hr>
	<div class="boton-ver-mas">
		<a href="<?php bloginfo('url'); ?>/articulos">Ver más</a>
	</div>	
</div>