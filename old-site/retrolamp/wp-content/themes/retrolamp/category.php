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
		<!--
		<div class="section">
			<h3 class="title"><b><? // =single_cat_title( '', false );?><span></span><span></span></b></h3>
		</div>
		-->
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="news">
					<a class="news_pic" href="<?=the_permalink();?>"><?=get_the_post_thumbnail($post->ID, array(310,250) );?></a>
					<div class="data">
						опубликовано <?=get_the_date("d.m.Y");?><br /> 
						Категория <a href="/"><?=single_cat_title( '', false );?></a>
					</div>
					<h3>
						<a href="<?=the_permalink();?>"><? the_title(); ?></a>
					</h3>
					<? the_excerpt(); ?>
				</div>
       		<?php endwhile; ?>
       		
       		<?php if (  $wp_query->max_num_pages > 1 ) : ?>
                    <?php kama_pagenavi(); ?>
			<?php endif; ?>
       		
		<?php else : ?>
			<div class="widget">
				<!--
				<div class="band">
					<h3><?//=single_cat_title( '', false );?></h3>
					<span></span>
				</div>
				-->
				<!-- <div class="icon article list"> -->
					<article id="post-0" class="post no-results not-found">
						<h1 class="entry-title"><?php _e( 'Нет данных для этой страницы', 'retrolamp' ); ?></h1>
					</article>
				<!-- </div> -->
			</div>
		<?php endif; ?>
	
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