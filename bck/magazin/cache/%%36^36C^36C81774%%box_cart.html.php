<?php /* Smarty version 2.6.24, created on 2011-11-08 21:13:42
         compiled from shopos-light/boxes/box_cart.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/boxes/box_cart.html', 1, false),array('modifier', 'truncate', 'shopos-light/boxes/box_cart.html', 27, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'boxes'), $this);?>

<?php if ($this->_tpl_vars['deny_cart'] != 'true'): ?>
<?php if ($this->_tpl_vars['empty'] == 'false'): ?>
<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td class="infoBoxHeading_right">
	<table width="100%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="infoBoxHeading_right"><?php echo $this->_config[0]['vars']['heading_cart']; ?>
</td>
          <td align="right"><a href="<?php echo $this->_tpl_vars['LINK_CART']; ?>
"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/icon_more_light.gif" alt="" /></a></td>
        </tr>
    </table> 
	</td>
  </tr>
  <tr>
    <td class="infoBox_right" align="left">
	<table width="95%"  border="0" cellpadding="2" cellspacing="0">
        <tr>
          <td class="boxText">
		  <table border="0" width="100%" cellspacing="0" cellpadding="3" class="infoBoxContents">
            <tr>
              <td style="border-bottom: 1px solid; border-color: #cccccc;" align="left" class="boxText">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
				<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['products_data']):
        $this->_foreach['aussen']['iteration']++;
?>
				  <tr>
					<td class="main"><?php echo $this->_tpl_vars['products_data']['QTY']; ?>
&nbsp;x&nbsp;</td>
					<td class="main"><a href="<?php echo $this->_tpl_vars['products_data']['LINK']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['products_data']['NAME'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...", true) : smarty_modifier_truncate($_tmp, 15, "...", true)); ?>
</a></td>
				  </tr>
				<?php endforeach; endif; unset($_from); ?>
				</table>
			  </td>
            </tr>
            <?php if ($this->_tpl_vars['DISCOUNT']): ?>
			<tr>
              <td align="right" class="productDiscountPrice"><?php echo $this->_config[0]['vars']['text_discount']; ?>
&nbsp;<?php echo $this->_tpl_vars['DISCOUNT']; ?>
</td>
            </tr><?php endif; ?>
            <tr>
              <td align="right"><?php echo $this->_tpl_vars['UST']; ?>
<strong><?php echo $this->_config[0]['vars']['text_total']; ?>
</strong><?php echo $this->_tpl_vars['TOTAL']; ?>
<?php if ($this->_tpl_vars['SHIPPING_INFO']): ?><br /><?php echo $this->_tpl_vars['SHIPPING_INFO']; ?>
<?php endif; ?></td>
            </tr>
          </table>
		 </td>
        </tr>
    </table>
    </td>
  </tr>
</table>
<?php else: ?> <!-- cart has no content --> 
<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td class="infoBoxHeading_right">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="infoBoxHeading_right"><?php echo $this->_config[0]['vars']['heading_cart']; ?>
</td>
          <td align="right"><a href="<?php echo $this->_tpl_vars['LINK_CART']; ?>
"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/icon_more_light.gif" alt="" /></a></td>
        </tr>
    </table>
	</td>
  </tr>
  <tr>
    <td class="infoBox_right" align="left">
	<table width="95%"  border="0" cellpadding="2" cellspacing="0">
        <tr>
          <td class="boxText"><?php echo $this->_config[0]['vars']['text_empty_cart']; ?>
</td>
        </tr>
    </table>
	</td>
  </tr>
</table>
<?php endif; ?>

<?php if ($this->_tpl_vars['ACTIVATE_GIFT'] == 'true'): ?>

<?php if ($this->_tpl_vars['GV_AMOUNT'] != ''): ?>
<table class="infoBoxContents" width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="infoBox_right"><a href="<?php echo $this->_tpl_vars['LINK_CART']; ?>
"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/img_gift.gif" alt="" /></a></td>
    <td valign="middle" class="infoBox_right">
	<table width="95%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_trans.gif" alt="" width="100%" height="1" /></td>
      </tr>
      <tr>
        <td align="center" class="smalltext"><?php echo $this->_config[0]['vars']['voucher_balance']; ?>
</td>
      </tr>
      <tr>
        <td align="center" class="gvBox" valign="bottom"><?php echo $this->_tpl_vars['GV_AMOUNT']; ?>
</td>
      </tr>
    </table>
	</td>
  </tr>
</table>

<table cellpadding="0" width="100%" cellspacing="0" border="0">
  <tr>
    <td class="infoBox_right"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_trans.gif" alt="" width="100%" height="1" /></td>
  </tr>
</table>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>