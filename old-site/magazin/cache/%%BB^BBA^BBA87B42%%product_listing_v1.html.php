<?php /* Smarty version 2.6.24, created on 2011-11-08 21:20:06
         compiled from shopos-light/module/product_listing/product_listing_v1.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/product_listing/product_listing_v1.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'index'), $this);?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">  <tr valign="top">    <td class="contentsTopics"><?php echo $this->_tpl_vars['CATEGORIES_NAME']; ?>
</td>    <td align="right">&nbsp;</td>  </tr>  <tr valign="top">    <td class="contentsTopics"><?php echo $this->_tpl_vars['CATEGORIES_HEADING_TITLE']; ?>
</td>    <td align="right">&nbsp;</td>  </tr>  </table><?php if ($this->_tpl_vars['CATEGORIES_DESCRIPTION']): ?><br /><?php echo $this->_tpl_vars['CATEGORIES_DESCRIPTION']; ?>
<?php endif; ?><br /><?php if ($this->_tpl_vars['CATEGORIES_IMAGE']): ?><img src="<?php echo $this->_tpl_vars['CATEGORIES_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['CATEGORIES_NAME']; ?>
" /><br /><table width="100%"  border="0" cellspacing="0" cellpadding="0">  <tr>    <td style="border-bottom: 1px solid; border-color: #000000;">&nbsp;</td>  </tr></table><?php endif; ?><?php if ($this->_tpl_vars['MANUFACTURER_DROPDOWN']): ?><br /><table width="100%" border="0" cellspacing="0" cellpadding="0">  <tr>    <td class="main" align="right"><table border="0" cellspacing="0" cellpadding="0">      <tr>        <td class="main" align="right"><?php echo $this->_config[0]['vars']['text_show']; ?>
&nbsp;</td>        <td class="main" align="right"><?php echo $this->_tpl_vars['MANUFACTURER_DROPDOWN']; ?>
</td>      </tr>    </table>      </td>  </tr></table><br /><?php endif; ?><table width="100%" border="0" cellspacing="0" cellpadding="0">  <tr>     <td align="center">         <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-top: 2px solid; border-color: #d4d4d4;">          <?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?>           <tr>             <td rowspan="2" style="border-bottom: 1px solid; border-color: #cccccc;">&nbsp;<?php if ($this->_tpl_vars['module_data']['PRODUCTS_IMAGE'] != ''): ?><a href="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_LINK']; ?>
"><img src="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_NAME']; ?>
" /></a><?php endif; ?>			<?php if ($this->_tpl_vars['module_data']['PRODUCTS_FSK18'] == 'true'): ?><br /><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/fsk18.gif" alt="" /><?php endif; ?></td>            <td align="left" class="main"><a href="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_LINK']; ?>
"><strong><?php echo $this->_tpl_vars['module_data']['PRODUCTS_NAME']; ?>
</strong></a></td>          </tr>          <tr>                       <td align="left" class="main" style="border-bottom: 1px solid; border-color: #cccccc;"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_SHORT_DESCRIPTION']; ?>
             <br />            <strong><?php echo $this->_tpl_vars['module_data']['PRODUCTS_PRICE']; ?>
 </strong><br />            <?php echo $this->_tpl_vars['module_data']['PRODUCTS_TAX_INFO']; ?>
<?php echo $this->_tpl_vars['module_data']['PRODUCTS_SHIPPING_LINK']; ?>
             <?php if ($this->_tpl_vars['module_data']['PRODUCTS_VPE']): ?><?php echo $this->_tpl_vars['module_data']['PRODUCTS_VPE']; ?>
<?php endif; ?>             <table width="100%" border="0" cellpadding="0" cellspacing="0">                <tr>                  <td align="right"><table width="200" border="0">                    <tr>                      <td align="right"><?php if ($this->_tpl_vars['module_data']['SHIPPING_NAME']): ?>                          <table width="200" border="0" cellpadding="0" cellspacing="0">                            <tr valign="middle">                              <td class="main"><?php echo $this->_config[0]['vars']['text_shippingtime']; ?>
</td>                              <?php if ($this->_tpl_vars['module_data']['SHIPPING_IMAGE']): ?>                              <td><img src="<?php echo $this->_tpl_vars['module_data']['SHIPPING_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['SHIPPING_NAME']; ?>
" /></td>                              <?php endif; ?>                              <td class="main"><?php echo $this->_tpl_vars['module_data']['SHIPPING_NAME']; ?>
</td>                            </tr>                          </table>                          <?php endif; ?>                          <?php echo $this->_tpl_vars['module_data']['BUTTON_BUY_NOW']; ?>
</td>                    </tr>                  </table></td>                </tr>            </table>            </td>          </tr>          <?php endforeach; endif; unset($_from); ?>       </table>    </td>  </tr></table><br /><table width="100%" border="0" cellspacing="0" cellpadding="0">  <tr>    <td><?php echo $this->_tpl_vars['NAVIGATION']; ?>
</td>  </tr></table>