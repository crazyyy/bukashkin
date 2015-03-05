<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Retrolamp
 */

get_header(); ?>

<div class="fixsed">
	
	<?php get_sidebar(); ?>
	
	<div id="content">
		<div class="path"><a href="/">Главная</a>&nbsp;/&nbsp;Ретро светильники</div>
		<h1 class="title_yellow"><?php the_title();?></h1>
		<div class="article">
		
			<div class="article_pic"><?=get_the_post_thumbnail($post->ID, array(330,230) );?></div>
			<?php the_content();?>
			<div class="clear"></div>
                        
        </div>
    </div>
	<div class="clear"></div>
	<div class="margin">
		<h3 class="title_yellow">ООО “Ретро Лампа”</h3>
		<p>Москва, ул. Наметкина, дом 17/68 офис 1</p>
		<p>Тел/Факс:  (+795) 748-98-89 (+795) 748-98-89</p>
		<p>Email - retro-lampa@domen.com</p>
	</div>
	<div class="clear"></div>       
</div>


<?php get_footer(); ?>