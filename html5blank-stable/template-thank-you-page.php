<?php /* Template Name: Thank you page Template */ get_header('thank-you-page'); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="container">
				<div class="top">
					<h3>&nbsp;</h3>
				</div>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>				
						
						<?php the_content(); ?>
		
				<?php endwhile; endif; ?>
			</div>
		</section>
		<!-- /section -->
	</main>
	
<?php get_footer('thank-you-page'); ?>