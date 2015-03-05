<?php

// add_action( 'after_setup_theme', 'kate_setup' );

if ( ! function_exists( 'retro_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override twentyeleven_setup() in a child theme, add your own twentyeleven_setup to your child theme's
 * functions.php file.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To style the visual editor.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links, custom headers
 * 	and backgrounds, and post formats.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Kate 1.0
 */

add_action( 'after_setup_theme', 'retro_setup' );

add_filter( 'excerpt_length', 'custom_excerpt_length', 7 );
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 7;
}

function new_excerpt_more( $more ) {
	global $post;
	return '...  <a href="'. get_permalink($post->ID) . '">Читать дальше</a>';
}

function kama_pagenavi($before='', $after='', $echo=true) {
	/* ================ Настройки ================ */
	$text_num_page = ''; // Текст для количества страниц. {current} заменится текущей, а {last} последней. Пример: 'Страница {current} из {last}' = Страница 4 из 60
	$num_pages = 4; // сколько ссылок показывать
	$stepLink = 10; // после навигации ссылки с определенным шагом (значение = число (какой шаг) или '', если не нужно показывать). Пример: 1,2,3...10,20,30
	$dotright_text = '…'; // промежуточный текст "до".
	$dotright_text2 = '…'; // промежуточный текст "после".
	$backtext = 'предыдущая'; // текст "перейти на предыдущую страницу". Ставим '', если эта ссылка не нужна.
	$nexttext = 'следующая'; // текст "перейти на следующую страницу". Ставим '', если эта ссылка не нужна.
	$first_page_text = 'первая'; // текст "к первой странице" или ставим '', если вместо текста нужно показать номер страницы.
	$last_page_text = 'последняя'; // текст "к последней странице" или пишем '', если вместо текста нужно показать номер страницы.
	/* ================ Конец Настроек ================ */

	global $wp_query;
	$posts_per_page = (int) $wp_query->query_vars[posts_per_page];
	$paged = (int) $wp_query->query_vars[paged];
	$max_page = $wp_query->max_num_pages;

	if($max_page <= 1 ) return false; //проверка на надобность в навигации

	if(empty($paged) || $paged == 0) $paged = 1;

	$pages_to_show = intval($num_pages);
	$pages_to_show_minus_1 = $pages_to_show-1;

	$half_page_start = floor($pages_to_show_minus_1/2); //сколько ссылок до текущей страницы
	$half_page_end = ceil($pages_to_show_minus_1/2); //сколько ссылок после текущей страницы

	$start_page = $paged - $half_page_start; //первая страница
	$end_page = $paged + $half_page_end; //последняя страница (условно)

	if($start_page <= 0) $start_page = 1;
	if(($end_page - $start_page) != $pages_to_show_minus_1) $end_page = $start_page + $pages_to_show_minus_1;
	if($end_page > $max_page) {
	$start_page = $max_page - $pages_to_show_minus_1;
	$end_page = (int) $max_page;
	}

	if($start_page <= 0) $start_page = 1;

	$out='';//выводим навигацию
	$out.= $before."<div class='wp-pagenavi' id='pagination'><p>\n";
	if ($text_num_page){
	$text_num_page = preg_replace ('!{current}|{last}!','%s',$text_num_page);
	$out.= sprintf ("<span class='pages'>$text_num_page</span>",$paged,$max_page);
	}

	if ($backtext && $paged!=1) $out.= '<a href="'.get_pagenum_link(($paged-1)).'">'.$backtext.'</a>';

	if ($start_page >= 2 && $pages_to_show < $max_page) {
	$out.= '<a href="'.get_pagenum_link().'">'. ($first_page_text?$first_page_text:1) .'</a>';
	if($dotright_text && $start_page!=2) $out.= '<span class="extend">'.$dotright_text.'</span>';
	}

	for($i = $start_page; $i <= $end_page; $i++) {
			if($i == $paged) {
			$out.= '<span class="current">'.$i.'</span>';
	} else {

	$out.= '<a href="'.get_pagenum_link($i).'">'.$i.'</a>';
	}
	}

                //ссылки с шагом
                if ($stepLink && $end_page < $max_page){
                for($i=$end_page+1; $i<=$max_page; $i++) {
                	if($i % $stepLink == 0 && $i!==$num_pages) {
                			if (++$dd == 1) $out.= '<span class="extend">'.$dotright_text2.'</span>';
                					$out.= '<a href="'.get_pagenum_link($i).'">'.$i.'</a>';
                	}
                }
                }

                if ($end_page < $max_page) {
                if($dotright_text && $end_page!=($max_page-1)) $out.= '<span class="extend">'.$dotright_text2.'</span>';
                $out.= '<a href="'.get_pagenum_link($max_page).'">'. ($last_page_text?$last_page_text:$max_page) .'</a>';
                }

                if ($nexttext && $paged!=$end_page) $out.= '<a href="'.get_pagenum_link(($paged+1)).'">'.$nexttext.'</a>';

                $out.= "</p></div>".$after."\n";
                if ($echo) echo $out;
                	else return $out;
                }

function retro_setup() {
	register_nav_menu( 'primary', __( 'Primary Menu', 'retrolamp' ) );
	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 190, 130 );
	
	if ( function_exists('register_sidebar') )
		register_sidebar(array(
				'before_widget' => '',
				'before_title' => '',
				'after_title' => '',
				'after_widget' => ''
			)
		);
}

function retro_comment($comment, $args, $depth){
	$GLOBALS['comment'] = $comment;
	echo '<div id="comment-'; comment_ID(); echo '"'; comment_class(); echo '>'; //  '.comment_class().'
	echo '<a class="avatar_pic" href="/">'.get_avatar($comment,$size='62',$default=get_template_directory_uri().'/images/avatar.png' ).'</a>';
	echo '<div>';
	echo '<h6><a href="">'.get_comment_author_link().'</a></h6>';
	echo '<div class="coment_text">';
	echo '<p>'; comment_text(); echo '</p>';
	comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'])));
	echo '</div>';
	echo '</div>';
	echo '</div><div class="clear"></div>';
}

endif;

function the_breadcrumb() {
    echo ' ';
    if (!is_front_page()) {
        echo '<a href="';
        echo get_option('home');
        echo '">Главная';
        echo "</a> » ";
        if (is_category() || is_single()) {
            the_category(' ');
            if (is_single()) {
                echo " » ";
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
    }
    else {
        echo 'Home';
    }
}

function getthepostthumbnail () {
    $image_id = get_post_thumbnail_id();
    $image_url = wp_get_attachment_image_src($image_id);
    // данный код извлекает url картинки Вашей миниатюры WordPress
    $image_url = $image_url[0];
return $image_url;
} 
?>