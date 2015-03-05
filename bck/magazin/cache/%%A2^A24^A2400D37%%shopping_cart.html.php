<?php /* Smarty version 2.6.24, created on 2011-05-05 14:58:56
         compiled from shopos-light/module/shopping_cart.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/shopping_cart.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'shopping_cart'), $this);?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr valign="top"> 
    	<td class="contentsTopics"><?php echo $this->_config[0]['vars']['heading_cart']; ?>
</td>
	</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr valign="top"> 
    	<td align="center"><?php echo $this->_tpl_vars['MODULE_gift_cart']; ?>
</td>
	</tr>
</table>
<?php if ($this->_tpl_vars['info_message'] != ''): ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="main">&nbsp;</td>
        </tr>
  <tr>
    <td class="errorBox" align="center"><?php echo $this->_tpl_vars['info_message']; ?>
</td>
  </tr>
</table>
<?php endif; ?>
<?php if ($this->_tpl_vars['cart_empty'] == true): ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="main">&nbsp;</td>
        </tr>
  <tr> 
    <td class="main" align="center"><?php echo $this->_config[0]['vars']['text_empty']; ?>
</td>
  </tr>
  <tr>
    <td class="main" align="right"><?php echo $this->_tpl_vars['BUTTON_CONTINUE']; ?>
</td>
  </tr>
</table>
<?php else: ?>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<?php echo $this->_tpl_vars['HIDDEN_OPTIONS']; ?>

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="main">&nbsp;</td>
        </tr>
    <tr> 
      <td><?php echo $this->_tpl_vars['MODULE_order_details']; ?>
</td>
    </tr>
    <tr>
      <td class="main"></td>
    </tr>
  </table>
  <?php if ($this->_tpl_vars['info_message_1'] != ''): ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="errorBox" align="center"><?php echo $this->_tpl_vars['info_message_1']; ?>
<?php echo $this->_tpl_vars['min_order']; ?>
<?php echo $this->_tpl_vars['info_message_2']; ?>
<?php echo $this->_tpl_vars['order_amount']; ?>
</td>
  </tr>
        <tr>
          <td class="main">&nbsp;</td>
        </tr>
</table>
<?php endif; ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td align="left"><?php echo $this->_tpl_vars['BUTTON_RELOAD']; ?>
</td>
	<td align="right"><?php echo $this->_tpl_vars['BUTTON_CHECKOUT']; ?>
</td>
  </tr>
</table>
<?php echo $this->_tpl_vars['FORM_END']; ?>

<?php endif; ?>