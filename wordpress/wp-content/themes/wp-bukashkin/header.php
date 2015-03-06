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
  <?php wp_head(); ?>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cufon-yui.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/PF_Din_Text_Comp_Pro_400.font.js"></script>

  <script type="text/javascript">
      Cufon.replace("#breadcrumbs");
      Cufon.replace("tr.tr_head");
      Cufon.replace("td.td_head");

      jQuery(document).ready(function () {
          $('li.grayscale').click(function () {
              $('div.border').css("display", "none");
              this.firstChild.lastChild.style.display = "block";
          });

          jQuery('#portfolio_cat_list').jcarousel({
              scroll: 1,
              initCallback: mycarousel_initCallback,
              buttonNextHTML: null,
              buttonPrevHTML: null
          });
      });
  </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/grayscale2.js"></script>
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

				<a href="tel:+79261009556" class="phone">+7(926)<span>100-95-56</span></a>

		        <a href="<?php echo home_url(); ?>/contacts.php" class="contacts">Контактная информация</a>
		        <div class="lighter"></div>
		    </div>
		</div><!-- header -->

		<aside class="navi">
			<?php wpeHeadNav(); ?>
		</aside>