<?php
/**
 * The template for displaying Work page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EATI
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main news-main" role="main">
			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'template-parts/content', 'hero' ); ?>
			<?php endwhile; ?>

			<section class="news-posts inner">
				<?php 
					$args = array(
						'post_type' => 'news_posts',
					);

					$the_query = new WP_Query( $args );

					while( $the_query->have_posts() ) : $the_query->the_post();
				?>

				<div class="news-post">
					<div class="news-date-container"><?php echo strtoupper(get_the_date()); ?></div>

					<div>
						<h2><?php the_field('title'); ?></h2>
						<div class="news-content">
							<p><?php the_field('content'); ?></p>
						</div>
						<div class="expand-collapse-button">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/expand-arrow.jpg">
						</div>
					</div>
				</div>


				<?php endwhile; wp_reset_query(); ?>
				<div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
