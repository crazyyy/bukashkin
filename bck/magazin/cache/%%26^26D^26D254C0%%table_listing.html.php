<?php /* Smarty version 2.6.24, created on 2012-03-11 16:14:08
         compiled from shopos-light/module/product_options/table_listing.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'shopos-light/module/product_options/table_listing.html', 12, false),)), $this); ?>
<?php if ($this->_tpl_vars['options'] != ''): ?>

<table width="100%"  border="0" cellpadding="0" cellspacing="0">
    <?php $_from = $this->_tpl_vars['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['options_data']):
        $this->_foreach['outer']['iteration']++;
?> 
	  <tr>
	    <td style="border-bottom: 1px solid;" colspan="4"><strong><?php echo $this->_tpl_vars['options_data']['NAME']; ?>
:</strong></td>
  </tr>
  <?php 
  $count=0;
   ?>
	<?php $_from = $this->_tpl_vars['options_data']['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key_data'] => $this->_tpl_vars['item_data']):
?>
    <tr class="<?php echo smarty_function_cycle(array('values' => "tableListingI,tableListingII"), $this);?>
">
	<td>
      <?php 
	  $count++;
	  if ($count==1) { 
	   ?>
	  <input type="radio" name="id[<?php echo $this->_tpl_vars['options_data']['ID']; ?>
]" value="<?php echo $this->_tpl_vars['item_data']['ID']; ?>
" checked="checked" />
	  <?php 
	  } else {
	   ?>
	  <input type="radio" name="id[<?php echo $this->_tpl_vars['options_data']['ID']; ?>
]" value="<?php echo $this->_tpl_vars['item_data']['ID']; ?>
" />
	  <?php 
	  }
	   ?>	  </td>
      <td><?php echo $this->_tpl_vars['item_data']['TEXT']; ?>
<br />
      ArtNr.: <?php echo $this->_tpl_vars['item_data']['MODEL']; ?>
</td>
      <td>&nbsp;</td>
      <td align="right"><?php if ($this->_tpl_vars['item_data']['PRICE']): ?><?php echo $this->_tpl_vars['item_data']['PREFIX']; ?>
<?php echo $this->_tpl_vars['item_data']['PRICE']; ?>
<?php endif; ?></td>
</tr>
	<?php endforeach; endif; unset($_from); ?>
	<?php endforeach; endif; unset($_from); ?> 
</table>
<?php endif; ?>