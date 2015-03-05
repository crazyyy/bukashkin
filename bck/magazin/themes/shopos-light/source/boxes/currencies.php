<?php
/*
#####################################
# ShopOS: Скрипты интернет-магазина
#  Copyright (c) 2008-2009
# http://shopos.ru
# Ver. 1.0.1
#####################################
*/

  if (isset($osPrice) && is_object($osPrice)) {

    $count_cur='';
    reset($osPrice->currencies);
    $currencies_array = array();
    while (list($key, $value) = each($osPrice->currencies)) {
    $count_cur++;
      $currencies_array[] = array('id' => $key, 'text' => $value['title']);
    }

    $hidden_get_variables = '';
    reset($_GET);
    while (list($key, $value) = each($_GET)) {
      if ( ($key != 'currency') && ($key != os_session_name()) && ($key != 'x') && ($key != 'y') ) {
        $hidden_get_variables .= os_draw_hidden_field($key, $value);
      }
    }


  }


  // dont show box if there's only 1 currency
  if ($count_cur > 1 ) {

  // reset var
  $box_smarty = new osTemplate;
  $box_smarty->assign('tpl_path', _HTTP_THEMES_C);
  $box_content='';
  $box_content=os_draw_form('currencies', os_href_link(basename($PHP_SELF), '', $request_type, false), 'get').os_draw_pull_down_menu('currency', $currencies_array, $_SESSION['currency'], 'onChange="this.form.submit();" style="width: 100%"') . $hidden_get_variables . os_hide_session_id().'</form>';


  $box_smarty->assign('BOX_CONTENT', $box_content);
  $box_smarty->assign('language', $_SESSION['language']);
    	  // set cache ID
   if (!CacheCheck()) {
  $box_smarty->caching = 0;
  $box_currencies= $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_currencies.html');
  } else {
  $box_smarty->caching = 1;	
  $box_smarty->cache_lifetime=CACHE_LIFETIME;
  $box_smarty->cache_modified_check=CACHE_CHECK;
  $cache_id = $_SESSION['language'].$_SESSION['currency'];
  $box_currencies= $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_currencies.html',$cache_id);
  }

  $osTemplate->assign('box_CURRENCIES',$box_currencies);

  }
 ?>