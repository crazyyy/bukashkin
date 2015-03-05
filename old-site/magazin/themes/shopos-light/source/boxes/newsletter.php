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
$box_content='';


$box_smarty->assign('FORM_ACTION', os_draw_form('sign_in', os_href_link(FILENAME_NEWSLETTER, '', 'NONSSL')));
$box_smarty->assign('FIELD_EMAIL',os_draw_input_field('email', '', 'size="25" maxlength="50"'));
$box_smarty->assign('BUTTON',os_image_submit('button_login_small.gif', IMAGE_BUTTON_LOGIN));
$box_smarty->assign('FORM_END','</form>');
	$box_smarty->assign('language', $_SESSION['language']);
       	  // set cache ID
   if (!CacheCheck()) {
  $box_smarty->caching = 0;
  $box_newsletter= $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_newsletter.html');
  } else {
  $box_smarty->caching = 1;	
  $box_smarty->cache_lifetime=CACHE_LIFETIME;
  $box_smarty->cache_modified_check=CACHE_CHECK;
  $cache_id = $_SESSION['language'];
  $box_newsletter= $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_newsletter.html',$cache_id);
  }

    $osTemplate->assign('box_NEWSLETTER',$box_newsletter);
?>