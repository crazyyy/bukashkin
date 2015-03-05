<?php /* Smarty version 2.6.24, created on 2011-05-16 12:03:20
         compiled from shopos-light/module/product_reviews.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/product_reviews.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'reviews'), $this);?>
<br />
<font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong><?php echo $this->_config[0]['vars']['heading_reviews']; ?>
</strong></font><font color="#666666" size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong> 
 <?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
</strong></font><br />
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="1" class="main" style="border-bottom: 1px solid; border-color: #cccccc;"><strong><?php echo $this->_config[0]['vars']['title_nr']; ?>
</strong></td>
    <td style="border-bottom: 1px solid; border-color: #cccccc;" class="main"><strong><?php echo $this->_config[0]['vars']['title_author']; ?>
</strong></td>
    <td style="border-bottom: 1px solid; border-color: #cccccc;" class="main"><strong><?php echo $this->_config[0]['vars']['title_rating']; ?>
</strong></td>
    <td style="border-bottom: 1px solid; border-color: #cccccc;" class="main"><div align="right"><strong><?php echo $this->_config[0]['vars']['title_date']; ?>
</strong></div></td>
  </tr>
  <?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?> 
  <tr> 
    <td class="main"><?php echo $this->_tpl_vars['module_data']['ID']; ?>
</td>
    <td class="main"><?php echo $this->_tpl_vars['module_data']['AUTHOR']; ?>
</td>
    <td class="main"><div align="left"><?php echo $this->_tpl_vars['module_data']['RATING']; ?>
</div></td>
    <td class="main"><div align="right"><?php echo $this->_tpl_vars['module_data']['DATE']; ?>
</div></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?> 
</table>