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

			<section class="inner">
				<div class="about">
					<div>
						<h2 class="brush-bg">EATI</h2>
						<p><?php the_field('about'); ?></p>
						<a href="" class="link-button">LEARN MORE</a>
					</div>	
					<div><?php echo wp_get_attachment_image( get_field('about-image-1'), 'full'); ?></div>
					<div><?php echo wp_get_attachment_image( get_field('about-image-2'), 'full'); ?></div>
					<div><?php echo wp_get_attachment_image( get_field('about-image-3'), 'full'); ?></div>					
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
