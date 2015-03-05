<?php
/*
#####################################
# ShopOS: Скрипты интернет-магазина
#  Copyright (c) 2008-2009
# http://shopos.ru
# Ver. 1.0.1
#####################################
*/

  if (!isset($lng) && !is_object($lng)) {
    include(_CLASS . 'language.php');
    $lng = new language;
  }

  $languages_string = '';
  $count_lng='';
  reset($lng->catalog_languages);
  while (list($key, $value) = each($lng->catalog_languages)) {
  $count_lng++;
//    $languages_string .= ' <a href="' . os_href_link(basename($PHP_SELF), 'language=' . $key.'&'.os_get_all_get_params(array('language', 'currency')), $request_type) . '">' . os_image('lang/' .  $value['directory'] .'/' . $value['image'], $value['name']) . '</a> ';

    $languages_string .= ' <a href="' . os_href_link(basename($PHP_SELF), 'language=' . $key.'&'.os_get_all_get_params(array('language', 'currency')), $request_type) . '">' . os_image(_HTTP_THEMES_C.'img/'. $value['name']. '.png', $value['name']) . '</a> ';


  }

  // dont show box if there's only 1 language
  if ($count_lng > 1 ) {

 $box_smarty = new osTemplate;
 $box_smarty->assign('tpl_path', _HTTP_THEMES_C); 
 $box_content='';
 $box_smarty->assign('BOX_CONTENT', $languages_string);
 $box_smarty->assign('language', $_SESSION['language']);


    	  // set cache ID

  $box_smarty->caching = 0;
  $box_languages= $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_languages.html');
  	

    $osTemplate->assign('box_LANGUAGES',$box_languages);
  }
   ?>