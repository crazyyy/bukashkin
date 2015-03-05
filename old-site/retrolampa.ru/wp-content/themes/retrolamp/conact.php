<?php
/*
Template Name: Contact
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
		 
		<div class="over">
                    
                        
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="icon">
					<a class="icon_pic" href="<?=the_permalink();?>"><?=get_the_post_thumbnail($post->ID, array(310,200) );?></a>
					<div class="description">
						<span></span>
						<span></span>
						<h4><a href="<?=the_permalink();?>"><?php the_title(); ?></a></h4>
						<p><? the_excerpt(); ?></p>
					</div>
				</div>
       		<?php endwhile; ?>
       		
       		<?php if (  $wp_query->max_num_pages > 1 ) : ?>
                    <?php kama_pagenavi(); ?>
			<?php endif; ?>
       		
		<?php else : ?>
			<div class="widget">
				 
			</div>
		<?php endif; ?>
	
	</div>
	<div class="clear"></div>
	
	<div class="margin">
		<h3 class="title_yellow">ООО “Ретро Лампа”</h3>
		<p>г. Красноармейск ул. Маяковского</p>
		<p>Тел: +7(926) 603-18-36</p>
		<p>Email - romatti@me.com</p>
	</div>
	<div class="clear"></div>       
</div>

<?php get_footer(); ?>