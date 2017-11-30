<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grupomiquel
 */
$categoria = get_the_category($post->ID);
$categoria_url = get_category_link ($categoria->term_id);
//grupomiquel_console($categoria); 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<section>
            <div class="container animated fadeIn">
                <div class="row">
                    <div class="col-lg-12 text-center nuestros-protagonistas">    	
                     <h2 class="section-heading"> <?php echo esc_html( $categoria[0]->name ); ?></h2><?php
                        /*	if ( is_singular() ) :
								the_title( '<h2 class="section-heading">', '</h2>' );
							else :
								the_title( '<h2 class="section-heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
							endif;*/
				?>						
                    </div>
                    <div class="col-lg-9 text-center">
                        <img class="img-responsive text-center line" src='<?php echo esc_url(get_template_directory_uri())."/img/linea.png"; ?>'>
                    </div>
                </div>
            </div>
        </section>

	</header><!-- .entry-header -->

        <section>
        
            <div class="container">
                <div class="row">
                    <div class="col-md-9 note">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href=<?php echo "/categoria/". $categoria->term_id; ?>"> <?php echo esc_html( $categoria[0]->name ); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo esc_html( $post->post_title ); ?></li>
                        </ol>  
                        <p class="date"><?php echo esc_html( date( "d/m/Y", strtotime ( $post->post_date ))); ?></p>
                        <p class="title-note"><?php echo esc_html( $post->post_title ); ?></p>
                       <?php the_content(); ?>
    					
                        <p class="share"><span>Compartir</span> <i class="fa fa-facebook-official" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google" aria-hidden="true"></i><i class="fa fa-envelope" aria-hidden="true"></i>
</p>

     </div>
                </div>
            
            </div>
            
        </section>
</article><!-- #post-<?php the_ID(); ?> -->
