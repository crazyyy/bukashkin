<?php /* Smarty version 2.6.24, created on 2011-05-05 14:59:07
         compiled from /home/cp500892/public_html/bukashkin.ru/media/mail/ru/order_mail.txt */ ?>
Уважаемый (ая) <?php echo $this->_tpl_vars['NAME']; ?>
!
Вы оформили заказ в нашем интернет-магазине!

Пожалуйста, проверьте правильность следующей информации:

Вы заказали:

<?php $_from = $this->_tpl_vars['order_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order_values']):
        $this->_foreach['aussen']['iteration']++;
?>
<?php echo $this->_tpl_vars['order_values']['PRODUCTS_QTY']; ?>
 x <?php echo $this->_tpl_vars['order_values']['PRODUCTS_NAME']; ?>
<?php if ($this->_tpl_vars['order_values']['PRODUCTS_MODEL'] != ''): ?> (<?php echo $this->_tpl_vars['order_values']['PRODUCTS_MODEL']; ?>
) <?php endif; ?> <?php echo $this->_tpl_vars['order_values']['PRODUCTS_PRICE']; ?>

<?php if ($this->_tpl_vars['order_values']['PRODUCTS_SHIPPING_TIME'] != ''): ?>Время доставки: <?php echo $this->_tpl_vars['order_values']['PRODUCTS_SHIPPING_TIME']; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['order_values']['PRODUCTS_ATTRIBUTES'] != ''): ?><?php echo $this->_tpl_vars['order_values']['PRODUCTS_ATTRIBUTES']; ?>
<?php endif; ?>

<?php endforeach; endif; unset($_from); ?>

<?php $_from = $this->_tpl_vars['order_total']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order_total_values']):
        $this->_foreach['aussen']['iteration']++;
?>
<?php echo $this->_tpl_vars['order_total_values']['TITLE']; ?>
<?php echo $this->_tpl_vars['order_total_values']['TEXT']; ?>

<?php endforeach; endif; unset($_from); ?>

Выбранный Вами способ оплаты: <?php if ($this->_tpl_vars['PAYMENT_METHOD']): ?><?php echo $this->_tpl_vars['PAYMENT_METHOD']; ?>
<?php endif; ?>

<?php echo $this->_tpl_vars['PAYMENT_INFO_TXT']; ?>


<?php if ($this->_tpl_vars['SHIPPING_METHOD']): ?>
Доставка: <?php echo $this->_tpl_vars['SHIPPING_METHOD']; ?>


Адрес доставки вашего заказа:
<?php echo $this->_tpl_vars['address_label_shipping']; ?>


<?php endif; ?>

<?php if ($this->_tpl_vars['COMMENTS']): ?>
Ваши комментарии к заказу:
<?php echo $this->_tpl_vars['COMMENTS']; ?>

<?php endif; ?>

Номер заказа: <?php echo $this->_tpl_vars['oID']; ?>

Ваш контактный телефон: <?php echo $this->_tpl_vars['PHONE']; ?>

Электронный адрес: <?php echo $this->_tpl_vars['EMAIL']; ?>
.
<?php if ($this->_tpl_vars['customer_extra_fields']): ?><?php echo $this->_tpl_vars['customer_extra_fields']; ?>
<?php endif; ?>

В случае, если Вы обнаружите ошибку, сделанную при оформлении заказа -
сообщите нам об этом как можно скорее в ответном письме.