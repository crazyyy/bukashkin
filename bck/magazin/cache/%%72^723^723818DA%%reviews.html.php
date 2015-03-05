<?php /* Smarty version 2.6.24, created on 2011-05-05 15:21:41
         compiled from shopos-light/module/reviews.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/reviews.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'reviews'), $this);?>
<br />
<font color="#666666" size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong><?php echo $this->_config[0]['vars']['heading_reviews']; ?>
 
</strong></font><br />
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?> 
  <tr> 
    <td style ="border-bottom: 1px solid; border-color: #cccccc;" width="1" valign="top"><a href="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_LINK']; ?>
"><img src="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_NAME']; ?>
" border="0" /></a></td>
    <td style ="border-bottom: 1px solid; border-color: #cccccc;" class="main"><strong><?php echo $this->_config[0]['vars']['text_product']; ?>
 </strong><a href="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_LINK']; ?>
"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_NAME']; ?>
</a><br />
      <strong><?php echo $this->_config[0]['vars']['text_author']; ?>
</strong> <?php echo $this->_tpl_vars['module_data']['AUTHOR']; ?>
 <br />
      <br />
      <strong><?php echo $this->_config[0]['vars']['text_text']; ?>
</strong><br />
      <?php echo $this->_tpl_vars['module_data']['TEXT']; ?>
 <br />
      <br />
      <strong><?php echo $this->_config[0]['vars']['text_rating']; ?>
</strong> <?php echo $this->_tpl_vars['module_data']['RATING']; ?>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?> 
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php echo $this->_tpl_vars['NAVBAR']; ?>
</td>
  </tr>
</table>