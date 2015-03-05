<?php /* Smarty version 2.6.24, created on 2012-03-11 16:14:08
         compiled from shopos-light/module/products_reviews.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/products_reviews.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'reviews'), $this);?>
<br />
<font color="#666666" size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong><?php echo $this->_config[0]['vars']['heading_reviews']; ?>
 
</strong></font><br />
<br />
<?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr> 
        
    <td class="main"><b><?php echo $this->_config[0]['vars']['text_author']; ?>
</b><?php echo $this->_tpl_vars['module_data']['AUTHOR']; ?>
 <?php echo $this->_tpl_vars['module_data']['DATE']; ?>
<br />
      <strong><?php echo $this->_config[0]['vars']['text_rating']; ?>
</strong><?php echo $this->_tpl_vars['module_data']['RATING']; ?>
 </td>
      </tr>
      <tr> 
        <td style="border-bottom: 1px solid; border-color: #cccccc;" class="main" ><br />
      <?php echo $this->_tpl_vars['module_data']['TEXT']; ?>
</td>
      </tr>
</table><br />
<?php endforeach; endif; unset($_from); ?><br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><?php echo $this->_tpl_vars['BUTTON_WRITE']; ?>
</div></td>
  </tr>
</table>