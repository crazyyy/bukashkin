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
 * @subpackage Kate
 */

get_header();
?>

<div id="content_box">

	<?php get_sidebar(); ?>
	
	<div id="content">

			<?php if ( have_posts() ) : ?>
				<div class="section">
					<h1 class="title"><?php printf( __( 'Результаты поиска для: %s', 'kate' ), '' . get_search_query() . '' ); ?></h1>
				</div>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="list">
						<a class="list_pic" href="<?=the_permalink();?>"><?=get_the_post_thumbnail($post->ID, array(230,230) );?></a> <!-- 'thumbnail' -->
						<h3><a href="<?=the_permalink();?>"><? the_title(); ?></a></h3>
						<? the_excerpt(); ?>
						<div class="author">
							<?=get_the_date("d F Y");?>
							<b></b>
						</div>
					</div>
				<?php endwhile; ?>
				
			<?php else : ?>

				<div class="section">
					<h1 class="title"><?php _e( 'Ничего не найдено', 'kate' ); ?></h1>
				</div>
				
				<div class="entry-content">
					<p><?php _e( 'Извините, но по заданным критериям ничего не найдено.<br />Пожалуйста, попробуйте другие ключевые слова.', 'kate' ); ?></p>
					<?php // get_search_form(); ?>	
				</div>

			<?php endif; ?>

	</div>
	<div class="clear"></div>
</div>
<?php get_footer(); ?>