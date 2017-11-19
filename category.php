<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grupomiquel
 */

get_header(); 
$cantidad_de_articulos = 4;
$i=1;

?>

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
				          <?php     the_archive_title( '<h2 class="section-heading">', '</h2>' ); ?>
				                    </div>
				                    <div class="col-lg-9 text-center">
				                          <img class="img-responsive text-center" src='<?php echo esc_url(get_template_directory_uri())."/img/linea.png"; ?>'>
				                    </div>
				                </div>
				            </div>
				        </section>

			<?php
			/* Start the Loop */
		while ( have_posts() ) : the_post();

				 if ( 1 === $i) { ?>

					    <section class="protago bg-light animated fadeIn">
				            <div class="container">
				                <div class="row">
				                    <div class="col-lg-12">
				                        <div class="row">
				                            <div class="col-lg-5 col-md-12 col-sm-12 protago-item">
				                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
				                                    <img class="img-fluid img-responsive" src="img/protagonistas/protagonisatas-1.jpg" alt="Protagonistas" title="Protagonistas">
				                                </a>
				                            </div>
				                            <div class="col-lg-5 col-md-12 col-sm-12 protago-items protago-items-margin">
				                                <p class="date"><?php echo esc_html( $post->post_date ); ?></p>
				                                <a href="<?php echo esc_url( get_permalink() ); ?>" class="title-note link"><?php echo esc_html( $post->post_title );?></a>
				                                <p class="text-note"><?php echo esc_html( $post->post_excerpt ); ?></p>
				                                <a href="protagonistas-interna.html" class="btn btn-primary hvr-float-shadow">Leer más</a>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </section>

<?php }	elseif ( 2 === $i ){ ?>

						 <section class="protagonistas-mas animated fadeIn">
					            <div class="container">
					                <div class="row">
					                    <div class="col-lg-4 col-md-6 col-sm-12 protagonistas-item">
					                        <a class="portfolio-link" data-toggle="modal" href="<?php echo esc_url( $post->post_permalink ); ?>">
					                            <img class="img-fluid img-responsive" src="<?php echo get_the_post_thumbnail_url($post->post_ID); ?>">
					                        </a>
					                        <p class="date-projects"><?php echo esc_html( $post->post_date ); ?></p>
					                        <p class="title-note"><?php echo esc_html( $post->post_title ); ?></p>
					                        <p class="text-note"><?php echo esc_html( $post->post_excerpt ); ?></p>
					                        <button type="button" class="btn btn-primary hvr-float-shadow">Leer más</button>
					                    </div>
             
<?php  } else   { ?>
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
	} 	
						$x=$i-1;
						if  (  x != 0 && 0 === $x % 3 ){ ?>
							</div>
						<div class="row">

<?php					}	
	
	$i++;

	endwhile;	?>

				 
       		 </div>
   	 	 </section>	

<?php	else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
   
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
