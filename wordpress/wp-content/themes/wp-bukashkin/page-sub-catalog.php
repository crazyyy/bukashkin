<?php /* Template Name: Sub Catalog Page */ get_header(); ?>
	
  <!-- section -->
  <section role="main">
    <!-- article -->
    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
      <h1 class="page-title inner-title"><?php the_title(); ?></h1>

      <?php the_content(); ?>

      <?php $posts = get_field('product');
        if( $posts ): ?>
        <ul class="prod-list clearfix">
          <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
            <li>
              <a href="<?php echo get_permalink( $p->ID ); ?>">
              <img src="<?php the_field("image", $p->ID); ?>" alt="<?php the_title(); ?>">
              <span><?php echo get_the_title( $p->ID ); ?></span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

    <?php endwhile; else: // If 404 page error ?>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    <?php endif; ?>
    </article>
    <!-- /article -->
    <?php get_template_part('include-map'); ?>
  </section>
  <!-- /section -->

<?php get_footer(); ?>