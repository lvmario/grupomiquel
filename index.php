<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grupomiquel
 */

get_header(); 

$promocionados_lista = array();
$valores_miquel_lista = array();
$nuestros_proyectos_lista = array();
$plan_de_formacion_lista = array();
$numero_promocionados=1;
$numero_valores_miquel=1;
$numero_nuestros_proyectos=1;
global $post;
		
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/*Guardo los posts de cada categoría en un array distinto*/
			while ( have_posts() ) : the_post();

				if ( in_category( 'promocionados' ) && $numero_promocionados < 4){
					array_push( $promocionados_lista, $post );	
					$numero_promocionados++;
				}
				elseif 	( in_category( 'valores-miquel' ) && $numero_valores_miquel < 4){
					array_push( $valores_miquel_lista, $post );	
					$numero_valores_miquel++;
				}
				elseif 	( in_category( 'nuestros-proyectos' ) && $numero_nuestros_proyectos < 4){
					array_push( $nuestros_proyectos_lista, $post );
					$numero_nuestros_proyectos++;
				}
				elseif 	( in_category( 'proyecto-de-formacion' ) ){
					array_push( $plan_de_formacion_lista, $post );
				}

			endwhile;
				/*	grupomiquel_console($promocionados_lista); 
					grupomiquel_console($valores_miquel_lista); 
					grupomiquel_console($nuestros_proyectos_lista); */
		

			/* Sección Promocionados */
		
