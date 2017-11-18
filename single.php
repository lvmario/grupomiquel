<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package grupomiquel
 */

get_header(); 

?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			  <!-- Red -->
	        <section class="red"></section>
        

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			$categoria = get_the_category($post->ID);
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->	
	</div><!-- #primary -->
   <hr>
   <!-- Articulos Relacionados-->
<?php 

	$articulos_relacionados=grupomiquel_get_related_articles(	array(
		'cat' => $categoria[0]->term_id,
		));
?>

            <section class="protagonistas-mas animated fadeIn">
            <div class="container">
                <div class="row">
         <?php foreach ($articulos_relacionados as $article ){      ?>	
                    <div class="col-lg-4 col-md-6 col-sm-12 protagonistas-item">
                        <a class="portfolio-link" data-toggle="modal" href="<?php echo esc_url( $article->permalink ); ?>">
                            <img class="img-fluid img-responsive" src='<?php echo get_the_post_thumbnail_url($article->ID); ?>'>
                        </a>
                        <p class="date-projects"><?php echo esc_html( $article->date ); ?></p>
                        <p class="title-note"><?php echo esc_html( $article->title ); ?></p>
                        <p class="text-note"><?php echo esc_html( $article->excerpt ); ?></p>
                        <button type="button" class="btn btn-primary hvr-float-shadow">Leer más</button>
                    </div>
        <?php     }    ?>
                </div>
            </div>
       	  </section>
 <?php 
get_footer();
