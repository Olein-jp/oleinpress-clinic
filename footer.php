<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oleinpress-clinic
 */

?>

	</div><!-- #content -->

	<section class="p-map">
		<iframe
				src="https://maps.google.co.jp/maps?output=embed&q=岐阜県岐阜市今沢町18&z=16"
				width="100%"
				height="auto"
				frameborder="0"
				style="border:0"
				allowfullscreen
		>
		</iframe>
	</section>

	<footer id="colophon" class="l-site-footer p-site-footer">
		<div class="p-footer-information c-container">
			<div class="p-footer-information__left">
				<h3 class="p-footer-information__title"><?php echo bloginfo( ' name' ); ?></h3>
				<p class="p-footer-information__desc"><?php echo bloginfo( 'description' ); ?></p>
				<?php get_template_part( 'templates/clinic-info' ); ?>
			</div>
			<div class="p-footer-information__right">
				<?php get_template_part( 'templates/open-table' ); ?>
			</div>
		</div>

		<div class="p-copyright">
				<?php
				$blog_name = get_bloginfo( 'name' );
				printf( esc_html__( '%s allrights reserved.', 'opclinic' ), $blog_name );
				?>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'opclinic' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'opclinic' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( '%1$s producted by %2$s.', 'opclinic' ), 'OleinPress Clinic', '<a href="https://olein-design.com">Olein Design</a>' );
			?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
