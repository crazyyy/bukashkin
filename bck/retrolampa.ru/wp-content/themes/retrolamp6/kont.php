<?php
/*
Template Name: kont
*/
?>

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
	
	 
	
	<div id="content">
		<!--
		<div class="section">
			<h3 class="title"><b><? // =single_cat_title( '', false );?><span></span><span></span></b></h3>
		</div>
		-->
		<div class="over">
                  
         <div class="cf1"> 	 <div class="cf11"><h3 class="title_yellow">Возможности, размещение заказа</h3>
	  Мы имеем многолетний опыт работы с металлом и на сегодняшний день возможности нашей компании позволяют реализовать обширный спектр металло-изделий светотехнического направления. Все-таки приоритетным для нас является изготовление светильников из латуни и меди в стиле ретро , т.к. представляет большой творческий интерес что не маловажно и для нас и для Вас, ведь вещь сделанная с любовью будет радовать всегда	</div></div>

<div class="feedb">
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
 
 <?php the_content(); ?> 
<?php endwhile; ?>
 <?php endif; ?>	
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