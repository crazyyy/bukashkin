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
		<h1 class="title_yellow"> <?php the_title();?></h1>
		<div class="article">
		
			<div class="article_pic">   
<a href="<? echo getthepostthumbnail(); ?>" class="highslide-image " onclick="return hs.expand(this);">



 <?=get_the_post_thumbnail($post->ID, array(330,230) );?></a></div> 
                       
                        <div class="namber"><?php comments_number('0', '1', '%'); ?>
<span></span></div>
                       
                        <div class="data"> Категория <a href="<?=$category_link?>"><?=$category->cat_name?></a></div>
                        
                        <?php the_content();?>
                        <div class="clear"></div>
                        <div class="social_over">
                            <div class="social">
                                <span>Поделись:</span>
 <script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>

<div class="pluso" style="float:right" data-background="transparent" data-options="big,round,line,horizontal,nocounter,theme=04" data-services="google,facebook,twitter,vkontakte"></div>
                            </div>
                        </div>
                        
                      
						 
                       				<?php
$categories = get_the_category($post->ID);
if ($categories) {
    $category_ids = array();
    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
    $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'showposts'=>4 // Количество записей для показа.
    );
    $my_query = new wp_query($args);
    if( $my_query->have_posts() ) {
        echo '<h3>Похожие статьи</h3><ul>';
        while ($my_query->have_posts()) {
            $my_query->the_post();
        ?>
           <div class="sim_art">
                                		<a class="sim_art_pic" href="<?=the_permalink();?>"><?=get_the_post_thumbnail($post->ID, array(140,120) );?></a>
                                		<p><?the_title();?></p>
                            		</div>
        <?php
        }
        echo '</ul>';
    }
}
?>			 <div style="clear:both"></div>
                        
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
		<p>Адрес производства: г. Красноармейск , ул. Маяковского</p>
		<p>Для всех регионов:  +7 917 517 78 37 </p>
		<p>Электропочта: - info@retrolampa.ru</p>

		</div>
		<div class="clear"></div>       
	</div>

<?php get_footer(); ?>