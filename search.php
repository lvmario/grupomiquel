<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package grupomiquel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<?php
		if ( have_posts() ) : ?>

						<!-- Red -->
				    <section class="red"></section>
				        
				    <!-- Nuestros Protagonistas -->
				    <section>
				            <div class="container animated fadeIn">
				                <div class="row">
				                    <div class="col-lg-12 text-center nuestros-protagonistas">
				                    	<h2 class="section-heading"><?php     printf( esc_html__( 'Resultados de busqueda para: %s', 'grupomiquel' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
				                    </div>
				                    <div class="col-lg-9 text-center">
				                          <img class="img-responsive text-center line" src='<?php echo esc_url(get_template_directory_uri())."/img/linea.png"; ?>'>
				                    </div>
				                </div>
				            </div>
				        </section>
				        <section class="protagonistas-mas animated fadeIn">
					            <div class="container">
					                <div class="row">

			<?php
			/* Start the Loop */
			$i=1;	
			while ( have_posts() ) : the_post();

		
?>

						 
					                    <div class="col-lg-4 col-md-6 col-sm-12 protagonistas-item">
					                        <a class="portfolio-link" data-toggle="modal" href="<?php echo esc_url( $post->post_permalink ); ?>">
					                            <img class="img-fluid img-responsive" src="<?php echo get_the_post_thumbnail_url($post->post_ID); ?>">
					                        </a>
					                        <p class="date-projects"><?php echo esc_html( $post->post_date ); ?></p>
					                        <p class="title-note"><?php echo esc_html( $post->post_title ); ?></p>
					                        <p class="text-note"><?php echo esc_html( $post->post_excerpt ); ?></p>
					                        <button type="button" class="btn btn-primary hvr-float-shadow">Leer más</button>
					                    </div>

  		 
	<?php

						$x=$i-1;
						if  (  x != 0 && 0 === $x % 3 ){ ?>
							</div>
						<div class="row">

<?php					}	
	
	$i++;

	endwhile;	?>

				 
       		 </div>
   	 	 </section>	

<?php	

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
