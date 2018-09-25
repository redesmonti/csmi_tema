<?php get_header(); ?>

<?php 

echo do_shortcode('[smartslider3 slider=2]');

?>

<div class="contenedor-especialidades container-fluid">

	<div class="contenedor-titulo row wow fadeInUp">

		<h1>Cómo podemos ayudarte</h1>

		<p class="bajada-titulo-especialidades">Nos especializamos en</p>

	</div>

	<div class="todas-las-especialidades wow fadeInUp">		

		<div class="tajeta-especialidades">

			<div class="imagen adulto">

				<div class="titulo-especialidad">

					<h2>Laboral</h2>

				</div>

				<div class="gradiente-especialidad"></div>

			</div>

			<div class="texto">
				<a href="<?php bloginfo('url'); ?>/laboral/">
				
					<p>El objetivo es escoger a los individuos que estén mejor calificados para el empleo y colocarlos en los puestos a los que se adapten mejor</p>
				</a>
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
				<a href="<?php bloginfo('url'); ?>/salud-escolar/">
				
					<p>Promover un modelo de atención que dé cuenta de las necesidades de las personas, con un enfoque preventivo, integrador y sistémico-familiar</p>
				</a>
			</div>

		</div>

		<div class="tajeta-especialidades">
			
			
			<div class="imagen familia">
			
				<div class="titulo-especialidadxl">

					<h2>Infanto juvenil y adulto</h2>

				</div>

				<div class="gradiente-especialidad"></div>

			</div>

			<div class="texto">
				<a href="<?php bloginfo('url'); ?>/infanto-juvenil-y-adulto/">
					<p>Busca evaluar el motivo de consulta, formular un diagnostico de la situación o enfermedad y proponer un programa de tratamiento</p>
				</a>
			</div>
			
		</div>

		<div class="tajeta-especialidades">

			<div class="imagen pareja">

				<div class="titulo-especialidad">

					<h2>Especiales</h2>

				</div>

				<div class="gradiente-especialidad"></div>

			</div>

			<div class="texto">
				<a href="<?php bloginfo('url'); ?>/especiales/">
				
					<p>Profesionales Psiquiatras y Psicólogos con formación en el uso de terapias complementarias, utilizan Terapia Floral de Bach y Aromaterapia </p>
				</a>
			</div>

		</div>



	</div>

</div>

<div class="container-fluid contenedor-video wow fadeInUp">

	<div class="col-md-6 video">

		

	</div>

	<div class="col-md-6 texto-video">

		<h2>Conoce más sobre la clínica</h2>

		<p>Lo que buscamos es entregar un servicio de atención a la salud mental de calidad, con cercanía hacia el paciente y su familia, pilares fundamentales para este tipo de tratamientos. El profesionalismo de nuestro equipo de especialistas nos mantiene con los más altos estándares al momento del diagnóstico y la atención</p>

	</div>

</div>

<div class="container-fluid articulos">

	<div class="contenedor-titulo row wow fadeInUp">

		<h1>Artículos</h1>

		<p class="bajada-articulos">Los invitamos a leer estos interesantes temas</p>

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

		<div class="col-md-8 contenedor-tarjetas-chicas">

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

				<div class="col-md-6">

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

				</div>

			

			<?php endwhile; endif; ?>

		</div>

	</div>

	<div class="col-md-12 boton-ver-mas-frente">

		<a href="<?php bloginfo('url'); ?>/articulos">Ver más artículos</a>

	</div>

</div>

<?php get_footer(); ?>