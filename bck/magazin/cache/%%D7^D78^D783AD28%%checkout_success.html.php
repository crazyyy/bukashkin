<?php /* Smarty version 2.6.24, created on 2011-05-05 14:59:07
         compiled from shopos-light/module/checkout_success.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/checkout_success.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'checkout_success'), $this);?>


<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td rowspan="14"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/checkout_success.gif" alt="" /></td>
    <td class="contentsTopics" valign="top"><?php echo $this->_config[0]['vars']['heading_success']; ?>
</td>
  </tr>
  <tr>
    <td class="main" valign="top"><?php echo $this->_config[0]['vars']['text_success']; ?>
</td>
  </tr>
  <tr>
    <td class="contentsTopics" valign="top"><?php echo $this->_config[0]['vars']['title_printorder']; ?>
</td>
  </tr>
  <tr>
    <td class="main" valign="top"><?php echo $this->_config[0]['vars']['text_printorder']; ?>
</td>
  </tr>
  <tr>
    <td class="main"><?php echo $this->_tpl_vars['BUTTON_PRINT']; ?>
</td>
  </tr>
  <tr>
    <td class="contentsTopics" valign="top"><?php echo $this->_config[0]['vars']['text_thankyou']; ?>
</td>
  </tr>
  <tr>
    <td class="contentsTopics" valign="top">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<?php if ($this->_tpl_vars['GV_SEND_LINK']): ?>
			<!--GV Code Start-->
			<tr>
				<td class="main"><?php echo $this->_config[0]['vars']['gv_has_vouchera']; ?>
 <?php echo $this->_tpl_vars['GV_SEND_LINK']; ?>
 <?php echo $this->_config[0]['vars']['gv_has_voucherb']; ?>
</td>
			</tr>
			<!--GV Code End-->
			<?php endif; ?>
			<tr>
				<td class="main" align="right"><?php echo $this->_tpl_vars['BUTTON_CONTINUE']; ?>
</td>
			</tr>
		</table>	</td>
  </tr>
</table>
<!-- Google Conversion-tracking start !-->
<?php if ($this->_tpl_vars['google_tracking'] == 'true'): ?>
<?php echo $this->_tpl_vars['tracking_code']; ?>

<?php endif; ?>
<!-- Google Conversion-tracking end !-->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
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
				<td><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_silver.gif" width="100%" height="1" alt="" /></td>
				<td>
					<table border="0" width="50%" cellspacing="0" cellpadding="0">
						<tr> 
							<td><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_silver.gif" width="100%" height="1" alt="" /></td>
							<td class="onepxwidth"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/checkout_bullet.gif" alt="" /></td>
						</tr>
				  </table>
				</td>
			</tr>
			<tr> 
				<td align="center" class="checkoutBarTo"><?php echo $this->_config[0]['vars']['text_shipping_info']; ?>
</td>
				<td align="center" class="checkoutBarTo"><?php echo $this->_config[0]['vars']['text_payment_info']; ?>
</td>
				<td align="center" class="checkoutBarTo"><?php echo $this->_config[0]['vars']['text_confirm']; ?>
</td>
				<td align="center" class="checkoutBarCurrent"><?php echo $this->_config[0]['vars']['text_finished']; ?>
</td>
			</tr>
		</table>
	</td>
  </tr>
</table>
<?php if ($this->_tpl_vars['downloads_content'] != ''): ?>
  <?php echo $this->_tpl_vars['downloads_content']; ?>

<?php endif; ?>
<?php echo $this->_tpl_vars['FORM_END']; ?>