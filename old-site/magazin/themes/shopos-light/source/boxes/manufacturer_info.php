<?php
/*
#####################################
# ShopOS: ������� ��������-��������
#  Copyright (c) 2008-2009
# http://shopos.ru
# Ver. 1.0.1
#####################################
*/

$box_smarty = new osTemplate;
$box_smarty->assign('tpl_path', _HTTP_THEMES_C);
$box_content='';


    $manufacturer_query = osDBquery("select m.manufacturers_id, m.manufacturers_name, m.manufacturers_image, mi.manufacturers_url from " . TABLE_MANUFACTURERS . " m left join " . TABLE_MANUFACTURERS_INFO . " mi on (m.manufacturers_id = mi.manufacturers_id and mi.languages_id = '" . (int)$_SESSION['languages_id'] . "'), " . TABLE_PRODUCTS . " p  where p.products_id = '" . $product->data['products_id'] . "' and p.manufacturers_id = m.manufacturers_id");
    if (os_db_num_rows($manufacturer_query,true)) {
      $manufacturer = os_db_fetch_array($manufacturer_query,true);

      $image='';
      if (os_not_null($manufacturer['manufacturers_image'])) $image=DIR_WS_IMAGES . $manufacturer['manufacturers_image'];
      $box_smarty->assign('IMAGE',$image);
      $box_smarty->assign('NAME',$manufacturer['manufacturers_name']);
      
        if ($manufacturer['manufacturers_url']!='')$box_smarty->assign('URL','<a href="' . os_href_link(FILENAME_REDIRECT, 'action=manufacturer&'.os_manufacturer_link($manufacturer['manufacturers_id'],$manufacturer['manufacturers_name'])) . '" onclick="window.open(this.href); return false;">' . sprintf(BOX_MANUFACTURER_INFO_HOMEPAGE, $manufacturer['manufacturers_name']) . '</a>');
        $box_smarty->assign('LINK_MORE','<a href="' . os_href_link(FILENAME_DEFAULT, os_manufacturer_link($manufacturer['manufacturers_id'],$manufacturer['manufacturers_name'])) . '">' . BOX_MANUFACTURER_INFO_OTHER_PRODUCTS . '</a>');

    }
  



 	$box_smarty->assign('language', $_SESSION['language']);
    	  // set cache ID
   if (!CacheCheck()) {
  $box_smarty->caching = 0;
  $box_manufacturers_info= $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_manufacturers_info.html');
  } else {
  $box_smarty->caching = 1;	
  $box_smarty->cache_lifetime=CACHE_LIFETIME;
  $box_smarty->cache_modified_check=CACHE_CHECK;
  $cache_id = $_SESSION['language'].$product->data['products_id'];
  $box_manufacturers_info= $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_manufacturers_info.html',$cache_id);
  }
    if ($manufacturer['manufacturers_name']!='')  $osTemplate->assign('box_MANUFACTURERS_INFO',$box_manufacturers_info);
    
?>