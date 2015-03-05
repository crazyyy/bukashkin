<?php /* Smarty version 2.6.24, created on 2011-05-05 14:59:04
         compiled from shopos-light/module/checkout_confirmation.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/checkout_confirmation.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'checkout_confirmation'), $this);?>
 

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr valign="top"> 
		<td class="contentsTopics"><?php echo $this->_config[0]['vars']['heading_confirmation']; ?>
</td>
	</tr>
</table>
<?php if ($this->_tpl_vars['IP_LOG'] == 'true'): ?> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="main">&nbsp;</td>
  </tr>
  <tr>
    <td><strong><?php echo $this->_config[0]['vars']['text_ip']; ?>
</strong></td>
    <td class="inputRequirement"><strong><?php echo $this->_tpl_vars['CUSTOMERS_IP']; ?>
</strong></td>
  </tr>
</table>
<?php endif; ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="main">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="top" class="main" style="border-top: 1px solid; border-color: #cccccc;"><strong><?php echo $this->_config[0]['vars']['text_shipping_address']; ?>
</strong><em><a href="<?php echo $this->_tpl_vars['SHIPPING_ADDRESS_EDIT']; ?>
"><font color="#009933"><?php echo $this->_config[0]['vars']['text_edit']; ?>
</font></a></em><br /><?php echo $this->_tpl_vars['DELIVERY_LABEL']; ?>
</td>
    <td valign="top" class="main" style="border-top: 1px solid; border-color: #cccccc;"><?php if ($this->_tpl_vars['BILLING_LABEL']): ?><strong><?php echo $this->_config[0]['vars']['text_payment_address']; ?>
</strong><em><a href="<?php echo $this->_tpl_vars['BILLING_ADDRESS_EDIT']; ?>
"><font color="#009933"><?php echo $this->_config[0]['vars']['text_edit']; ?>
</font></a></em><br /><?php echo $this->_tpl_vars['BILLING_LABEL']; ?>
<?php endif; ?></td>
  </tr>
  <tr>
    <td class="main">&nbsp;</td>
  </tr>
</table>
<?php if ($this->_tpl_vars['SHIPPING_METHOD']): ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="main"><strong><?php echo $this->_config[0]['vars']['text_shipping_method']; ?>
</strong>&nbsp;<?php echo $this->_tpl_vars['SHIPPING_METHOD']; ?>
&nbsp;<a href="<?php echo $this->_tpl_vars['SHIPPING_EDIT']; ?>
" class="confirmationEdit"><?php echo $this->_config[0]['vars']['text_edit']; ?>
</a></td>
  </tr>
</table> 
<?php endif; ?>

<?php if ($this->_tpl_vars['PAYMENT_METHOD'] != ''): ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="main"><strong><?php echo $this->_config[0]['vars']['text_payment_method']; ?>
</strong>&nbsp;<?php echo $this->_tpl_vars['PAYMENT_METHOD']; ?>
&nbsp;<a href="<?php echo $this->_tpl_vars['PAYMENT_EDIT']; ?>
" class="confirmationEdit"><?php echo $this->_config[0]['vars']['text_edit']; ?>
</a></td>
  </tr>
</table> 
<?php endif; ?>
<?php if ($this->_tpl_vars['ORDER_COMMENTS'] != ''): ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="main">&nbsp;</td>
  </tr>
  <tr>
    <td class="main"><strong><?php echo $this->_config[0]['vars']['text_comments']; ?>
</strong>&nbsp;<a href="<?php echo $this->_tpl_vars['PAYMENT_EDIT']; ?>
" class="confirmationEdit"><?php echo $this->_config[0]['vars']['text_edit']; ?>
</a></td>
  </tr>
</table> 
<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr> 
    <td style="border: 1px solid; border-color: #cccccc;" class="main"><?php echo $this->_tpl_vars['ORDER_COMMENTS']; ?>
</td>
  </tr>
</table>
<?php endif; ?> 
<?php if ($this->_tpl_vars['PAYMENT_INFORMATION'] != ''): ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="main">&nbsp;</td>
  </tr>
  <tr>
    <td class="main"><strong><?php echo $this->_config[0]['vars']['text_payment_info']; ?>
</strong></td>
  </tr>
</table> 
<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr> 
    <td style="border: 1px solid; border-color: #cccccc;" class="main"><?php echo $this->_tpl_vars['PAYMENT_INFORMATION']; ?>
</td>
  </tr>
</table>
<?php endif; ?> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="main">&nbsp;</td>
  </tr>
  <tr>
    <td class="main"><strong><?php echo $this->_config[0]['vars']['text_products']; ?>
</strong>&nbsp;<a href="<?php echo $this->_tpl_vars['PRODUCTS_EDIT']; ?>
" class="confirmationEdit"><?php echo $this->_config[0]['vars']['text_edit']; ?>
</a></td>
  </tr>
</table> 
<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr> 
    <td style="border: 1px solid; border-color: #cccccc;" class="main"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="main"><?php echo $this->_tpl_vars['PRODUCTS_BLOCK']; ?>
</td>
        </tr>
        <tr>
          <td class="main" style="border-top: 1px solid; border-color: #cccccc;" align="right"><?php echo $this->_tpl_vars['TOTAL_BLOCK']; ?>
</td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right"><?php echo $this->_tpl_vars['CHECKOUT_FORM']; ?>
 <?php if ($this->_tpl_vars['MODULE_BUTTONS'] != ''): ?> <?php echo $this->_tpl_vars['MODULE_BUTTONS']; ?>
<br /><?php endif; ?> <?php echo $this->_tpl_vars['CHECKOUT_BUTTON']; ?>
<br /><br /></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td class="main">&nbsp;</td>
	</tr>
	<tr>
		<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td>
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td align="right"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_silver.gif" width="1" height="5" alt="" /></td>
								<td><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_silver.gif" width="100%" height="1" alt="" /></td>
							</tr>
						</table>
					</td>
					<td><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_silver.gif" width="100%" height="1" alt="" /></td>
					<td>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_silver.gif" width="100%" height="1" alt="" /></td>
								<td class="onepxwidth"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/checkout_bullet.gif" alt="" /></td>
								<td><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_silver.gif" width="100%" height="1" alt="" /></td>
							</tr>
						</table>
					</td>
					<td>
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_silver.gif" width="100%" height="1" alt="" /></td>
								<td><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_silver.gif" width="1" height="5" alt="" /></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td align="center" class="checkoutBarTo"><?php echo $this->_config[0]['vars']['text_shipping_info']; ?>
</td>
					<td align="center" class="checkoutBarTo"><?php echo $this->_config[0]['vars']['text_payment_info']; ?>
</td>
					<td align="center" class="checkoutBarCurrent"><?php echo $this->_config[0]['vars']['text_confirm']; ?>
</td>
					<td align="center" class="checkoutBarTo"><?php echo $this->_config[0]['vars']['text_finished']; ?>
</td>
				</tr>
			</table>
		</td>
	</tr>
</table>