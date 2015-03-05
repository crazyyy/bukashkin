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
		<div class="path"><?php
          the_breadcrumb();
?></div>
		<h1 class="title_yellow"><?php the_title();?></h1>
		<div class="article">
		
			<div class="article_pic"><?=get_the_post_thumbnail($post->ID, array(330,230) );?></div>
                        
                        <div class="namber"><?php comments_number('0', '1', '%'); ?>
<span></span></div>
                       
                        <div class="data">Опубликовано <?=get_the_date("d.m.Y");?><br /> Категория <a href="<?=$category_link?>"><?=$category->cat_name?></a></div>
                        
                        <?php the_content();?>
                        <div class="clear"></div>
                        <div class="social_over">
                            <div class="social">
                                <span>Поделись:</span>
                                <a id="social_1" href="/"></a>
                                <a id="social_2" href="/"></a>
                                <a id="social_3" href="/"></a>
                                <a id="social_4" href="/"></a>
                            </div>
                        </div>
                        
                        <?php
                        	$args = array(
								'posts_per_page'	=> 5,
								'offset'			=> 0,
								'category'			=> $category->cat_ID,
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
							<h3>Похожие материалы:</h3>
                       		<div class="similar">

								<?
								foreach($more_post as $post):
									setup_postdata( $post );
								?>
									<div class="sim_art">
                                		<a class="sim_art_pic" href="<?=the_permalink();?>"><?=get_the_post_thumbnail($post->ID, array(140,120) );?></a>
                                		<p><?the_title();?></p>
                            		</div>
								<?endforeach;?>
							</div>
						<?
							endif;
							wp_reset_postdata();
						?>
                        
                        <?
                        	$commenter = wp_get_current_commenter();
                        	$req = get_option( 'require_name_email' );
                        	$aria_req = ( $req ? " aria-required='true'" : '' );
                        	$fields = array(
                        		'author' => '<p class="comment-form-author">' . '<label for="author">Ваше имя</label>' . ( $req ? '<span class="required">*</span>' : '' ) . ' <input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p><div style="clear:right;"></div>',
                       			'email' => '<p class="comment-form-email"><label for="email">Ваш Email</label>' . ( $req ? '<span class="required">*</span>' : '' ) . ' <input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p><div style="clear:right;"></div>',
                       			// 'url' => '<p class="comment-form-url"><label for="url">' . __( 'Website' ) . '</label>' . '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>'
                       		);
                        		
                      		$comments_args = array(
								'label_submit'=>'отправить комментарий',
								'title_reply'=>'Комментарии:',
								'comment_notes_before' => get_avatar( $commenter['comment_author_email'],$size='62',$default=get_template_directory_uri().'/images/avatar.png' ).'<h3>Оставить комментарий</h3>',
								'comment_notes_after' => '',
								'comment_field' => '<textarea name="comment"></textarea>',
								'fields'	=> $fields
							);
							?>
							<div class="reg">
								<?php comment_form($comments_args); ?>
							</div>
							
							<div class="clear"></div>
								<?php
									$comments = get_comments(array(
										'post_id' => get_the_ID(),
										'status' => 'approve'
									));
								?>
								<div class="commentlist">
								<?php
									wp_list_comments(array(
										'per_page' 				=> 10,
										'reverse_top_level' 	=> false,
										'callback' 				=> 'retro_comment',
									), $comments);
								?>
								</div>
							<div class="clear"></div>
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