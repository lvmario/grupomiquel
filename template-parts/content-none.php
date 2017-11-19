<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grupomiquel
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'grupomiquel' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php
				printf(
					wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'grupomiquel' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
			?></p>

		<?php elseif ( is_search() ) : ?>

			    <!-- 404 -->
        <section class="error">
            <div class="container">
                <div class="row row-titles">
                    <div class="col-lg-12 text-center">
                        <i class="fa fa-flash fa-3x"></i>
                        <h2 class="section-heading">Ups! No hemos encontrado la página que buscas.</h2>
                        <p>La página a la cual deseas acceder no existe o tiene un problema.</p>
                    </div>
                    <div class="col-lg-3 text-center">
                        <img class="img-responsive text-center" src="img/linea.png">
                    </div>
                </div>
            </div>
        </section>  
			<?php
				get_search_form();

		else : ?>

			    <!-- 404 -->
        <section class="error">
            <div class="container">
                <div class="row row-titles">
                    <div class="col-lg-12 text-center">
                        <i class="fa fa-flash fa-3x"></i>
                        <h2 class="section-heading">Ups! No hemos encontrado la página que buscas.</h2>
                        <p>La página a la cual deseas acceder no existe o tiene un problema.</p>
                    </div>
                    <div class="col-lg-3 text-center">
                        <img class="img-responsive text-center" src="img/linea.png">
                    </div>
                </div>
            </div>
        </section>  
        
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
