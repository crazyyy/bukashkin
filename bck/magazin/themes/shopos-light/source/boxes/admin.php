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
$flag='';
$box_smarty->assign('tpl_path', _HTTP_THEMES_C);
$orders_contents = '';
$orders_status_validating = os_db_num_rows(os_db_query("select orders_status from " . TABLE_ORDERS ." where orders_status ='0'"));
$orders_contents .='<a href="' . os_href_link_admin(FILENAME_ORDERS, 'selected_box=customers&status=0', 'SSL') . '">' . TEXT_VALIDATING . '</a>: ' . $orders_status_validating . '<br />'; 
$orders_status_query = os_db_query("select orders_status_name, orders_status_id from " . TABLE_ORDERS_STATUS . " where language_id = '" . (int)$_SESSION['languages_id'] . "'");
  
while ($orders_status = os_db_fetch_array($orders_status_query)) 
{
   $orders_pending_query = os_db_query("select count(*) as count from " . TABLE_ORDERS . " where orders_status = '" . $orders_status['orders_status_id'] . "'");
   $orders_pending = os_db_fetch_array($orders_pending_query);
   $orders_contents .= '<a href="' . os_href_link_admin(FILENAME_ORDERS, 'selected_box=customers&status=' . $orders_status['orders_status_id'], 'SSL') . '">' . $orders_status['orders_status_name'] . '</a>: ' . $orders_pending['count'] . '<br />';
}

$orders_contents = substr($orders_contents, 0, -6);
$customers_query = os_db_query("select count(*) as count from " . TABLE_CUSTOMERS);
$customers = os_db_fetch_array($customers_query);
$products_query = os_db_query("select count(*) as count from " . TABLE_PRODUCTS . " where products_status = '1'");
$products = os_db_fetch_array($products_query);
$reviews_query = os_db_query("select count(*) as count from " . TABLE_REVIEWS);
$reviews = os_db_fetch_array($reviews_query);
$admin_image = '<a href="' . os_href_link_admin(FILENAME_START,'', 'SSL').'">'.os_image_button('button_admin.gif', IMAGE_BUTTON_ADMIN).'</a>';

if ($product->isProduct()) 
{
   $admin_link='<a href="' . os_href_link_admin(FILENAME_EDIT_PRODUCTS, 'cPath=' . $cPath . '&pID=' . $product->data['products_id']) . '&action=new_product' . '" onclick="window.open(this.href); return false;">' . os_image_button('edit_product.gif', IMAGE_BUTTON_PRODUCT_EDIT) . '</a>';
}

$box_content= '<b>' . BOX_TITLE_STATISTICS . '</b><br />' . $orders_contents . '<br />' .
                                         BOX_ENTRY_CUSTOMERS . ' ' . $customers['count'] . '<br />' .
                                         BOX_ENTRY_PRODUCTS . ' ' . $products['count'] . '<br />' .
                                         BOX_ENTRY_REVIEWS . ' ' . $reviews['count'] .'<br />' .
                                         $admin_image . '<br />' .$admin_link;

if ($flag==true) 
{
   define('SEARCH_ENGINE_FRIENDLY_URLS',true);
}

$box_smarty->assign('BOX_CONTENT', $box_content);
$box_smarty->caching = 0;
$box_smarty->assign('language', $_SESSION['language']);
$box_admin= $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_admin.html');
$osTemplate->assign('box_ADMIN',$box_admin);
?>