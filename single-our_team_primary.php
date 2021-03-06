<?php
/**
 * The template for displaying single primary team members.
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
				<h4 class="primary-titles"><?php the_field('primary_titles'); ?></h4>
				<h4 class="secondary-titles"><?php the_field('secondary_titles'); ?></h4>
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
