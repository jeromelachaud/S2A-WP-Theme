<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
     <!--    <link href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/images/icons/touch.png" rel="apple-touch-icon-precomposed"> -->

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
        <script>
			if(!Modernizr.svg) {
			    $('img[src*="svg"]').attr('src', function() {
			        return $(this).attr('src').replace('.svg', '.png');
			    });
			}
		</script>

		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-152x152.png">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-196x196.png" sizes="196x196">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-32x32.png" sizes="32x32">
		<meta name="msapplication-TileColor" content="#2d89ef">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/icons/mstile-144x144.png">

 	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="w-row">
			<!-- Left Col -->
			<div class="w-col w-col-3 left-sidebar">
				<!-- header -->
				<div class="fixed-nav">
					<header class="header clear" role="banner">
							<!-- logo -->
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<!-- TO-DO svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
									<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="logo-img">
								</a>
							</div>
							<!-- /logo -->

							<div class="logo-contact-details">
								ZAC du Bois Moussay -
								30 Rue Du Bois Moussay -
								93240 Stains <br />
								Tél :+ 33 (0) 1 48 40 44 04  - Fax :+ 33 (0) 1 48 40 51 51
							</div>

							<!-- sidebar -->
							<?php get_sidebar(); ?>
							<!-- /sidebar -->

							<!-- nav -->
							<nav class="nav" role="navigation">
								<?php html5blank_nav(); ?>
							</nav>
							<!-- /nav -->
					</header>
				</div>
				<!-- /header -->
			</div>
			<!-- /Left Col -->
				<!-- Webflow Right Col -->
				<div class="w-col w-col-9 content-column">
					<div class="w-clearfix">
							<nav class="nav" role="navigation">
								<?php html5blank_top_nav(); ?>
							</nav>

      			</div>

					<!-- Top Image -->
					<!-- <div class="image-example"></div> -->

					<!-- Owl Carousel -->
					<div id="owl-home" class="owl-carousel owl-theme">
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/images/header/images-header-1.jpg" alt="S2A">
						</div>
					 	<div class="item">
					 		<img src="<?php echo get_template_directory_uri(); ?>/images/header/images-header-2.jpg" alt="S2A">
					 	</div>
					 	<div class="item">
					 		<img src="<?php echo get_template_directory_uri(); ?>/images/header/images-header-3.jpg" alt="S2A">
					 	</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/images/header/images-header-4.jpg" alt="S2A">
						</div>
					 	<div class="item">
					 		<img src="<?php echo get_template_directory_uri(); ?>/images/header/images-header-5.jpg" alt="S2A">
					 	</div>
					 	<div class="item">
					 		<img src="<?php echo get_template_directory_uri(); ?>/images/header/images-header-6.jpg" alt="S2A">
					 	</div>
					</div>
