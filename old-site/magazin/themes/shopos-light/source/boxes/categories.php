<?php
/*
#####################################
# ShopOS: Скрипты интернет-магазина
#  Copyright (c) 2008-2009
# http://shopos.ru
# Ver. 1.0.1
#####################################
*/

$start = microtime();
$box_smarty = new osTemplate;
$box_content = '';

$box_smarty->assign('language', $_SESSION['language']);
// set cache ID
if (!CacheCheck()) {
	$cache=false;
	$box_smarty->caching = 0;
} else {
	$cache=true;
	$box_smarty->caching = 1;
	$box_smarty->cache_lifetime = CACHE_LIFETIME;
	$box_smarty->cache_modified_check = CACHE_CHECK;
	$cache_id = $_SESSION['language'].$_SESSION['customers_status']['customers_status_id'].$cPath;
}

if(!$box_smarty->is_cached(CURRENT_TEMPLATE.'/boxes/box_categories.html', $cache_id) || !$cache){

$box_smarty->assign('tpl_path', _HTTP_THEMES_C);

// include needed functions
require_once (_THEMES_C.'source/inc/show_category.php');


$categories_string = '';
if (GROUP_CHECK == 'true') {
	$group_check = "and c.group_permission_".$_SESSION['customers_status']['customers_status_id']."=1 ";
}
$categories_query = "select c.categories_id,
                                           cd.categories_name,
                                           c.parent_id from ".TABLE_CATEGORIES." c, ".TABLE_CATEGORIES_DESCRIPTION." cd
                                           where c.categories_status = '1'
                                           and c.parent_id = '0'
                                           ".$group_check."
                                           and c.categories_id = cd.categories_id
                                           and cd.language_id='".(int) $_SESSION['languages_id']."'
                                           order by sort_order, cd.categories_name";
$categories_query = osDBquery($categories_query);

while ($categories = os_db_fetch_array($categories_query, true)) {
	$foo[$categories['categories_id']] = array ('name' => $categories['categories_name'], 'parent' => $categories['parent_id'], 'level' => 0, 'path' => $categories['categories_id'], 'next_id' => false);

	if (isset ($prev_id)) {
		$foo[$prev_id]['next_id'] = $categories['categories_id'];
	}

	$prev_id = $categories['categories_id'];

	if (!isset ($first_element)) {
		$first_element = $categories['categories_id'];
	}
}

//------------------------
if ($cPath) {
	$new_path = '';
	$id = split('_', $cPath);
	reset($id);
	while (list ($key, $value) = each($id)) {
		unset ($prev_id);
		unset ($first_id);
		$categories_query = "select c.categories_id, cd.categories_name, c.parent_id from ".TABLE_CATEGORIES." c, ".TABLE_CATEGORIES_DESCRIPTION." cd where c.categories_status = '1' and c.parent_id = '".$value."' ".$group_check." and c.categories_id = cd.categories_id and cd.language_id='".$_SESSION['languages_id']."' order by sort_order, cd.categories_name";
		$categories_query = osDBquery($categories_query);
		$category_check = os_db_num_rows($categories_query, true);
		if ($category_check > 0) {
			$new_path .= $value;
			while ($row = os_db_fetch_array($categories_query, true)) {
				$foo[$row['categories_id']] = array ('name' => $row['categories_name'], 'parent' => $row['parent_id'], 'level' => $key +1, 'path' => $new_path.'_'.$row['categories_id'], 'next_id' => false);

				if (isset ($prev_id)) {
					$foo[$prev_id]['next_id'] = $row['categories_id'];
				}

				$prev_id = $row['categories_id'];

				if (!isset ($first_id)) {
					$first_id = $row['categories_id'];
				}

				$last_id = $row['categories_id'];
			}
			$foo[$last_id]['next_id'] = $foo[$value]['next_id'];
			$foo[$value]['next_id'] = $first_id;
			$new_path .= '_';
		} else {
			break;
		}
	}
}

os_show_category($first_element);

$box_smarty->assign('BOX_CONTENT', $categories_string);

}

// set cache ID
if (!$cache) {
	$box_categories = $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_categories.html');
} else {
	$box_categories = $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_categories.html', $cache_id);
}

$osTemplate->assign('box_CATEGORIES', $box_categories);
?>