<?php /* Smarty version 2.6.24, created on 2011-05-05 14:58:56
         compiled from shopos-light/module/order_details.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/order_details.html', 1, false),array('modifier', 'truncate', 'shopos-light/module/order_details.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'shopping_cart'), $this);?>
<table width="100%" border="0" cellspacing="0" cellpadding="3">  <tr>     <td class="main" style="border-bottom: 1px solid; border-color: #cccccc;">&nbsp;</td>    <td class="main" style="border-bottom: 1px solid; border-color: #cccccc;" align="center"><strong><?php echo $this->_config[0]['vars']['text_qty']; ?>
</strong></td>    <td class="main" style="border-bottom: 1px solid; border-color: #cccccc;"><strong>&nbsp;&nbsp;<?php echo $this->_config[0]['vars']['text_article']; ?>
</strong></td>    <td class="boxTextBG" style="border-bottom: 1px solid; border-color: #cccccc;" align="right"><strong><?php echo $this->_config[0]['vars']['text_single']; ?>
</strong></td>    <td class="boxTextBG" style="border-bottom: 1px solid; border-color: #cccccc;" align="right"><strong><?php echo $this->_config[0]['vars']['text_total']; ?>
</strong></td>    <td class="boxTextBGII" style="border-bottom: 1px solid; border-color: #cccccc;" align="center"><strong>&nbsp;<?php echo $this->_config[0]['vars']['text_remove']; ?>
&nbsp;</strong></td>  </tr>  <?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?>   <tr>     <td colspan="6"></td>  </tr>  <tr>     <td class="main"><?php if ($this->_tpl_vars['module_data']['PRODUCTS_IMAGE'] != ''): ?><img src="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['IMAGE_ALT']; ?>
" /><?php endif; ?></td>    <td valign="top" class="main" align="center"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_QTY']; ?>
</td>    <td valign="top" class="main"><strong><a href="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_LINK']; ?>
"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_NAME']; ?>
</a></strong><br />      <?php if ($this->_tpl_vars['module_data']['ATTRIBUTES'] != ''): ?>       <table width="100%" border="0" cellspacing="0" cellpadding="0">        <?php $_from = $this->_tpl_vars['module_data']['ATTRIBUTES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key_data'] => $this->_tpl_vars['item_data']):
?>         <tr>           <td class="main"><?php echo $this->_tpl_vars['item_data']['NAME']; ?>
:</td>          <td class="main" align="left"><?php echo $this->_tpl_vars['item_data']['VALUE_NAME']; ?>
</td>        </tr>        <?php endforeach; endif; unset($_from); ?>       </table>      <?php else: ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['module_data']['PRODUCTS_SHORT_DESCRIPTION'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, "...", true) : smarty_modifier_truncate($_tmp, 150, "...", true)); ?>
       <?php endif; ?> </td>    <td valign="top" nowrap class="boxTextBG" style="border-right: 1px solid; border-color: #cccccc;" align="right"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_SINGLE_PRICE']; ?>
</td>    <td valign="top" nowrap class="boxTextBG" style="border-right: 1px solid; border-color: #cccccc;" align="right"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_PRICE']; ?>
&nbsp;     </td>    <td width="10" align="center" valign="middle" class="boxTextBGII"><?php echo $this->_tpl_vars['module_data']['BOX_DELETE']; ?>
</td>  </tr>  <?php endforeach; endif; unset($_from); ?>   <tr>     <td colspan="6"></td>  </tr>  <tr>     <td style="border-top: 1px solid; border-color: #cccccc;" colspan="5" class="main" align="right"><?php echo $this->_tpl_vars['UST_CONTENT']; ?>
<strong><?php echo $this->_tpl_vars['TOTAL_CONTENT']; ?>
</strong><?php if ($this->_tpl_vars['SHIPPING_INFO']): ?><?php echo $this->_tpl_vars['SHIPPING_INFO']; ?>
<?php endif; ?></td>    <td style="border-top: 1px solid; border-color: #cccccc;" align="center" valign="middle" class="main">&nbsp;</td>  </tr></table>