<?php get_header(); ?>
<?php 
echo do_shortcode('[smartslider3 slider=2]');
?>
<div class="contenedor-especialidades container-fluid">
	<div class="contenedor-titulo row wow fadeInUp">
		<h1>Como podemos ayudarte</h1>
		<p class="bajada-titulo-especialidades">Nos especializamos en</p>
	</div>
	<div class="todas-las-especialidades wow fadeInUp">		
		<div class="tajeta-especialidades">
			<div class="imagen adulto">
				<div class="titulo-especialidad">
					<h2>Adulto</h2>
				</div>
				<div class="gradiente-especialidad"></div>
			</div>
			<div class="texto">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo at culpa exercitationem nihil necessitatibus nam</p>
			</div>
		</div>
		<div class="tajeta-especialidades">
			<div class="imagen infanto">
				<div class="titulo-especialidad">
					<h2>Infanto Juvenil</h2>
				</div>
				<div class="gradiente-especialidad"></div>
			</div>
			<div class="texto">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo at culpa exercitationem nihil necessitatibus nam</p>
			</div>
		</div>
		<div class="tajeta-especialidades">
			<div class="imagen familia">
				<div class="titulo-especialidad">
					<h2>Familia</h2>
				</div>
				<div class="gradiente-especialidad"></div>
			</div>
			<div class="texto">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo at culpa exercitationem nihil necessitatibus nam</p>
			</div>
		</div>
		<div class="tajeta-especialidades">
			<div class="imagen pareja">
				<div class="titulo-especialidad">
					<h2>Pareja</h2>
				</div>
				<div class="gradiente-especialidad"></div>
			</div>
			<div class="texto">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo at culpa exercitationem nihil necessitatibus nam</p>
			</div>
		</div>

	</div>
</div>
<div class="container-fluid contenedor-video wow fadeInUp">
	<div class="col-md-6 video">
		
	</div>
	<div class="col-md-6 texto-video">
		<h2>Conoce más sobre la clínica</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit quos amet obcaecati sed voluptatem ducimus aliquam maiores dolore, possimus blanditiis, magni quis, cum praesentium iusto error numquam. Quaerat labore, tenetur?</p>
	</div>
</div>
<div class="container-fluid articulos">
	<div class="contenedor-titulo row wow fadeInUp">
		<h1>Artículos</h1>
		<p class="bajada-articulos">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="col-md-4">
			<?php
	            $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1 ; //cuenta el numero de post y si no existen vuelve a la primera pagina
	                global $wp_query;
	                $original_query = $wp_query;
	                $args = array(
	                    'post_type' => 'post',
	                    'showposts' => '1', //numero de noticias que treara
	                    'paged' => $currentPage ,
	                    'orderby' => 'date', 
	                    'order' => 'ASC',
	                    'tag'   => 'destacada'
	                ); 
	                $the_query = new WP_Query( $args );    
	        ?>
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
			<?php endwhile; endif; ?> 	
		</div>
		<div class="col-md-4">
			<?php
            $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1 ; //cuenta el numero de post y si no existen vuelve a la primera pagina
                global $wp_query;
                $original_query = $wp_query;
                $args = array(
                    'post_type' => 'post',
                    'showposts' => '4', //numero de noticias que treara
                    'paged' => $currentPage ,
                    'orderby' => 'date', 
                    'order' => 'DESC'
                ); 
                $the_query = new WP_Query( $args );    
        		?>
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="tarjetas-chicas">
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
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
	<div class="col-md-12 boton-ver-mas-frente">
		<a href="<?php bloginfo('url'); ?>/articulos">Ver más Articulos</a>
	</div>
</div>
<?php get_footer(); ?>