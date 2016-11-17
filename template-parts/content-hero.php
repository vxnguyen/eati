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
	<div class="inner">
		<?php if ( is_front_page() ) : ?>
			<div class="hero__content hero__content-home">
		<?php else : ?>
			<div class="hero__content">
		<?php endif; ?>

		<h1><span class="hero__title"><?php the_title(); ?></span></h1>

		<?php if ( is_front_page() ) : ?>
			<p><?php the_field('tagline'); ?></p>
		<?php endif; ?>
		</div> <!-- .content .content-home -->
	</div>
</section>
