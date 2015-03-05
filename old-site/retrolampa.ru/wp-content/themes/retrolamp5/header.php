<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Kate
 * @since Kate 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script src="http://code.jquery.com/jquery-1.10.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/myscript.js"></script>

<?php if( is_home() ): ?>

<?php endif; ?>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<body>
    
        <div id="site">
        <div id="grad_left"></div>
        <div id="grad_right"></div>
        <div id="top_grad"></div>
        
        <div id="container">
        
            <header>
            
                <div id="top_line"></div>
                
                <div class="fixsed">
                
                           
				<div style="float: right;margin: 25px 0 20px 20px;font-weight:bold;">Телефон: +7 (917) 517-78-37</div>
                    <a id="logo" href="/"></a>
                    
                    <nav>
                        <div id="cable"></div>
                        <?php
                    	$args = array(
							'menu_id'		=> 'menu',
							'theme_location' 	=> 'primary'
						);
						
						wp_nav_menu( $args );
					?>
					<!--
                        <ul id="menu">
                            <li class="active"><a href="/">Главная</a></li>
                            <li><a href="/">Каталог</a>
                                <div class="pointer"></div>
                                <ul class="sub_menu">
                                    <li><a href="/">Подвесные светильники</a></li>
                                    <li><a href="/">Настенные светильники</a></li>
                                    <li><a href="/">Настольные светильники</a></li>
                                    <li><a href="/">Напольные светильники</a></li>
                                    <li><a href="/">Ретро проводка</a></li>
                                    <li><a href="/">Аксесуары</a></li>
                                </ul>
                            </li>
                            <li><a href="/">Наши работы</a></li>
                            <li><a href="/">О компании</a></li>
                            <li><a href="/">Как заказать</a></li>
                            <li><a href="/">Контакты</a></li>
                            <li><a href="/">Карта сайта</a></li>
                        </ul>
                    -->
                    </nav>
                    
                </div>
                
            </header>