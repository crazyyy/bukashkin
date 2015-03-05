<?php
/*
#####################################
#  ShopOS: Shopping Cart Software.
#  Copyright (c) 2008-2010
#  http://www.shopos.ru
#  http://www.shoposs.com
#  Ver. 1.0.0
#####################################
*/
/*  Copyright (c) 2010 VaM Shop, http://vamshop.com */

defined('_VALID_OS') or die('Direct Access to this location is not allowed.');

function get_var($name, $default = 'none') {
  return (isset($_GET[$name])) ? $_GET[$name] : ((isset($_POST[$name])) ? $_POST[$name] : $default);
}

require (_CLASS.'order.php');

$crc = get_var('signature');

$inv_id = get_var('order_id');
$order = new order($inv_id);
$order_sum = $order->info['total'];

$hash_source = "|".$_POST['version']."|".MODULE_PAYMENT_LIQPAY_SECRET_KEY."|".$_POST['action_name']."|".$_POST['sender_phone']."|".MODULE_PAYMENT_LIQPAY_ID."|".$_POST['amount']."|".$_POST['currency']."|".$_POST['order_id']."|".$_POST['transaction_id']."|".$_POST['status']."|".$_POST['code']."|";
$hash = base64_encode(sha1($hash_source,1));

// checking and handling
if ($hash == $crc) {
if (number_format($_POST['amount'],0) == number_format($order->info['total'],0)) {
  $sql_data_array = array('orders_status' => MODULE_PAYMENT_LIQPAY_ORDER_STATUS_ID);
  os_db_perform('orders', $sql_data_array, 'update', "orders_id='".$inv_id."'");

  $sql_data_arrax = array('orders_id' => $inv_id,
                          'orders_status_id' => MODULE_PAYMENT_LIQPAY_ORDER_STATUS_ID,
                          'date_added' => 'now()',
                          'customer_notified' => '0',
                          'comments' => 'LiqPAY accepted this order payment');
  os_db_perform('orders_status_history', $sql_data_arrax);

  echo 'OK'.$inv_id;
}
}

?>