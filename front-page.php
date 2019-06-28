<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oleinpress-clinic
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<article class="p-information c-container">
				<section class="p-news c-block-body">
					<header class="c-block-header">
						<h2 class="c-block-title">お知らせ</h2>
					</header>
					<div class="c-block-content">
						<ul class="p-news-list">
							<?php
							$args = array(
									'post_type' => 'news',
									'posts_per_page' => 5,
							);
							$the_query = new WP_Query( $args );
							?>
							<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<li class="p-news-list__item">
								<time class="p-news-list__item-date" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
								<?php the_title( '<span class="p-news-list__item-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></span>' ); ?>
							</li>
							<?php endwhile; endif; wp_reset_postdata(); ?>
						</ul>
					</div>
				</section>
				<section class="p-clinic-info">
					<h2 class="p-clinic-info__copy">キャチコピーなんかを入れてもらって、ちょっとしたアピールなんかも良いんじゃないでしょうか</h2>
					<?php get_template_part( 'templates/clinic-info' ); ?>
					<div class="p-clinic-info-button-area">
						<a href="#" class="p-clinic-info-button">ウェブ予約はこちら</a>
					</div>
					<?php get_template_part( 'templates/open-table' ); ?>
				</section>
			</article>

			<article class="p-pr-blocks c-container">
				<header class="c-section-header">
					<h2 class="c-section-header__title">当院の特徴</h2>
				</header>
				<div class="p-pr-blocks__wrap p-pr-blocks__wrap_3col">
					<section class="c-pr-block">
						<figure class="c-pr-block__figure">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-sample-01.jpg" alt="" class="c-pr-block__image">
						</figure>
						<h3 class="c-pr-block__title">タイトルを入れるよ</h3>
						<p class="c-pr-block__desc">テキストをよしなに入れます。テキストをよしなに入れます。テキストをよしなに入れます。テキストをよしなに入れます。</p>
						<div class="c-pr-block__button-area">
							<a href="#" class="c-button">リンクを設置できる</a>
						</div>
					</section>
					<section class="c-pr-block">
						<figure class="c-pr-block__figure">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-sample-01.jpg" alt="" class="c-pr-block__image">
						</figure>
						<h3 class="c-pr-block__title">タイトルを入れるよ</h3>
						<p class="c-pr-block__desc">テキストをよしなに入れます。テキストをよしなに入れます。テキストをよしなに入れます。テキストをよしなに入れます。</p>
						<div class="c-pr-block__button-area">
							<a href="#" class="c-button">リンクを設置できる</a>
						</div>
					</section>
					<section class="c-pr-block">
						<figure class="c-pr-block__figure">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-sample-01.jpg" alt="" class="c-pr-block__image">
						</figure>
						<h3 class="c-pr-block__title">タイトルを入れるよ</h3>
						<p class="c-pr-block__desc">テキストをよしなに入れます。テキストをよしなに入れます。テキストをよしなに入れます。テキストをよしなに入れます。</p>
						<div class="c-pr-block__button-area">
							<a href="#" class="c-button">リンクを設置できる</a>
						</div>
					</section>
				</div>
			</article>


			<article class="p-pr-rows">
				<header class="c-section-header">
					<h2 class="c-section-header__title">PRブロックスのタイトルを設定できます。</h2>
				</header>
				<section class="c-pr-row c-pr-row_left-image c-container">
					<div class="c-pr-row__wrap">
						<figure class="c-pr-row__figure">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-sample-01.jpg" alt="" class="c-pr-row__image">
						</figure>
						<div class="c-pr-row__content">
							<h3 class="c-pr-row__title">PRコンテンツのタイトルを入れます。</h3>
							<p class="c-pr-row__desc">PRコンテンツを説明するテキストを入れます。PRコンテンツを説明するテキストを入れます。PRコンテンツを説明するテキストを入れます。PRコンテンツを説明するテキストを入れます。PRコンテンツを説明するテキストを入れます。PRコンテンツを説明するテキストを入れます。</p>
							<p class="c-pr-row__button-area">
								<a href="#" class="c-pr-row__button">詳しくはこちら的な何か</a>
							</p>
						</div>
					</div>
				</section>

				<section class="c-pr-row c-pr-row_right-image c-container">
					<div class="c-pr-row__wrap">
						<figure class="c-pr-row__figure">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-sample-01.jpg" alt="" class="c-pr-row__image">
						</figure>
						<div class="c-pr-row__content">
							<h3 class="c-pr-row__title">PRコンテンツのタイトルを入れます。</h3>
							<p class="c-pr-row__desc">PRコンテンツを説明するテキストを入れます。PRコンテンツを説明するテキストを入れます。PRコンテンツを説明するテキストを入れます。PRコンテンツを説明するテキストを入れます。PRコンテンツを説明するテキストを入れます。PRコンテンツを説明するテキストを入れます。</p>
							<p class="c-pr-row__button-area">
								<a href="#" class="c-pr-row__button">詳しくはこちら的な何か</a>
							</p>
						</div>
					</div>
				</section>

				<section class="c-pr-row c-pr-row_left-image c-container">
					<div class="c-pr-row__wrap">
						<figure class="c-pr-row__figure">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-sample-01.jpg" alt="" class="c-pr-row__image">
						</figure>
						<div class="c-pr-row__content">
							<h3 class="c-pr-row__title">PRコンテンツのタイトルを入れます。</h3>
							<p class="c-pr-row__desc">PRコンテンツを説明するテキストを入れます。PRコンテンツを説明するテキストを入れます。PRコンテンツを説明するテキストを入れます。PRコンテンツを説明するテキストを入れます。PRコンテンツを説明するテキストを入れます。PRコンテンツを説明するテキストを入れます。</p>
							<p class="c-pr-row__button-area">
								<a href="#" class="c-pr-row__button">詳しくはこちら的な何か</a>
							</p>
						</div>
					</div>
				</section>
			</article>

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'c-container' ); ?>>
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->

			</article>
		<?php endwhile; // End of the loop.
		?>
			<section class="p-blog c-container">
				<header class="c-section-header">
					<h2 class="c-section-header__title">ブログ</h2>
				</header>
				<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 6,
					'ignore_sticky_posts' => true,
				);
				$the_query = new WP_Query( $args );
				?>
				<ul class="c-post-list">
				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<li class="c-post-list__item">
						<a href="<?php the_permalink(); ?>">
							<figure class="c-post-list__figure">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-sample-01.jpg" alt="" class="c-post-list__image">
							</figure>
							<div class="c-post-list__content">
								<ul class="c-post-list__meta">
									<li class="c-post-list__meta-item date"><i class="far fa-clock"></i> 2018.11.12</li>
									<li class="c-post-list__meta-item cat"><i class="far fa-folder"></i> カテゴリー</li>
								</ul>
								<h3 class="c-post-list__title"><?php the_title(); ?></h3>
							</div>
						</a>
					</li>

				<?php endwhile; endif; wp_reset_postdata(); ?>
				</ul>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
