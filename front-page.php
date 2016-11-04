<?php
/**
 * The template for displaying the front page.
 *
 * @package EATI
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'template-parts/content', 'hero' ); ?>
			<?php endwhile; ?>

			<section class="about">
				<div>
					<h2>EATI</h2>
					<p><?php the_field('about'); ?></p>
				</div>
				<div><?php echo wp_get_attachment_image( get_field('about-image1'), 'full') ); ?></div>
				<div><?php echo wp_get_attachment_image( get_field('about-image2'), 'full') ); ?></div>
				<div><?php echo wp_get_attachment_image( get_field('about-image3'), 'full') ); ?></div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
