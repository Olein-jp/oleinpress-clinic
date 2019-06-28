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

	<header id="masthead" class="l-site-header p-site-header">
			<div class="p-site-branding">
				<div class="c-container">
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
				</div>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="p-main-navigation">
				<button class="p-hamburger-button hamburger hamburger--collapse" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
				<div class="c-container">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'global-menu',
						'menu_id'        => 'global-menu',
						'menu_class'     => 'p-global-menu is-active',
						'container'      => '',
						'depth'          => '3',
					) );
					?>
				</div>
			</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="p-slider">
		<div class="c-container p-slider__inner">
			<div class="p-slider-body">
				<div class="p-slider-item">
					<img class="p-slider-item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-sample-01.jpg" alt="">
					<div class="p-slider-item__text-box">
						<h2 class="p-slider-item__title">タイトルが設定できます</h2>
						<p class="p-slider-item__desc">テキストを入れることができます。テキストを入れることができます。テキストを入れることができます。テキストを入れることができます。テキストを入れることができます。</p>
						<div class="p-slider-item__button-area">
							<a href="#" class="c-button c-button_radius p-slider-item__button">ボタンテキスト</a>
						</div>
					</div>
				</div>
				<div class="p-slider-item">
					<img class="p-slider-item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-sample-02.jpg" alt="">
					<div class="p-slider-item__text-box">
						<h2 class="p-slider-item__title">タイトルが設定できます。長くなっても大丈夫かな？</h2>
						<p class="p-slider-item__desc">テキストを入れることができます。テキストを入れることができます。テキストを入れることができます。テキストを入れることができます。テキストを入れることができます。</p>
						<div class="p-slider-item__button-area">
							<a href="#" class="c-button c-button_radius p-slider-item__button">ボタンテキストが長くなるとこう</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="content" class="p-site-content">
