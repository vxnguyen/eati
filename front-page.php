<?php
/**
 * The template for displaying the front page.
 *
 * @package EATI
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main front-page-main" role="main">
			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'template-parts/content', 'hero' ); ?>
			<?php endwhile; ?>

			<section class="inner">
				<div class="about">
					<div>
						<h2 class="brush-bg">EATI</h2>
						<p><?php the_field('about'); ?></p>
						<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Our Work' ) ) ); ?>" class="link-button">LEARN MORE</a>
					</div>	
					<div><?php echo wp_get_attachment_image( get_field('about-image-1'), 'full'); ?></div>
					<div><?php echo wp_get_attachment_image( get_field('about-image-2'), 'full'); ?></div>
					<div><?php echo wp_get_attachment_image( get_field('about-image-3'), 'full'); ?></div>					
				</div>
			</section>

			<aside class="donate-message-banner">
				<?php echo wp_get_attachment_image( get_field('donate-message-banner'), 'full', '', array( "class" => "objectfit-img" )); ?>
				<div class="inner">
					<div class="top-line animated"><p><?php the_field('top-line'); ?></p></div>
					<div class="bottom-line animated"><p><?php the_field('bottom-line'); ?></p></div>
				</div>
			</aside>

			<section class="sponsor-message inner">
				<div>
					<?php echo wp_get_attachment_image( get_field('sponsor-message-image'), 'full'); ?>
				</div>
				<div>
					<h2 class="brush-bg">FIVE GRADUATES AND COUNTING</h2>
					<p><?php the_field('sponsor-message-content'); ?></p>
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Success' ) ) ); ?>" class="link-button">LEARN MORE</a>
					<div class="our-sponsors">
						<h3>OUR SPONSORS</h3>
						<div class="sponsor-logos">
							<div class="vital-strategies-logo"><?php echo wp_get_attachment_image( get_field('sponsor-logo-1'), 'full'); ?></div>
							<div class="swiss-lung-logo"><?php echo wp_get_attachment_image( get_field('sponsor-logo-2'), 'full'); ?></div>
							<div class="chest-foundation-logo"><?php echo wp_get_attachment_image( get_field('sponsor-logo-3'), 'full'); ?></div>
						</div>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
