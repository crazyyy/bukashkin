<?php /* Smarty version 2.6.24, created on 2011-11-08 21:13:42
         compiled from shopos-light/module/new_products_default.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/new_products_default.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'new_products'), $this);?>
 
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="infoBoxHeading"><?php echo $this->_config[0]['vars']['heading_text']; ?>
 </td>
  </tr>
</table>
<br />
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?>
  <?php  $col++; 
   ?>
    <td class="main">
        <table  width="100%" border="0" cellpadding="0" cellspacing="4">
          <tr> 
            <td width="35%" rowspan="2" ><?php if ($this->_tpl_vars['module_data']['PRODUCTS_IMAGE']): ?><a href="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_LINK']; ?>
"><img src="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_NAME']; ?>
" /></a><?php endif; ?></td>
            <td width="65%" align="left" class="main"><strong><a href="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_LINK']; ?>
"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_NAME']; ?>
</a></strong></td>
          </tr>
          <tr> 
            <td align="left"  class="main"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_DESCRIPTION']; ?>
<br />
            <strong><?php echo $this->_tpl_vars['module_data']['PRODUCTS_PRICE']; ?>
<br />
            </strong><?php echo $this->_tpl_vars['module_data']['PRODUCTS_TAX_INFO']; ?>
<?php echo $this->_tpl_vars['module_data']['PRODUCTS_SHIPPING_LINK']; ?>
<br />
	      <?php echo $this->_tpl_vars['module_data']['BUTTON_BUY_NOW']; ?>
<br />
            </td>
          </tr>
        </table>
</td>
  <?php  
  if ($col>=1) {
  $col=0;
  echo '</tr><tr>';
  }
   ?>
  <?php endforeach; endif; unset($_from); ?>  
  </tr>
</table>