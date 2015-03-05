<?php
/*
#####################################
# ShopOS: Скрипты интернет-магазина
#  Copyright (c) 2008-2009
# http://shopos.ru
# Ver. 1.0.1
#####################################
*/

$box_smarty = new osTemplate;
$box_smarty->assign('tpl_path', _HTTP_THEMES_C);
$box_content = '';


$box_smarty->assign('FORM_ACTION', os_draw_form('quick_find', os_href_link(FILENAME_ADVANCED_SEARCH_RESULT, '', 'NONSSL', false), 'get').os_hide_session_id());
$box_smarty->assign('INPUT_SEARCH', os_draw_input_field('keywords', '', 'size="20" maxlength="30"'));
$box_smarty->assign('BUTTON_SUBMIT', os_image_submit('button_quick_find.gif', IMAGE_BUTTON_SEARCH));
$box_smarty->assign('FORM_END', '</form>');
$box_smarty->assign('LINK_ADVANCED', os_href_link(FILENAME_ADVANCED_SEARCH));
$box_smarty->assign('BOX_CONTENT', $box_content);

$box_smarty->assign('language', $_SESSION['language']);
// set cache ID
 if (!CacheCheck()) {
	$box_smarty->caching = 0;
	$box_search = $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_search.html');
} else {
	$box_smarty->caching = 1;
	$box_smarty->cache_lifetime = CACHE_LIFETIME;
	$box_smarty->cache_modified_check = CACHE_CHECK;
	$cache_id = $_SESSION['language'];
	$box_search = $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_search.html', $cache_id);
}

$osTemplate->assign('box_SEARCH', $box_search);
?>