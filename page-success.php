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
		<main id="main" class="site-main success-main" role="main">
			<?php while ( have_posts() ) : the_post(); 
				get_template_part( 'template-parts/content', 'hero' ); ?>
			<?php endwhile; ?>
			
			<section class="achievements inner">
				<h2 class="brush-bg">ACHIEVEMENTS</h2>
				<div class="flex-container">
					<div>
						<h4><?php the_field('event-1-title'); ?></h4>
						<p><?php the_field('event-1-content'); ?></p>
						<?php echo wp_get_attachment_image( get_field('event-1-image'), 'full'); ?>
					</div>
					<div>
						<?php echo wp_get_attachment_image( get_field('event-2-image'), 'full'); ?>
						<h4><?php the_field('event-2-title'); ?></h4>
						<p><?php the_field('event-2-content'); ?></p>
					</div>
				</div>
			</section>

			<section class="expansion inner">
				<h3>EATI GRADUATES HAVE EXPANDED PULMONARY AND CRITICAL CARE SERVICES THROUGHOUT ETHIOPIA.</h3>
				<div class="brush-bg"></div>

					<div class="bar"></div>

					<ul class="expansion-tabs">
						<li>
							<div class="circle"></div>
							<div class="line"></div>
							<p>TIKUR ANBESSA<br>HOSPITAL</p>
						</li>

						<li>
							<div class="circle"></div>
							<div class="line"></div>
							<p>ST. PAUL<br>HOSPITAL</p>
						</li>

						<li>
							<div class="circle"></div>
							<div class="line"></div>
							<p>ST. PETER<br>HOSPITAL</p>
						</li>

						<li>
							<div class="circle"></div>
							<div class="line"></div>
							<p>AYDER REFERRAL<br>HOSPITAL</p>
						</li>

						<li>
							<div class="circle"></div>
							<div class="line"></div>
							<p>CRITICAL CARE<br>TASK FORCE</p>
						</li>

						<li>
							<div class="circle"></div>
							<div class="line"></div>
							<p>A MODEL<br>PROGRAM</p>
						</li>
					</ul>

					<div class="expansion-content">
						<div class="animated fadeIn">
							<div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/tikur-anbessa-hospital.jpg">
							</div>

							<div>
								<h4>TIKUR ANBESSA (BLACK LION) SPECIALIZED HOSPITAL AAU</h4>
								<p>Dr. Fahmi is the first AAU pulmonary division faculty member who graduated from EATI. He will be joined by Dr. Tewodros and Dr. Dawit in 2017 as EATI transitions to sustainability by local instructors by 2020. He is now the Medical ICU Director and he is working on diagnostic and treatment protocols for sepsis, respiratory failure, and renal disease.</p>
							</div>
						</div>

						<div class="animated fadeIn"> 
							<div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/st-paul-hospital.jpg">
							</div>

							<div>
								<h4>ST. PAUL HOSPITAL MILLENNIUM MEDICAL COLLEGE</h4>
								<p>Dr. Tola and Dr. Abebe are now building pulmonary and critical care services at St. Paul Hospital. Dr. Tola is also the head of the Department of Medicine. They round daily in the ICU (6 beds), provide pulmonary consultations, see outpatient in chest clinic twice per week, and perform procedures (bronchoscopy and pleural biopsy).</p>
							</div>
						</div>

						<div class="animated fadeIn">
							<div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/st-peter-hospital.jpg">
							</div>

							<div>
								<h4>ST. PETER SPECIALIZED HOSPITAL</h4>
								<p>Dr. Aschalew is developing pulmonary and critical care services at the hospital as it transitions from a tuberculosis hospital to a full care facility. He is involved in several citywide projects including a smoking cessation campaign and he is taking on more of a leadership role in the Ethiopian Thoracic Society.</p>
							</div>
						</div>

						<div class="animated fadeIn">
							<div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/ayder-referral-hospital.jpg">
							</div>

							<div>
								<h4>AYDER REFERRAL HOSPITAL, MEKELE UNIVERSITY</h4>
								<p>Dr. Kibrom is the head of pulmonary and critical care service and is very involved in teaching residents and medical students. His primary clinical responsibilities include critical care in a 10 bed ICU, pulmonary inpatient consults, chest clinic, and procedures (bronchoscopy and pleural biopsies).</p>
							</div>
						</div>

						<div class="content-no-image animated fadeIn">
							<div>
								<h4>CRITICAL CARE TASK FORCE</h4>
								<p>The Ethiopian Minister of Health is focusing on opening ICU beds in all 22 district hospitals. He has set up a task force to develop critical care across the country. Dr. Tewodros and Dr. Amsalu are both members.</p>
								<p>The Minister of Health has asked EATI faculty members to develop pulmonary and critical care policies and procedures for St. Peter Hospital that would be used at other government district hospitals.</p>
							</div>
						</div>

						<div class="content-no-image animated fadeIn">
							<div>
								<h4>A MODEL PROGRAM</h4>
								<p>The leadership at AAU and Tikur Anbessa (Black Lion) Specialized Hospital have praised EATI for the quality of its training program. They have officially recognized EATI as the model for all future subspecialty training programs.</p>
								<p>In July 2016, the Chest Foundation of the American College of Chest Physicians (ACCP) awarded Dr. E. Jane Carter and the East African Training Initiative the 2016 Community Service Grant for its contribution to medical training in pulmonary medicine in Ethiopia.</p>
							</div>
						</div>
					</div>
			</section>

			<section class="testimonials inner">
				<h3>TESTIMONIALS</h3>

				<div id="slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#slider" data-slide-to="0" class="active"></li>
				    <li data-target="#slider" data-slide-to="1" class=""></li>
				    <li data-target="#slider" data-slide-to="2" class=""></li>
				    <li data-target="#slider" data-slide-to="3" class=""></li>
				</ol>

				  <!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<p>
				    		“EATI brings significant changes in the development of pulmonary and critical care medicine at Addis Ababa University College of Health Sciences. At a grander level, this means an important transfer of knowledge and skills that affects the country. This kind of fellowship training within Ethiopia has a lot of benefits for the trainees as well as for the country—it prevents displacement and minimizes brain drain. This program can be used as a model for other developing countries to form their own fellowship training programs.”
				    	</p>
				    	<h4>-Dr. Amsalu Bekele Binegdie</h4>
				    </div>

				    <div class="item">
				    	<p>
				    		“Since I joined the fellowship program, I have learned and developed important clinical skills in diagnostic flexible bronchoscopy, spirometry, and research. Through the program, I’m able to participate in the Methods in Epidemiologic, Clinical, and Operations Research training abroad. I’m also given the invaluable opportunity to present my abstract at the International Union Against Tuberculosis and Lung Disease conference in Liverpool, UK.”
				    	</p>
				    	<h4>-Dr. Tewodros Haile</h4>
					</div>

					<div class="item">
						<p>“The EATI program shaped me as a pulmonologist and particularly as a critical care medicine physician. It has dramatically improved the practice of pulmonary medicine in Ethiopia.”
						</p>
						<h4>-Dr. Abebe Shumet</h4>
					</div>

					<div class="item">
						<p>“I’m glad to have been given the opportunity to join the EATI Pulmonary and Critical Care Medicine Fellowship program. We now have seven pulmonary and critical care physicians for a country of about 100 million, and EATI will help us train more PCCM doctors and make pulmonary medicine more accessible to more and more people.” 
						</p>
						<h4>-Dr. Ermias Merkebu</h4>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#slider" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
