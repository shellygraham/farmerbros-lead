<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico?ver=1" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="<?php echo get_template_directory_uri(); ?>/lib/dist/css/flexslider.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/lib/dist/css/reveal-it.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/lib/dist/css/style.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<div class="super-container">

		<!-- header -->
		<header class="header clear" role="banner">
			<div class="header-top">
				<div class="container">
					<div class="logo">
						<div class="logo-container">
							<?php $bloginfo = get_bloginfo(); echo $bloginfo; ?> 
						</div>
					</div>
					<div class="call-block">
						<span class="tablet"><?php the_field('header_call_information'); ?></span>
						<div class="btn-container">
							<a class="btn mobile" href="tel:<?php the_field('telephone_number'); ?>"><?php the_field('telephone_button_text', 'option'); ?></a>
							<a class="btn contact-trig tablet" href="#"><?php the_field('header_button_text', 'option'); ?></a>
						</div>
					</div>
				</div>
			</div>
