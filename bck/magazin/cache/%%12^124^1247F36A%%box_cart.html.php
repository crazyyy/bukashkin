<?php /* Smarty version 2.6.24, created on 2011-05-05 14:31:28
         compiled from default/boxes/box_cart.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'default/boxes/box_cart.html', 1, false),array('modifier', 'os_truncate', 'default/boxes/box_cart.html', 25, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'boxes'), $this);?>

<?php if ($this->_tpl_vars['deny_cart'] != 'true'): ?>
<!-- shopping_cart //-->
<script type="text/javascript" src="jscript/jscript_ajax_cart.js"></script>
<div id="divShoppingCart">

<table class="adn"><tr><td class="hd_red bf"><a href="shopping_cart.php"><?php echo $this->_config[0]['vars']['heading_cart']; ?>
</a></td></tr></table>
<table class="adn"><tr><td class="hdb vcent">
<table border="0" width="100%" cellspacing="0" cellpadding="1">
  <tr>
    <td>
<table border="0" width="100%" cellspacing="0" cellpadding="3">
  <tr>
    <td >
    <!-- table -->
    <table border="0" width="100%" cellspacing="0" cellpadding="0" >
<?php if ($this->_tpl_vars['empty'] == 'false'): ?>
    <tr >
      <td width="100%" align="left">
<!-- содержимое корзины -->
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
				<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['products_data']):
        $this->_foreach['aussen']['iteration']++;
?>
				  <tr>
					<td align="left">&nbsp;<?php echo $this->_tpl_vars['products_data']['QTY']; ?>
&nbsp;x&nbsp;</td>
					<td width="100%" align="left"><a href="<?php echo $this->_tpl_vars['products_data']['LINK']; ?>
" title="<?php echo $this->_tpl_vars['products_data']['NAME']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['products_data']['NAME'])) ? $this->_run_mod_handler('os_truncate', true, $_tmp, @MAX_DISPLAY_CART, "...", true) : smarty_modifier_os_truncate($_tmp, @MAX_DISPLAY_CART, "...", true)); ?>
</a></td>
				  </tr>
				<?php endforeach; endif; unset($_from); ?>
				</table>
<!-- /содержимое корзины -->
      </td>
      <td align="center">
        <img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/cart_big_full.gif" alt="" hspace="0" vspace="3" />
      </td>
    </tr>

            <?php if ($this->_tpl_vars['DISCOUNT']): ?>
			<tr class="cartBox">
              <td colspan="2" align="right" class="productDiscountPrice"><?php echo $this->_config[0]['vars']['text_discount']; ?>
&nbsp;<?php echo $this->_tpl_vars['DISCOUNT']; ?>
</td>
            </tr><?php endif; ?>
			<tr class="cartBox">
              <td colspan="2" align="center"><a href="<?php echo $this->_tpl_vars['LINK_CHECKOUT']; ?>
"><?php echo $this->_config[0]['vars']['text_checkout']; ?>
</a></td>
            </tr>
<?php else: ?> <!-- cart has no content --> 
    <tr class="cartBox">
      <td width="100%" class="cartBoxContents" align="right">
      <?php echo $this->_config[0]['vars']['text_empty_cart']; ?>

      </td>
      <td align="center">
        <img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/cart_big_empty.gif" alt="" hspace="0" vspace="3" />
      </td>
    </tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['empty'] == 'false'): ?>    
    <tr class="cartBox1">
      <td colspan="2" class="cartBox1">
        <table width="100%" cellspacing="0" cellpadding="0" class="cartBox1">
           <tr>
             <td width="100%" class="cartBoxContents" align="right"></td>
             <td class="price"><nobr>&nbsp;<?php echo $this->_tpl_vars['UST']; ?>
<strong><?php echo $this->_config[0]['vars']['text_total']; ?>
</strong> <?php echo $this->_tpl_vars['TOTAL']; ?>
&nbsp;</nobr></td>
           </tr>
        </table>
      </td>
    </tr>
<?php else: ?> <!-- cart has no content -->     

<?php endif; ?>
    </table>
    <!-- /table -->
   </td>
  </tr>

</table>
</td>
  </tr>
</table>
</td></tr></table>
</div>
<!-- shopping_cart_eof //-->
<?php endif; ?>