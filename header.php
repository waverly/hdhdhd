<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HD2017
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hd2017' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'hd2017' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
			<div id="logo-wrap">
				<div id="logo">
				<img src="/wp-content/uploads/2016/12/hd-logo_black.jpg" alt="HD">
				</div>
				<div id="about-paragraph">
					<p>HD is a DJ and producer of sound, videos, art and events.She co-founded and runs independent label <span id="Doom-Dab-link">Doom Dab</span>. She manages vocalists Jay Boogie, Rahel & Thurmon Green.</p>
				</div>
			</div>
			<?php else : ?>
				<div id="logo-small">
					<img src="http://localhost:8888/wordpress/wp-content/uploads/2016/12/hd-logo_black.jpg" alt="HD">
				</div>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<!-- <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p> -->
			<?php
			endif; ?>
		</div><!-- .site-branding -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
