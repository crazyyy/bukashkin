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
$box_content='';
$box_smarty->assign('tpl_path', _HTTP_THEMES_C);
$box_smarty->assign('FORM_ACTION','<form id="quick_add" method="post" action="' . os_href_link(basename($PHP_SELF), os_get_all_get_params(array('action')) . 'action=add_a_quickie', 'NONSSL') . '">');
$box_smarty->assign('INPUT_FIELD',os_draw_input_field('quickie','','size="17"'));
$box_smarty->assign('SUBMIT_BUTTON',os_image_submit('button_add_quick.gif', BOX_HEADING_ADD_PRODUCT_ID));
$box_smarty->assign('FORM_END','</form>');
$box_smarty->assign('BOX_CONTENT', $box_content);
$box_smarty->assign('language', $_SESSION['language']);
// set cache ID
if (!CacheCheck()) 
{
   $box_smarty->caching = 0;
   $box_add_a_quickie= $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_add_a_quickie.html');
} 
else 
{
   $box_smarty->caching = 1;	
   $box_smarty->cache_lifetime=CACHE_LIFETIME;
   $box_smarty->cache_modified_check=CACHE_CHECK;
   $cache_id = $_SESSION['language'];
   $box_add_a_quickie= $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_add_a_quickie.html',$cache_id);
}
  
$osTemplate->assign('box_ADD_QUICKIE',$box_add_a_quickie);
?>