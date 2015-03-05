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
		<div class="article">
			<h1><?the_title();?></h1>
			<? the_post_thumbnail( array( 300, 300 ), array() ); ?> 
			<? the_content(); ?>
			<div class="clear"></div>
			<div class="line"></div>
			<?php
				$category = get_the_category();
				// var_dump($category);
				$args = array(
					'posts_per_page'	=> 5,
					'offset'			=> 0,
					'category'			=> $category[0]->cat_ID,
					'orderby'			=> 'post_date',
					'order'				=> 'DESC',
					'post_type'			=> 'post',
					'post_status'		=> 'publish',
					'suppress_filters'	=> true,
					'exclude'			=> get_the_ID()
				);
				
				$more_post = get_posts( $args );
				if(!empty($more_post)):
			?>
					<div class="dop_article">
						<h3>Еще статьи на эту тему:</h3>
							<ul>
								<?
								foreach($more_post as $post):
									setup_postdata( $post );
								?>
									<li><a href="<?=the_permalink();?>"><?the_title();?></a><span><?=get_the_date("d F Y");?></span></li>
								<?endforeach;?>
							</ul>
						</div>
			<?
			endif;
			wp_reset_postdata();
			?>
			<div id="social">
				<span>Авторизация</span>
				<a href="/"><img src="<?=get_template_directory_uri();?>/images/social_1.png" alt=""/></a>
				<a href="/"><img src="<?=get_template_directory_uri();?>/images/social_2.png" alt=""/></a>
				<a href="/"><img src="<?=get_template_directory_uri();?>/images/social_3.png" alt=""/></a>
				<a href="/"><img src="<?=get_template_directory_uri();?>/images/social_4.png" alt=""/></a>
				<a href="/"><img src="<?=get_template_directory_uri();?>/images/social_5.png" alt=""/></a>
				<a href="/"><img src="<?=get_template_directory_uri();?>/images/social_6.png" alt=""/></a>
				<a href="/"><img src="<?=get_template_directory_uri();?>/images/social_7.png" alt=""/></a>
			</div>
			
			<div class="clear"></div>
			
			<div>
			
				<div id="coments">
					<?
					$comments_args = array(
							'label_submit'=>'Добавить',
							//'title_reply'=>'Write a Reply or Comment',
							'comment_notes_before' => '',
							'comment_notes_after' => '',
							'comment_field' => '<textarea name="comment"></textarea>',
							'fields'	=> array(
												'author' => '<input name="author" type="hidden" value="Гость" />',
												'email'  => '<input name="email" type="hidden" value="somemail@mail.ru" />',
												'url'    => ''
											)
							// wp_get_current_commenter() //array( 'redirect_to' => '<input type="hidden" name="redirect_to" value="'.get_permalink().'"/>' ),
					);
			
					comment_form($comments_args);
					?>
				</div>
				<?//=get_permalink();?>
				<?//the_permalink();?>
				<div class="clear"></div>
				
				<ul class="commentlist">
				<?php
					$comments = get_comments(array(
						'post_id' => get_the_ID(),
						'status' => 'approve'
					));
	
					wp_list_comments(array(
						'per_page' => 10,
						'reverse_top_level' => false
					), $comments);
				?>
				</ul>
				
			</div>
				
			
				
			<!--
			<div id="coments">
				<form>
					<label>Комментарии</label>
					<textarea></textarea>
					<div>
						<input type="submit" value="Добавить" />
						<span></span>
					</div>
				</form>
			</div>
			-->
		</div>
		<div class="clear"></div>
	</div>
</div>