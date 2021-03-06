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
$box_content = '';
$box_price_string = '';

if (strstr($PHP_SELF, FILENAME_CHECKOUT_PAYMENT) or strstr($PHP_SELF, FILENAME_CHECKOUT_CONFIRMATION) or strstr($PHP_SELF, FILENAME_CHECKOUT_SHIPPING))
	$box_smarty->assign('deny_cart', 'true');

if ($_SESSION['cart']->count_contents() > 0) {
	$products = $_SESSION['cart']->get_products();
	$products_in_cart = array ();
	$qty = 0;
	for ($i = 0, $n = sizeof($products); $i < $n; $i ++) {
		$qty += $products[$i]['quantity'];
		$products_in_cart[] = array ('QTY' => $products[$i]['quantity'], 
									 'LINK' => os_href_link(FILENAME_PRODUCT_INFO, os_product_link($products[$i]['id'],$products[$i]['name'])), 
									 'NAME' => $products[$i]['name']);

	}
	$box_smarty->assign('PRODUCTS', $qty);
	$box_smarty->assign('empty', 'false');
} else {
	// cart empty
	$box_smarty->assign('empty', 'true');
}

if ($_SESSION['cart']->count_contents() > 0) {
	
	$total =$_SESSION['cart']->show_total();
if ($_SESSION['customers_status']['customers_status_ot_discount_flag'] == '1' && $_SESSION['customers_status']['customers_status_ot_discount'] != '0.00') {
	if ($_SESSION['customers_status']['customers_status_show_price_tax'] == 0 && $_SESSION['customers_status']['customers_status_add_tax_ot'] == 1) {
		$price = $total-$_SESSION['cart']->show_tax(false);
	} else {
		$price = $total;
	}
	$discount = $osPrice->GetDC($price, $_SESSION['customers_status']['customers_status_ot_discount']);
	$box_smarty->assign('DISCOUNT', $osPrice->Format(($discount * (-1)), $price_special = 1, $calculate_currencies = false));
	
}


if ($_SESSION['customers_status']['customers_status_show_price'] == '1') {
	if ($_SESSION['customers_status']['customers_status_show_price_tax'] == 0 && $_SESSION['customers_status']['customers_status_add_tax_ot'] == 0) $total-=$discount;
	if ($_SESSION['customers_status']['customers_status_show_price_tax'] == 0 && $_SESSION['customers_status']['customers_status_add_tax_ot'] == 1) $total-=$discount;
	if ($_SESSION['customers_status']['customers_status_show_price_tax'] == 1) $total-=$discount;
	$box_smarty->assign('TOTAL', $osPrice->Format($total, true));
} 
	

	$box_smarty->assign('UST', $_SESSION['cart']->show_tax());
	
	if (SHOW_SHIPPING=='true') { 
			$box_smarty->assign('SHIPPING_INFO',' '.SHIPPING_EXCL.'<a href="javascript:newWin=void(window.open(\''.os_href_link(FILENAME_POPUP_CONTENT, 'coID='.SHIPPING_INFOS).'\', \'popup\', \'toolbar=0, width=640, height=600\'))"> '.SHIPPING_COSTS.'</a>');	
	}
}
if (ACTIVATE_GIFT_SYSTEM == 'true') {
	$box_smarty->assign('ACTIVATE_GIFT', 'true');
}

// GV Code Start
if (isset ($_SESSION['customer_id'])) {
	$gv_query = os_db_query("select amount from ".TABLE_COUPON_GV_CUSTOMER." where customer_id = '".$_SESSION['customer_id']."'");
	$gv_result = os_db_fetch_array($gv_query);
	if ($gv_result['amount'] > 0) {
		$box_smarty->assign('GV_AMOUNT', $osPrice->Format($gv_result['amount'], true, 0, true));
		$box_smarty->assign('GV_SEND_TO_FRIEND_LINK', '<a href="'.os_href_link(FILENAME_GV_SEND).'">');
	}
}
if (isset ($_SESSION['gv_id'])) {
	$gv_query = os_db_query("select coupon_amount from ".TABLE_COUPONS." where coupon_id = '".$_SESSION['gv_id']."'");
	$coupon = os_db_fetch_array($gv_query);
	$box_smarty->assign('COUPON_AMOUNT2', $osPrice->Format($coupon['coupon_amount'], true, 0, true));
}
if (isset ($_SESSION['cc_id'])) {
	$box_smarty->assign('COUPON_HELP_LINK', '<a href="javascript:popupWindow(\''.os_href_link(FILENAME_POPUP_COUPON_HELP, 'cID='.$_SESSION['cc_id']).'\')">');
}
// GV Code End
$box_smarty->assign('LINK_CART', os_href_link(FILENAME_SHOPPING_CART, '', 'SSL'));
$box_smarty->assign('products', $products_in_cart);

$box_smarty->caching = 0;
$box_smarty->assign('language', $_SESSION['language']);
$box_shopping_cart = $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_cart.html');
$osTemplate->assign('box_CART', $box_shopping_cart);
?>