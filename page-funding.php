<?php
/**
 * The template for displaying all pages.
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
		<main id="main" class="site-main funding-main" role="main">
			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'template-parts/content', 'hero' ); ?>
			<?php endwhile; ?>

			<section class="fund-allocation inner">
				<h2 class="brush-bg">FUND ALLOCATON</h2>
				<p>Funding from Vital Strategies and online donations will cover the following:</p>

				<div>
					<div>
						<h4>TEAM EATI</h4>
						<?php the_field('fund-allocation-eati'); ?>
						<h4>TEAM ETHIOPIA</h4>
						<?php the_field('fund-allocation-ethiopia'); ?>
					</div>
					<div>
						<?php echo wp_get_attachment_image( get_field('fund-allocation-image'), 'full'); ?>
					</div>
				</div>
			</section>

			<section class="sources inner">
				<h2 class="brush-bg">SOURCES</h2>
				<h4>PAST AND PRESENT</h4>
				<p><?php the_field('sources-past-present'); ?></p>
				<h4>FUTURE</h4>
				<p><?php the_field('sources-future'); ?></p>
				<p class="footnote"><?php the_field('footnote'); ?></p>
			</section>

			<section class="fundraisers-donations inner">
				<div>
					<div><?php echo wp_get_attachment_image( get_field('fundraisers-donations-image'), 'full'); ?></div>
					<div>
						<h2 class="brush-bg">FUNDRAISERS AND DONATIONS</h2>
						<?php the_field('fundraisers-donations-content'); ?>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
