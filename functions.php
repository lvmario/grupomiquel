<?php
/**
 * grupomiquel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package grupomiquel
 */

if ( ! function_exists( 'grupomiquel_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function grupomiquel_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on grupomiquel, use a find and replace
		 * to change 'grupomiquel' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'grupomiquel', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'grupomiquel' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'grupomiquel_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'grupomiquel_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function grupomiquel_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'grupomiquel_content_width', 640 );
}
add_action( 'after_setup_theme', 'grupomiquel_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function grupomiquel_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'grupomiquel' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'grupomiquel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'grupomiquel_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function grupomiquel_scripts() {

	wp_enqueue_script('jQuery' ,'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
	wp_enqueue_script( 'grupomiquel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'grupomiquel-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css' );
	//wp_enqueue_style( 'bootstrap-reset', get_template_directory_uri().'/assets/css/bootstrap-reset.min.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/fonts/fontawesome/css/font-awesome.min.css', array(), '3.0.3' );
	
	wp_enqueue_script( 'jquery-cookies', get_template_directory_uri().'/assets/javascript/jquery.cookie/jquery.cookie.js', 'jquery', '1.0', false );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', 'jquery', '1.0', false );	
	wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:100,400,700', false ); 
	wp_enqueue_style( 'kaushan', 'https://fonts.googleapis.com/css?family=Kaushan+Script', false ); 
	wp_enqueue_style( 'droid-serif', 'https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic', false ); 
	wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700', false ); 
	wp_enqueue_style( 'grupomiquel-style', get_template_directory_uri(). '/assets/css/miquel.min.css');
	wp_enqueue_style( 'grupomiquel-style2', get_template_directory_uri(). '/assets/css/miquel-.css');
	wp_enqueue_style( 'grupomiquel-style3', get_template_directory_uri(). '/assets/css/hover-min.css');
	wp_enqueue_style( 'grupomiquel-style4', get_template_directory_uri(). '/assets/css/animate.min.css');
}
add_action( 'wp_enqueue_scripts', 'grupomiquel_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
function grupomiquel_console( $array ) {
	print '<pre>';
	print_r( $array );
	print '</pre>';
}

function grupomiquel_get_related_articles( $options = array() ) {
	$i = 1;
	$position = 0;
	$related_articles = array();
	$posts_per_page = 3;

	$args = array(
		'post_status' => 'publish',
		'posts_per_page' => $posts_per_page,
		'cat' => $options['cat'],
		'paged' => $options['paged'],
		'suppress_filters' => false,
	);

	$cache_key = md5( serialize( $args ) );
	$the_query = wp_cache_get( $cache_key, 'related_articles' );
	if ( false === $the_query ) {
		$the_query = new WP_Query( $args );
		wp_cache_set( $cache_key, $the_query, 'related_articles', MINUTE_IN_SECONDS * 30 );
	}

	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			$article = new stdClass();		

			if ( is_array( $options['exclude'] ) && in_array( $the_query->post->ID, $options['exclude'] ) ) {
	        	continue;
	    	}
	    	$article->ID=$the_query->post->ID;
			$article->title = $the_query->post->post_title;
			$article->date = $the_query->post->post_date;
			$article->permalink = get_permalink();
			$article->excerpt = get_the_excerpt();
			$related_articles[] = $article;
			$position++;
		endwhile;
		wp_reset_postdata();
	}

	return $related_articles;

}
//Añadir soporte para svg
function add_svg_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'add_svg_mime_types');

function admin_custom_css() {
    echo "<style>table.media .column-title .media-icon img[src*='.svg']{
        width: 100%;
        height: auto;
    }</style>";
}

add_action( 'admin_head', 'admin_custom_css' );

function add_custom_boxes(){
	global $post;
	$categories = get_the_category($post);
	$category = wp_list_pluck($categories, 'slug');

			add_meta_box(
				'rol_promocionado',
				'Extra Info',
				'info_promocionado',
				'post',
				'side',
				'high'
			);
		

	} 
add_action( 'admin_init', 'add_custom_boxes' );

function info_promocionado(){
	global $post;
	$rol_promocionado = get_post_meta( $post->ID, 'rol_promocionado', $single = true );

?>
	<span><b>Rol</b></span><span style="font-size:80%;">-solo para Promocionados</span>
	<input type="text" name="rol_promocionado" value="<?php echo esc_attr( $rol_promocionado ); ?>" style="width:100%;" />

<?php }


function save_postdata(){
	global $post;
if ( isset( $_POST['post_type'] ) && 'post' === $_POST[ 'post_type' ] )  {
		// Remove Action to prevent recursivity
		remove_action( 'save_post', 'save_postdata' );

		if( isset( $_POST["rol_promocionado"] ) && $_POST["rol_promocionado"] != '' ) :
			update_post_meta($post->ID, "rol_promocionado", sanitize_text_field( $_POST["rol_promocionado"] ) );
		else:
			delete_metadata( 'post', $post->ID, 'rol_promocionado' );
		endif;
	}
	add_action( 'save_post', 'save_postdata' );
}
add_action( 'save_post', 'save_postdata' );



function gp_post_date( $today ) {
	return gp_translate_month( $today );
}

function gp_translate_month( $month ) {
	$englishMonths = array(
		'January',
		'February',
		'March',
		'April',
		'May',
		'June',
		'July',
		'August',
		'September',
		'October',
		'November',
		'December',
	 );
	$spanishMonths = array(
		'de Enero de',
		'de Febrero de',
		'de Marzo de',
		'de Abril de',
		'de Mayo de',
		'de Junio de',
		'de Julio de',
		'de Agosto de',
		'de Septiembre de',
		'de Octubre de',
		'de Noviembre de',
		'de Diciembre de',
	 );

	$month = str_replace( $englishMonths, $spanishMonths, $month );

	return $month;
}