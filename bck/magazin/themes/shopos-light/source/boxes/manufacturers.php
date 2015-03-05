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
$box_content = '';

$box_smarty->assign('language', $_SESSION['language']);
// set cache ID
if (!CacheCheck()) {
	$cache = false;
	$box_smarty->caching = 0;
} else {
	$cache = true;
	$box_smarty->caching = 1;
	$box_smarty->cache_lifetime = CACHE_LIFETIME;
	$box_smarty->cache_modified_check = CACHE_CHECK;
	$cache_id = $_SESSION['language'].(int) $_GET['manufacturers_id'];
}

if (!$box_smarty->is_cached(CURRENT_TEMPLATE.'/boxes/box_manufacturers.html', $cache_id) || !$cache) {
	$box_smarty->assign('tpl_path', _HTTP_THEMES_C);


	$manufacturers_query = "select distinct m.manufacturers_id, m.manufacturers_name from ".TABLE_MANUFACTURERS." as m, ".TABLE_PRODUCTS." as p where m.manufacturers_id=p.manufacturers_id order by m.manufacturers_name";

	$manufacturers_query = osDBquery($manufacturers_query);
	if (os_db_num_rows($manufacturers_query, true) <= MAX_DISPLAY_MANUFACTURERS_IN_A_LIST) {
		// Display a list
		$manufacturers_list = '';
		while ($manufacturers = os_db_fetch_array($manufacturers_query, true)) {
			$manufacturers_name = ((strlen($manufacturers['manufacturers_name']) > MAX_DISPLAY_MANUFACTURER_NAME_LEN) ? substr($manufacturers['manufacturers_name'], 0, MAX_DISPLAY_MANUFACTURER_NAME_LEN).'..' : $manufacturers['manufacturers_name']);
			if (isset ($_GET['manufacturers_id']) && ($_GET['manufacturers_id'] == $manufacturers['manufacturers_id']))
				$manufacturers_name = '<b>'.$manufacturers_name.'</b>';
			$manufacturers_list .= '<a href="'.os_href_link(FILENAME_DEFAULT, 'manufacturers_id='.$manufacturers['manufacturers_id']).'">'.$manufacturers_name.'</a><br>';
		}
		$box_content = $manufacturers_list;
	} else {
		// Display a drop-down
		$manufacturers_array = array ();
		if (MAX_MANUFACTURERS_LIST < 2) {
			$manufacturers_array[] = array ('id' => '', 'text' => PULL_DOWN_DEFAULT);
		}

		while ($manufacturers = os_db_fetch_array($manufacturers_query, true)) {
			$manufacturers_name = ((strlen($manufacturers['manufacturers_name']) > MAX_DISPLAY_MANUFACTURER_NAME_LEN) ? substr($manufacturers['manufacturers_name'], 0, MAX_DISPLAY_MANUFACTURER_NAME_LEN).'..' : $manufacturers['manufacturers_name']);
			$manufacturers_array[] = array ('id' => $manufacturers['manufacturers_id'], 'text' => $manufacturers_name);
		}

		$box_content = os_draw_form('manufacturers', os_href_link(FILENAME_DEFAULT, '', 'NONSSL', false), 'get').os_draw_pull_down_menu('manufacturers_id', $manufacturers_array, $_GET['manufacturers_id'], 'onchange="this.form.submit();" size="'.MAX_MANUFACTURERS_LIST.'" style="width: 100%"').os_hide_session_id().'</form>';

	}

	if ($box_content != '')
		$box_smarty->assign('BOX_CONTENT', $box_content);

}
// set cache ID
if (!$cache) {
	$box_manufacturers = $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_manufacturers.html');
} else {
	$box_manufacturers = $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_manufacturers.html', $cache_id);
}

$osTemplate->assign('box_MANUFACTURERS', $box_manufacturers);
?>