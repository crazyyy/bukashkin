<?php get_header(); ?>
	<!-- section -->
	<section role="main">
	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('single-products-page clearfix'); ?>>
			<h1 class="single-title inner-title"><?php the_title(); ?></h1>
			<div class="feature-img"><img src="<?php the_field("image"); ?>" alt="<?php the_title(); ?>"><span class="order-product eModal-1">Купить</span></div>
			<?php the_content(); ?>
			<?php endwhile; else: ?>
				<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
			<?php endif; ?>	
		</article>
		<!-- /article -->
	</section>
	<!-- /section -->
<?php get_footer(); ?>