<?php /* Template Name: Contact Form Template */ get_header('contact-form'); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="container">
				<div class="top">
					<h3>Please fill out the information below. *Is required field.</h3>
				</div>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>				
						
						<?php the_content(); ?>
		
				<?php endwhile; endif; ?>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer('contact-form'); ?>
