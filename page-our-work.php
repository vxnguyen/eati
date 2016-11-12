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
		<main id="main" class="site-main our-work-main" role="main">
			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'template-parts/content', 'hero' ); ?>
			<?php endwhile; ?>
			
			<div class="our-work-content inner">
				<nav class="tabbed-navigation">
					<ul>
						<li><span>ETHIOPIA</span></li>
						<li><span>MISSION</span></li>
						<li><span>PROGRAM</span></li>
					</ul>
				</nav>

				<div class="tabbed-content">
					<section class="ethiopia-content col animated fadeIn">
						<div>
							<h2 class="brush-bg">ETHIOPIA</h2>
							<aside><?php the_field('ethiopia-aside'); ?></aside>
							<p><?php the_field('ethiopia-content'); ?></p>
						</div>
						<div>
							<?php echo wp_get_attachment_image( get_field('ethiopia-image'), 'full'); ?>
						</div>
					</section>

					<section class="mission-content animated fadeIn">
						<h2 class="brush-bg">MISSION</h2>
						<div class="col">
							<div>
								<h3>EATI'S GOALS</h3>
								<?php the_field('mission-goals'); ?>
							</div>
							<div>
								<aside><?php the_field('mission-aside'); ?></aside>
							</div>
						</div>
						<div>
							<p><?php the_field('mission-content'); ?></p>
							<?php echo wp_get_attachment_image( get_field('mission-image'), 'full'); ?>
						</div>
					</section>

					<section class="program-content col animated fadeIn">
						<div>
							<h2 class="brush-bg">PROGRAM</h2>
							<aside><?php the_field('program-aside'); ?></aside>
							<p><?php the_field('program-content-1'); ?></p>
							<?php echo wp_get_attachment_image( get_field('program-image-1'), 'full'); ?>
						</div>
						<div>
							<?php echo wp_get_attachment_image( get_field('program-image-2'), 'full'); ?>
							<p><?php the_field('program-content-2'); ?></p>
						</div>
					</section>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
