<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <!-- dns prefetch -->
  <link href="//www.google-analytics.com" rel="dns-prefetch">

  <!-- meta -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <!-- css + javascript -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<div id="main">
		<div class="header">
			<div class="inner">
				<!-- logo -->
				<div class="logo">
					<?php if ( is_front_page() && is_home() ){ } else { ?>
					<a href="<?php echo home_url(); ?>">
					<?php  } ?>
					<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">	
					<?php if ( is_front_page() && is_home() ){ 
					} else { ?>
					</a>
					<?php } ?>
				</div>
				<!-- /logo -->
		        <a href="<?php echo home_url(); ?>/contacts.php" class="contacts">Контактная информация</a>
		    </div>
		    <?php putRevSlider("header") ?>
		</div><!-- header -->

		<aside class="navi">
			<?php wpeHeadNav(); ?>
		</aside>