<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package EATI
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="our-team-single-header">
			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'template-parts/content', 'no-hero-header' ); ?>
			<?php endwhile; ?>

			<div class="inner">
				<h4 class="our-team-secondary-title">Medical School: <span><?php the_field('medical-school'); ?></span></h4>
				<h4 class="our-team-secondary-title">Residency: <span><?php the_field('residency'); ?></span></h4>
			</div>
		</section>

		<section class="inner our-team-single-bio">
			<div>
				<?php echo wp_get_attachment_image( get_field('headshot'), 'full'); ?>
			</div>
			<div>
				<p><?php the_field('bio'); ?></p>
			</div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
