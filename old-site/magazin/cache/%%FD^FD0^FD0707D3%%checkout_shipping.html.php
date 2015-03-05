<?php /* Smarty version 2.6.24, created on 2011-05-05 14:58:59
         compiled from shopos-light/module/checkout_shipping.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/checkout_shipping.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'checkout_shipping'), $this);?>


<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr valign="top"> 
		<td class="contentsTopics"><?php echo $this->_config[0]['vars']['heading_shipping']; ?>
</td>
	</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="main">&nbsp;</td>
        </tr>
  <tr>
    <td><strong><?php echo $this->_config[0]['vars']['title_address']; ?>
</strong></td>
  </tr>
</table>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="border-top: 1px solid; border-color: #cccccc;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="main"><?php echo $this->_config[0]['vars']['text_addressbook']; ?>
<br />
            <br />
            <?php echo $this->_tpl_vars['BUTTON_ADDRESS']; ?>
</td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="4">
              <tr> 
                <td align="center" valign="top" class="main"><strong><?php echo $this->_config[0]['vars']['title_address']; ?>
</strong><br />
                    <img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/arrow_south_east.gif" alt="" /></td>
                <td class="boxTextBG" style="border-right: 1px solid; border-color: #cccccc;" align="left"><?php echo $this->_tpl_vars['ADDRESS_LABEL']; ?>
</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="main">&nbsp;</td>
        </tr>
  <tr>
    <td><strong><?php echo $this->_config[0]['vars']['title_shipping']; ?>
</strong></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td style="border-top: 1px solid; border-color: #cccccc;">
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td style="border-right: 1px solid; border-color: #cccccc;" valign="top" class="main"><?php echo $this->_config[0]['vars']['text_shipping']; ?>
<br />
            <br />
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><?php echo $this->_tpl_vars['SHIPPING_BLOCK']; ?>
</td>
              </tr>
            </table> 
          </td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="main">&nbsp;</td>
        </tr>
  <tr> 
    <td style="border-top: 1px solid; border-color: #cccccc;">
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td valign="top" class="main"><strong><?php echo $this->_config[0]['vars']['title_continue']; ?>
</strong><br />
            <?php echo $this->_config[0]['vars']['text_continue']; ?>
<br /> 
          </td>
          <td style="border-right: 1px solid; border-color: #cccccc;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td align="center" valign="top" class="main"></td>
                <td class="main" align="center"><?php echo $this->_tpl_vars['BUTON_CONTINUE']; ?>
</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php echo $this->_tpl_vars['FORM_END']; ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="main">&nbsp;</td>
        </tr>
      <tr>
        <td>
        <table border="0" width="100%" cellspacing="0" cellpadding="0">
          <tr>
            <td align="right">
			<table border="0" width="50%" cellspacing="0" cellpadding="0">
              <tr>
                <td class="onepxwidth"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/checkout_bullet.gif" alt="" /></td>
                <td><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_silver.gif" width="100%" height="1" alt="" /></td>
              </tr>
            </table></td>
            
          <td><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_silver.gif" width="100%" height="1" alt="" /></td>
          <td><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_silver.gif" width="100%" height="1" alt="" /></td>
            <td>
			  <table border="0" width="100%" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_silver.gif" width="100%" height="1" alt="" /></td>
                <td><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/pixel_silver.gif" width="1" height="1" alt="" /></td>
              </tr>
            </table></td>
          </tr>
          <tr>            
          <td align="center" class="checkoutBarCurrent"><?php echo $this->_config[0]['vars']['text_shipping_info']; ?>
</td>            
          <td align="center" class="checkoutBarTo"><?php echo $this->_config[0]['vars']['text_payment_info']; ?>
</td>            
          <td align="center" class="checkoutBarTo"><?php echo $this->_config[0]['vars']['text_confirm']; ?>
</td>            
          <td align="center" class="checkoutBarTo"><?php echo $this->_config[0]['vars']['text_finished']; ?>
</td>
          </tr>
        </table></td>
      </tr>
</table>