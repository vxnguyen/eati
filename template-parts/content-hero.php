<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EATI
 */

?>

<section class="hero">
	<?php echo wp_get_attachment_image( get_field('hero-image'), 'full', '', array( "class" => "objectfit-img" )); ?>
	<div class="inner">
		<?php if ( is_front_page() ) : ?>
			<div class="content content-home">
		<?php else : ?>
			<div class="content">
		<?php endif; ?>

		<h1><?php the_title(); ?></h1>

		<?php if ( is_front_page() ) : ?>
			<p><?php the_field('tagline'); ?></p>
		<?php endif; ?>
		</div> <!-- .content .content-home -->
	</div>
</section>
