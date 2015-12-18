<?php /* Template Name: Landing Page Template */ get_header(); ?>
			<div class="header-bottom">
				<div class="container">
					<div class="title-container">						
					<h1 class="tablet"><?php the_field('header_title'); ?><div class="fadingEffect"></div></h1>
					<h1 class="mobile"><?php the_field('header_title_mobile'); ?><div class="fadingEffect"></div></h1>
					</div>
				</div>
			</div>
		</header>
		<!-- /header -->
	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>				

				<?php 
				
				$images = get_field('lp_slider');
				$count = 1;
				
				if( $images ): ?>
				    <div id="slider" class="flexslider main tablet">
					    <div class="slider-title">
						    <h2><span class="first" style="display: none;">Morning.&nbsp;</span><span class="second" style="display: none;">Noon.&nbsp;</span><span class="third" style="display: none;">Night.</span></h2>
					    </div>
				        <ul class="slides">
				            <?php foreach( $images as $image ): ?>
				                <li class="bucket-<?php echo $count; ?>">
				                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </li>
				                <?php $count++; ?>
				            <?php endforeach; ?>
				        </ul>
				    </div>
				<?php endif; ?>

				<div class="bucket-container">
					<div class="container">
						<div class="bucket1 active">
							<div class="img-box mobile">
								<?php if( have_rows('mobile_slider') ): ?>
									<?php while( have_rows('mobile_slider') ): the_row();
									
										$main_field = get_field('mobile_slider');
										$first_img = $main_field[0]['url'];
									?>
										<img src="<?php echo $first_img; ?>" />
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
							<div class="bucket">
								<h2><?php the_field('bucket_1_header'); ?></h2>
								<p><?php the_field('bucket_1_copy'); ?></p>
							</div>
							<span class="tablet">></span>
						</div>
						<div class="bucket2">
							<div class="img-box mobile">
								<?php if( have_rows('mobile_slider') ): ?>
									<?php while( have_rows('mobile_slider') ): the_row();
									
										$main_field = get_field('mobile_slider');
										$first_img = $main_field[1]['url'];
									?>
										<img src="<?php echo $first_img; ?>" />
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
							<div class="bucket">
								<h2><?php the_field('bucket_2_header'); ?></h2>
								<p><?php the_field('bucket_2_copy'); ?></p>
							</div>
							<span class="tablet">></span>
						</div>
						<div class="bucket3">
							<div class="img-box mobile">
								<?php if( have_rows('mobile_slider') ): ?>
									<?php while( have_rows('mobile_slider') ): the_row();
									
										$main_field = get_field('mobile_slider');
										$first_img = $main_field[2]['url'];
									?>
										<img src="<?php echo $first_img; ?>" />
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
							<div class="bucket">
								<h2><?php the_field('bucket_3_header'); ?></h2>
								<p><?php the_field('bucket_3_copy'); ?></p>
							</div>
							<span class="tablet">></span>
						</div>
					</div>
				</div>	
				
				<div class="cta-container">
					<div class="icon">mug</div>					
					<div class="container">
						<div class="drawing-left tablet">sun</div>
						<div class="drawing-right tablet">moon</div>
						<h3><?php the_field('cta_title');?></h3>
						<p><?php the_field('cta_copy'); ?></p>
						<div class="btn-container">
							<a class="btn mobile" href="tel:<?php the_field('telephone_number'); ?>"><?php the_field('cta_button_text_mobile'); ?></a>
							<a class="btn contact-trig" href="#" onClick="_gaq.push(['_trackEvent', 'industry', 'click', 'button']);"><?php the_field('cta_button_text'); ?></a>
						</div>
					</div>
				</div>							

				<div class="meeting-container tablet" style="background: url(<?php the_field('meeting_bg'); ?>) no-repeat; background-size: cover;">
					<div class="container">
						<div class="text-holder">
							<h2><?php the_field('meeting_header'); ?></h2>
							<p><?php the_field('meeting_copy'); ?></p>
						</div>
					</div>
				</div>
				<div class="meeting-container mobile" style="background: url(<?php the_field('meeting_bg_mobile'); ?>) no-repeat; background-size: cover;">
					<div class="container">
						<div class="text-holder">
							<h2><?php the_field('meeting_header'); ?></h2>
							<?php the_field('meeting_copy'); ?>
						</div>
					</div>
				</div>
				<div class="callout-container">
					<div class="icon">beans</div>
					<div class="container">
						<h2><?php the_field('callout_header'); ?></h2>
					</div>
				</div>
				<div class="steps-container">
					<div class="container">
						<div class="bucket1">
							<div class="bucket">
								<h2><?php the_field('step_1_header'); ?></h2>
								<?php the_field('step_1_copy'); ?>
							</div>
						</div>
						<div class="bucket2">
							<div class="bucket">
								<h2><?php the_field('step_2_header'); ?></h2>
								<?php the_field('step_2_copy'); ?>
							</div>
						</div>
						<div class="bucket3">
							<div class="bucket">
								<h2><?php the_field('step_3_header'); ?></h2>
								<?php the_field('step_3_copy'); ?>
							</div>
						</div>
						<div class="btn-container">
							<a class="btn mobile" href="tel:<?php the_field('telephone_number'); ?>"><?php the_field('cta_button_text_mobile'); ?></a>
							<a class="btn contact-trig" href="#" onClick="_gaq.push(['_trackEvent', 'industry', 'click', 'button']);"><?php the_field('step_button_text'); ?></a>
						</div>
					</div>
				</div>

				<div class="rotating-container">
					<div class="container-img mobile" style="background: url(<?php the_field('rotator_image_mobile'); ?>) no-repeat; background-size: cover;">
					    <div class="bottom-title">
						    <h3><span class="first1" style="opacity: 0;">Morning.</span><span class="second2" style="opacity: 0;">Noon.</span><span class="third3" style="opacity: 0;">Night.</span></h3>
					    </div>
					</div>
					<div class="container">
						<div class="slider-container">
							<div class="slide-container">
								<?php if( have_rows('text_rotator') ): ?>
							    <div id="slider2" class="flexslider">
							        <ul class="slides">
									<?php // loop through the rows of data
										while ( have_rows('text_rotator') ) : the_row(); ?>	
						                <li class="slide">
							                <h2><?php the_sub_field('rotator_header'); ?></h2>
							                <?php the_sub_field('rotator_copy'); ?>
						                </li>
										<?php endwhile; ?>
									</ul>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="container-img tablet" style="background: url(<?php the_field('rotator_image'); ?>) no-repeat; background-size: cover;">
					    <div class="bottom-title">
						    <h3><span class="first1" style="opacity: 0;">Morning.&nbsp;</span><span class="second2" style="opacity: 0;">Noon.&nbsp;</span><span class="third3" style="opacity: 0;">Night.</span></h3>
					    </div>
					</div>
					
				</div>
				
				<?php the_content(); ?>

		<?php endwhile; endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
