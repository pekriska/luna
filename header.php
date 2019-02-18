<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Luna
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'luna' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding wrapp">
			<div class="site-header-bags"></div>
			<div class="site-header-logo">
				<?php the_custom_logo();?>
			</div>

			<button class="hamburger hamburger--slider menu-toggle" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
		
			<div class="site-header-primary-nav wrapp">
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class' => 'menu-items',
					) );
					?>					
				</nav><!-- #site-navigation -->
			</div>
		</div><!-- .site-branding -->
		
	</header><!-- #masthead -->
	<?php
	if ( is_front_page() ) :
		echo '<div class="placeholder wrapper">';
		echo do_shortcode( '[slider id="348"]' );
		echo '</div>';
	endif;
		?>
<!-- <div class="placeholder wrapper">
	sem pojde placeholder
</div> -->
	<div id="content" class="site-content">
