<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grupomiquel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<header id="masthead" class="site-header">
		<div class="site-branding">
		    <div class="container">
            <div class="social">
                <span class="lupa"></span>
                    <?php get_search_form();?>
                <a class="hvr-float-shadow"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a class="hvr-float-shadow"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a class="hvr-float-shadow"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
        </div>
		</div><!-- .site-branding -->

	   <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri().'/img/somos-miquel.png');?>" alt="Somos Miquel" title="Somos Miquel" class="img-responsive"></a>
                <button class="navbar-toggler navbar-toggler-bottom" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu
                <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link hvr-float js-scroll-trigger" href="/categoria/promocionados">PROTAGONISTAS</a>
                        </li>
                        <li class="separador">|</li>
                        <li class="nav-item">
                            <a class="nav-link hvr-float js-scroll-trigger" href="categoria/valores-miquel">VALORES</a>
                        </li>
                        <li class="separador">|</li>
                        <li class="nav-item">
                            <a class="nav-link hvr-float js-scroll-trigger crece" href="categoria/crece-con-miquel">CRECE CON MIQUEL</a>
                        </li>
                        <li class="separador">|</li>
                        <li class="nav-item">
                            <a class="nav-link hvr-float js-scroll-trigger" href="categoria/nuestros-proyectos">INICIATIVAS</a>
                        </li>
                        <li class="separador">|</li>
                        <li class="nav-item">
                            <a class="nav-link hvr-float js-scroll-trigger" href="categoria/plan-de-formacion">FORMACIÓN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
