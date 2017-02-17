<?php
/**
 * The template for the Our Team page.
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
		<main id="main" class="site-main our-team-main" role="main">

			<section class="our-team-main">
				<?php while ( have_posts() ) : the_post(); 
					get_template_part( 'template-parts/content', 'no-hero-header' ); ?>
				<?php endwhile; ?>

				<div class="our-team-primary">
					<div class="inner">
						<div class="flex-container">
							<?php 
								$args = array(
									'post_type' => 'our_team_primary',
									'order'   => 'ASC'
								);

								$the_query = new WP_Query( $args );

								while( $the_query->have_posts() ) : $the_query->the_post();
							?>
								<div class="our-team-thumbnail">
									<a href="<?php the_permalink(); ?>">
										<?php echo wp_get_attachment_image( get_field('headshot'), 'full'); ?>
										<?php the_field('name'); ?>
									</a>
								</div>

							<?php endwhile; wp_reset_query(); ?>
						</div>
					</div>
				</div>

				<div class="our-team-secondary inner">
					<h1>Team Ethiopia</h1>
					<div class="flex-container">
						<?php 
							$args = array(
								'post_type' => 'our_team_secondary',
								'order'   => 'ASC'
							);

							$the_query = new WP_Query( $args );

							while( $the_query->have_posts() ) : $the_query->the_post();
						?>
							<div class="our-team-thumbnail">
								<a href="<?php the_permalink(); ?>">
									<?php echo wp_get_attachment_image( get_field('headshot'), 'full'); ?>
									<?php the_field('name'); ?>
								</a>
							</div>

						<?php endwhile; wp_reset_query(); ?>
					</div>
				</div>
			</section>

			<section class="appreciation">
				<div class="inner">
					<h3>EATI would like to extend a deep appreciation for the following faculty members for their dedication and teaching from 2013-2016.</h3>
					<div class="brush-bg"></div>

					<div class="appreciation-list">
						<div>
							<h4>Columbia University College of Physicians and Surgeons</h4>
							<ul>
								<li>Neil Schluger</li>
								<li>Max O’Donnell</li>
								<li>David Chong</li>
								<li>Madhavi Parekh</li>
								<li>Matthew Baldwin</li>
								<li>Cara Agerstrand</li>
								<li>Kristin Burkart</li>
								<li>Ralph Binder</li>
								<li>Wilson Quezada</li>
								<li>Asqual Getaneh </li>
							</ul>

							<h4>Emory University Medical Center</h4>
							<ul>
								<li>Gerald Stanton</li>
								<li>Annette Esper</li>
							</ul>

							<h4>University of Illinois Hospital and Health Sciences System</h4>
							<ul>
								<li>Dean Schraufnagel</li>
							</ul>
						</div>
						<div>
							<h4>Brown University Alpert Medical School</h4>
							<ul>
								<li>Corey Ventetuolo</li>
								<li>Jane Carter</li>
								<li>Charles Sherman</li>
								<li>James Myers</li>
								<li>Amos Charles</li>
								<li>Patrick Weyer</li>
							</ul>

							<h4>Washington Adventist Hospital, Takoma Park, Maryland</h4>
							<ul>
								<li>Leelie Selassie</li>
								<li>Meredith Webb</li>
								<li>Randall Wagner</li>
								<li>Sam Parsia</li>
							</ul>

							<h4>Rutgers NJ Medical School</h4>
							<ul>
								<li>Amee Patrawalla</li>
								<li>Feroza Daroowalla</li>
							</ul>
						</div>
						<div>
							<h4>New York University School of Medicine</h4>
							<ul>
								<li>William Rom</li>
								<li>Joseph Huang</li>
								<li>Versha Taparia</li>
								<li>Kevin Felner</li>
							</ul>

							<h4>Memorial Sloan Kettering Medical Center</h4>
							<ul>
								<li>Bianca Harris</li>
							</ul>

							<h4>St. Mary’s Hospital, Richmond Virginia</h4>
							<ul>
								<li>Dagne Assefa</li>
							</ul>

							<h4>Lenox Hill Hospital</h4>
							<ul>
								<li>Steven Feinsilver</li>
							</ul>

							<h4>New York Methodist Hospital</h4>
							<ul>
								<li>Liziamma George</li>
							</ul>
						</div>
						<div>
							<h4>Mount Sinai School of Medicine</h4>
							<ul>
								<li>Dua Sakshi</li>
								<li>David Steiger</li>
								<li>Linda Rogers </li>
							</ul>

							<h4>Long Island Jewish Medical Center</h4>
							<ul>
								<li>Adey Tsegaye</li>
								<li>Viera Lakticova</li>
								<li>Rubin Cohen</li>
							</ul>

							<h4>New York Medical College</h4>
							<ul>
								<li>Allan Dozer</li>
							</ul>

							<h4>Switzerland</h4>
							<ul>
								<li>Otto Schoch</li>
								<li>Otto Braendli</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
