<?php get_header(); ?>
	<!-- section -->
	<section role="main">
	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
		
			<h1 class="single-title inner-title"><?php the_title(); ?></h1>
			
			<!-- Dispaly dynamic content RU: Вывод контента записей -->
			<?php the_content(); ?>
			
			<?php the_tags( __( 'Tags: ', 'wpeasy' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			
			<!-- post details -->
			<span class="date"><?php the_time('d F Y'); ?></span>
			<!-- /post details -->
	
			<?php endwhile; else: ?>
				<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
			<?php endif; ?>	
		</article>
		<!-- /article -->
	</section>
	<!-- /section -->
<?php get_footer(); ?>