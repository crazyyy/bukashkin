<?php /* Smarty version 2.6.24, created on 2011-05-05 14:31:28
         compiled from default/module/new_products_default.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'default/module/new_products_default.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'new_products'), $this);?>
 <table cellspacing="0" cellpadding="0" width="100%"><tr><td class="hd bf" align="left"><a href="<?php echo $this->_tpl_vars['NEW_PRODUCTS_LINK']; ?>
"><?php echo $this->_config[0]['vars']['heading_text']; ?>
</a></td></tr></table><table width="100%" border="0" cellspacing="0" cellpadding="4">  <tr>  <?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?>  <?php  $col++;    ?>    <td class="main" width="50%" valign="top">        <table  width="100%" border="0" cellpadding="0" cellspacing="0">  <tr class="contentBoxContents1" valign="top">    <td height="90" class="contentBoxContents1" valign="top">      <table border="0" width="100%" cellspacing="5" cellpadding="0">        <tr>                <td colspan="2" class="contents" align="center">                <strong><a href="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_LINK']; ?>
"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_NAME']; ?>
</a></strong>                </td>        </tr>        <tr>        <td class="contents" width="100%"><?php if ($this->_tpl_vars['module_data']['PRODUCTS_IMAGE']): ?><a href="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_LINK']; ?>
"><img src="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_NAME']; ?>
" title="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_NAME']; ?>
" /></a><?php endif; ?></td>        <td class="contents" align="right"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_BUTTON_BUY_NOW_NEW']; ?>
</td>        </tr>        <tr>                <td class="contents" valign="top" width="100%" colspan="2"><table border="0" width="100%" cellspacing="0" cellpadding="0">        <tr>                <td colspan="2" class="contents" align="left">            <strong><?php echo $this->_tpl_vars['module_data']['PRODUCTS_PRICE']; ?>
</strong><br /> 			<?php if ($this->_tpl_vars['module_data']['PRODUCTS_VPE']): ?><?php echo $this->_tpl_vars['module_data']['PRODUCTS_VPE']; ?>
<br /><?php endif; ?>			<?php echo $this->_tpl_vars['module_data']['PRODUCTS_TAX_INFO']; ?>
<?php echo $this->_tpl_vars['module_data']['PRODUCTS_SHIPPING_LINK']; ?>
<br />                </td>        </tr></table>                </td>        </tr></table></td>  </tr>        </table></td>  <?php    if ($col>=2) {  $col=0;  echo '</tr><tr>';  }   ?>  <?php endforeach; endif; unset($_from); ?>    </tr></table>