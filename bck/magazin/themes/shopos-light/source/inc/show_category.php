<?php
/*
#####################################
#  ShopOS: Скрипт интернет магазина
#  Copyright (c) 2008-2009              
#  http://www.shopos.ru                 
# Ver. 1.0.1
#####################################
*/

function os_show_category($counter) 
{
    global $foo, $categories_string, $id;


    // image for first level
    $img_1_no='<img src="'._HTTP_THEMES_C.'img/icon_arrow.jpg" alt="" />&nbsp;';

    for ($a=0; $a<$foo[$counter]['level']; $a++) {

      if ($foo[$counter]['level']=='1') {
      $categories_string .= "&nbsp;-&nbsp;";
      }

      $categories_string .= "&nbsp;&nbsp;";

    }
    if ($foo[$counter]['level']=='') {
    if (strlen($categories_string)=='0') {
    $categories_string .='<table width="100%"><tr><td class="moduleRow">';
    } else {
    $categories_string .='</td></tr></table><table width="100%"><tr><td class="moduleRow">';
    }

    $categories_string .= $img_1;
    $categories_string .= '<b><a href="';
    } else {
    $categories_string .= '<a href="';
    }

	$cPath_new=os_category_link($counter,$foo[$counter]['name']);
  
    $categories_string .= os_href_link(FILENAME_DEFAULT, $cPath_new);
    $categories_string .= '">';

    if ( ($id) && (in_array($counter, $id)) ) {
      $categories_string .= '<b>';
    }

    // display category name
    $categories_string .= $foo[$counter]['name'];

    if ( ($id) && (in_array($counter, $id)) ) {
      $categories_string .= '</b>';
    }

    if ($foo[$counter]['level']=='') {
    $categories_string .= '</a></b>';
    } else {
    $categories_string .= '</a>';
    }

    if (SHOW_COUNTS == 'true') {
      $products_in_category = os_count_products_in_category($counter);
      if ($products_in_category > 0) {
        $categories_string .= '&nbsp;(' . $products_in_category . ')';
      }
    }

    $categories_string .= '<br />';

    if ($foo[$counter]['next_id']) {
        os_show_category($foo[$counter]['next_id']);
    } else {
        $categories_string .= '</td></tr></table>';
    }
  }

?>