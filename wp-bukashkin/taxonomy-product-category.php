<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">
		<h1 class="cat-title inner-title"><?php the_taxonomies(', '); ?></h1>

		<?php get_template_part('loop'); ?>
		<?php get_template_part('pagination'); ?>
	
	</section>
	<!-- /section -->

<?php get_footer(); ?>