?>
						<section id="promocionados" class="post">
				            <div class="container container- animated fadeInUp">
				                <div class="row row-titles">
				                    <div class="col-lg-12 text-center">
				                        <h2 class="section-heading">¡Los promocionados!</h2>
				                    </div>
				                    <div class="col-lg-9 text-center">
				                        <img class="img-responsive text-center" src='<?php echo esc_url(get_template_directory_uri())."/img/linea.png"; ?>'>
				                    </div>
				                </div>
				                <div class="row text-center promocionados">

				          <?php    foreach ($promocionados_lista as $article) {
				          ?>	
				                    <div class="col-md-4">
				                        <img src='<?php echo get_the_post_thumbnail_url($article->ID); ?>' class="profile img-responsive" alt="Promocionado" title="Promocionado">
				                        <h4 class="service-heading"><?php echo esc_html( $article->post_title ); ?></h4>
				                        <p class="sector"><?php //get_post_meta( $post->ID, 'horoscopo_work', $single = true ); ?></p>
				                        <span class="line2">-</span>
				                        <p class="text-muted"><?php echo esc_html( $article->post_excerpt ); ?></p>
				                        <button type="button" class="btn btn-primary hvr-float-shadow">Leer más</button>
				                    </div>

				          <?php   }  	?> 

							    </div>
				            </div>
				        </section>
	

				 <!-- Sección Valores Miquel--> 
			
				        <section id="portfolio" class="bg-light post">
				            <div class="container">
				                <div class="row row-titles">
				                    <div class="col-lg-12 text-center">
				                        <h2 class="section-heading">Valores Miquel</h2>
				                    </div>
				                    <div class="col-lg-9 text-center">
				                        <img class="img-responsive text-center" src='<?php echo esc_url(get_template_directory_uri())."/img/linea.png"; ?>'>
				                    </div>
				                </div>
				                <div class="row">
				                    <div class="col-lg-7 col-sm-12">
				                        <div class="row">
				                            <div class="col-md-6 col-sm-12 portfolio-item">
				                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
				                                    <div class="portfolio-hover">
				                                        <div class="portfolio-hover-content">
				                                            <i class="fa fa-plus fa-1x"></i>
				                                        </div>
				                                    </div>
				                                    <img class="img-fluid" src='<?php echo get_the_post_thumbnail_url($valores_miquel_lista[0]->ID); ?>' alt="Valores Miquel" title="Valores Miquel">
				                                </a>
				                            </div>
				                            <div class="col-md-6 col-sm-12 portfolio-item">
				                                <p class="date"><?php echo esc_html( $valores_miquel_lista[0]->post_date ); ?></p>
				                                <p class="title-note"><span class="cien"><?php echo esc_html( $valores_miquel_lista[0]->post_title ); ?></p>
				                                <p class="text-note"><?php echo esc_html( $valores_miquel_lista[0]->post_excerpt); ?></p>
				                                <button type="button" class="btn btn-primary hvr-float-shadow">Leer más</button>
				                            </div>
				                        </div>
				                    </div>
				                    <div class="col-lg-4 col-sm-12">
				                        <div class="row">
				                            <div class="col-md-6 col-sm-12 portfolio-item">
				                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
				                                    <div class="portfolio-hover">
				                                        <div class="portfolio-hover-content">
				                                            <i class="fa fa-plus fa-1x"></i>
				                                        </div>
				                                    </div>
				                                    <img class="img-fluid" src='<?php echo get_the_post_thumbnail_url($valores_miquel_lista[1]->ID); ?>' alt="Valores Miquel" title="Valores Miquel">
				                                </a>
				                            </div>
				                            <div class="col-md-6 col-sm-12 portfolio-item">
				                                <p class="date-small"><?php echo esc_html( $valores_miquel_lista[1]->post_date ); ?></p>
				                                <p class="title-note-small"><span class="cien"><?php echo esc_html( $valores_miquel_lista[1]->post_title ); ?></p>
				                                <button type="button" class="btn btn-primary btn-primary-small hvr-float-shadow">Leer más</button>
				                            </div>
				                        </div>
				                        <div class="row">
				                            <div class="col-md-6 col-sm-12 portfolio-item">
				                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
				                                    <div class="portfolio-hover">
				                                        <div class="portfolio-hover-content">
				                                            <i class="fa fa-plus fa-1x"></i>
				                                        </div>
				                                    </div>
				                                    <img class="img-fluid" src='<?php echo get_the_post_thumbnail_url($valores_miquel_lista[2]->ID);?>' alt="Valores Miquel" title="Valores Miquel">
				                                </a>
				                            </div>
				                            <div class="col-md-6 col-sm-12 portfolio-item">
				                               	<p class="date-small"><?php echo esc_html( $valores_miquel_lista[2]->post_date ); ?></p>
				                                <p class="title-note-small"><span class="cien"><?php echo esc_html( $valores_miquel_lista[2]->post_title ); ?></p>
				                                <button type="button" class="btn btn-primary btn-primary-small hvr-float-shadow">Leer más</button>
				                            </div>
				                        </div>
				                        
				                    </div>
				                </div>
				            </div>
				        </section> -->


			  <!-- Sección Nuestros Proyectos -->
				        <section id="portfolio">
				            <div class="container">
				                <div class="row row-titles">
				                    <div class="col-lg-12 text-center">
				                        <h2 class="section-heading">Nuestros Proyectos</h2>
				                    </div>
				                    <div class="col-lg-9 text-center">
				                        <img class="img-responsive text-center" src='<?php echo esc_url(get_template_directory_uri())."/img/linea.png"; ?>'>
				                    </div>
				                </div>
				                <div class="row">
				    <?php    foreach ($nuestros_proyectos_lista as $article) {
				          ?>	
				                    <div class="col-md-4 col-sm-12 portfolio-item portmargin">
				                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
				                            <div class="portfolio-hover">
				                                <div class="portfolio-hover-content">
				                                    <i class="fa fa-plus fa-3x"></i>
				                                </div>
				                            </div>
				                            <img class="img-fluid img-responsive" src='<?php echo get_the_post_thumbnail_url($article->ID); ?>' alt="Nuestros Proyectos" title="Nuestros Proyectos">
				                        </a>
				                        <p class="date-projects"><?php echo esc_html( $article->post_date ); ?></p>
				                        <p class="title-note"><?php echo esc_html( $article->post_title ); ?></p>
				                        <p class="text-note"><?php echo esc_html( $article->post_excerpt ); ?></p>
				                        <button type="button" class="btn btn-primary hvr-float-shadow">Leer más</button>
				                    </div>
						<?php }  ?>

								</div>
				            </div>
				        </section>


	     <!-- Sección Plan de Formación -->
        
        <section id="portfolio" class="formacion">
            
            <div class="container">
                <div class="row row-titles-formacion">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Plan de Formación</h2>
                    </div>
                    <div class="col-lg-11 text-center">
                        <img class="img-responsive text-center" src='<?php echo esc_url(get_template_directory_uri())."/img/linea.png"; ?>'>
                    </div>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
         <?php    foreach ($plan_de_formacion_lista as $article) {
         ?>		
                    <div class="carousel-item active">
                        <div class="col-lg-12">
                            <div class="row row-formacion">
                                <div class="col-lg-6 col-md-12 col-sm-12 portfolio-item">
                                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i class="fa fa-plus fa-1x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src='<?php echo get_the_post_thumbnail_url($article->ID); ?>' alt="Formacion" title="Formacion">
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 portfolio-item formacion-item">
                                    <p class="date"><?php echo esc_html( $article->post_date ); ?></p>
                                    <p class="title-note"><?php echo esc_html( $article->post_title ); ?></p>
                                    <button type="button" class="btn btn-primary hvr-float-shadow">Leer más</button>
                                </div>
                            </div>
                        </div>
                    </div>
		<?php }  ?>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </section>   
		<?php		        
			//the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
