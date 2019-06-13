<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oleinpress-clinic
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'opclinic' ); ?></a>

	<header id="masthead" class="l-site-header">
		<div class="c-container">
			<div class="p-site-branding">
				<?php
				if ( get_custom_logo() ) {
					if ( is_front_page() && is_home() ) :
				?>
				<h1 class="p-site-title"><?php the_custom_logo(); ?></h1>
				<?php else: ?>
				<p class="p-site-title"><?php the_custom_logo(); ?></p>
				<? endif; ?>
				<?php } else {
					if ( ! get_custom_logo() && is_front_page() && is_home() ) :
						?>
						<h1 class="p-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
												  rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					else :
						?>
						<p class="p-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
												 rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif;
				} ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="p-hamburger-button hamburger hamburger--collapse" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'global-menu',
					'menu_id'        => 'global-menu',
					'menu_class'     => 'p-global-menu is-active',
					'container'      => '',
					'depth'          => '3',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
