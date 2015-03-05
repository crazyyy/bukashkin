<?php /* Smarty version 2.6.24, created on 2011-05-05 14:58:56
         compiled from shopos-light/module/gift_cart.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/gift_cart.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'gift_cart'), $this);?>


<?php if ($this->_tpl_vars['ACTIVATE_GIFT'] == 'true'): ?>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<table width="80%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td class="main">&nbsp;</td>
	</tr>
</table>
<table width="80%"  border="0" style="border: 1px solid; border-color:#000000;" class="boxTextBGII">
	<tr>
		<td class="main" align="center"><strong><?php echo $this->_config[0]['vars']['title']; ?>
</strong></td>
	</tr>
<?php if ($this->_tpl_vars['GV_AMOUNT'] != ''): ?>
	<tr>
		<td class="main" align="center"><?php echo $this->_config[0]['vars']['text_info']; ?>
</td>
	</tr>
	<tr>
		<td class="main" align="center"><?php echo $this->_config[0]['vars']['voucher_balance']; ?>
 <strong><?php echo $this->_tpl_vars['GV_AMOUNT']; ?>
</strong></td>
	</tr>
	<tr>
		<td class="main" align="center"><?php echo $this->_config[0]['vars']['text_send_to_friend']; ?>
 <a href="<?php echo $this->_tpl_vars['GV_SEND_TO_FRIEND_LINK']; ?>
"><?php echo $this->_config[0]['vars']['box_send_to_friend']; ?>
</a></td>
	</tr>	
<?php endif; ?>
<?php if ($this->_tpl_vars['COUPON_AMOUNT2'] != ''): ?>
	<tr>
		<td class="main" align="center"><?php echo $this->_config[0]['vars']['voucher_redeemed']; ?>
</td>
	</tr>
	<tr>
		<td class="main" align="center"><?php echo $this->_tpl_vars['COUPON_AMOUNT2']; ?>
</td>
	</tr>
	<tr>
		<td class="main">&nbsp;</td>
	</tr>
	<tr>
		<td class="main">&nbsp;</td>
	</tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['COUPON_HELP_LINK'] != ''): ?>
	<tr>
		<td class="main">
			<table width="100%" border="0">
				<tr class="headerMessage">
					<td class="main" align="center"><?php echo $this->_config[0]['vars']['cart_coupon']; ?>
 <?php echo $this->_tpl_vars['COUPON_HELP_LINK']; ?>
 <?php echo $this->_config[0]['vars']['cart_coupon_info']; ?>
</a></td>
				</tr>
			</table>
		</td>
	</tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['C_FLAG'] == 'true'): ?>
  <tr>
	<td class="main" align="center">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td class="main" align="center"><?php echo $this->_config[0]['vars']['text_gift']; ?>
</td>
				</tr>
				<tr>
					<td class="main">&nbsp;</td>
				</tr>
			</table>
			<table border="0" cellpadding="2" cellspacing="0">
				<tr valign="middle">
					<td class="main"><?php echo $this->_config[0]['vars']['text_code']; ?>
</td>
					<td class="main"><?php echo $this->_tpl_vars['INPUT_CODE']; ?>
</td>
					<td class="main"><?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>
</td>
				</tr>
			</table>
		</td>
	</tr>
<?php else: ?>
	<tr>
		<td class="main" align="center">
			<table border="0" cellpadding="0" cellspacing="0">
				<tr valign="middle">
					<td class="main" align="center"><?php echo $this->_config[0]['vars']['create_account']; ?>
</td>
				</tr>
				<tr valign="middle">
					<td class="main" align="center"><a href="<?php echo $this->_tpl_vars['LINK_ACCOUNT']; ?>
"><strong><?php echo $this->_config[0]['vars']['text_create_account']; ?>
</strong></a></td>
				</tr>
			</table>
		</td>
	</tr>
<?php endif; ?>
	<tr>
		<td class="main">&nbsp;</td>
	</tr>
</table>
<?php echo $this->_tpl_vars['FORM_END']; ?>

<?php endif; ?>