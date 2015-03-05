<?php /* Smarty version 2.6.24, created on 2012-03-11 16:14:08
         compiled from shopos-light/module/product_info/product_info_v1.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/product_info/product_info_v1.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'product_info'), $this);?>

<?php echo $this->_tpl_vars['PRODUCT_NAVIGATOR']; ?>

<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<table width="100%" border="0">
  <tr> 
    <td>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="main"><table width="100%" border="0">
              <tr>
                <td class="contentsTopics"><?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
</td>
                <td align="right"><strong><?php echo $this->_tpl_vars['PRODUCTS_PRICE']; ?>
</strong><br /><?php echo $this->_tpl_vars['PRODUCTS_TAX_INFO']; ?>
<?php if ($this->_tpl_vars['PRODUCTS_SHIPPING_LINK']): ?><?php echo $this->_tpl_vars['PRODUCTS_SHIPPING_LINK']; ?>
<?php endif; ?></td>
              </tr>
            </table>
            <?php if ($this->_tpl_vars['PRODUCTS_VPE']): ?><?php echo $this->_tpl_vars['PRODUCTS_VPE']; ?>
<br /><?php endif; ?>
             <?php if ($this->_tpl_vars['PRODUCTS_MODEL'] != ''): ?><?php echo $this->_config[0]['vars']['model']; ?>
 <?php echo $this->_tpl_vars['PRODUCTS_MODEL']; ?>
<?php endif; ?>
			 <?php echo $this->_tpl_vars['PRODUCTS_DISCOUNT']; ?>
<br />
            <?php echo $this->_config[0]['vars']['print']; ?>
<?php echo $this->_tpl_vars['PRODUCTS_PRINT']; ?>
<br />
			<?php if ($this->_tpl_vars['SHIPPING_NAME']): ?>
            <table width="200" border="0" cellpadding="0" cellspacing="0">
              <tr valign="middle">
                <td class="main"><?php echo $this->_config[0]['vars']['text_shippingtime']; ?>
</td>
                <?php if ($this->_tpl_vars['SHIPPING_IMAGE']): ?><td><img src="<?php echo $this->_tpl_vars['SHIPPING_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['SHIPPING_NAME']; ?>
" /></td>
                <?php endif; ?>
                <td class="main"><?php echo $this->_tpl_vars['SHIPPING_NAME']; ?>
</td>
              </tr>
            </table>
			<?php endif; ?>
          </td>
        </tr>
      </table>
      <table width="100%" border="0">
        <tr>
          <td class="main" valign="top"><?php if ($this->_tpl_vars['PRODUCTS_DESCRIPTION'] != ''): ?><?php echo $this->_tpl_vars['PRODUCTS_DESCRIPTION']; ?>
<br /><?php endif; ?>
            <br />
</td>
        </tr>
      </table>      
    </td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td align="left"><br />
      <table width="1" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center"><table width="1" border="0" cellpadding="5" cellspacing="0">
              <tr>
                <td><?php if ($this->_tpl_vars['PRODUCTS_IMAGE'] != ''): ?>
                    <a href="<?php echo $this->_tpl_vars['PRODUCTS_POPUP_LINK']; ?>
"><img src="<?php echo $this->_tpl_vars['PRODUCTS_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
" /></a>
                    <?php endif; ?></td>
              </tr>
              <!-- more images -->
              <?php if ($this->_tpl_vars['PRODUCTS_IMAGE_1'] != ''): ?>
              <tr>
                <td style="border-top: 1px solid; border-color: #cccccc;"><a href="<?php echo $this->_tpl_vars['PRODUCTS_POPUP_LINK_1']; ?>
"><img src="<?php echo $this->_tpl_vars['PRODUCTS_IMAGE_1']; ?>
" alt="<?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
" /></a> </td>
              </tr>
              <?php endif; ?>
              <?php if ($this->_tpl_vars['PRODUCTS_IMAGE_2'] != ''): ?>
              <tr>
                <td style="border-top: 1px solid; border-color: #cccccc;"><a href="<?php echo $this->_tpl_vars['PRODUCTS_POPUP_LINK_2']; ?>
"><img src="<?php echo $this->_tpl_vars['PRODUCTS_IMAGE_2']; ?>
" alt="<?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
" /></a> </td>
              </tr>
              <?php endif; ?>
              <?php if ($this->_tpl_vars['PRODUCTS_IMAGE_3'] != ''): ?>
              <tr>
                <td style="border-top: 1px solid; border-color: #cccccc;"><a href="<?php echo $this->_tpl_vars['PRODUCTS_POPUP_LINK_3']; ?>
"><img src="<?php echo $this->_tpl_vars['PRODUCTS_IMAGE_3']; ?>
" alt="<?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
" /></a> </td>
              </tr>
              <?php endif; ?>
              <!-- more images eof -->
            </table>
              <br />
              <?php if ($this->_tpl_vars['PRODUCTS_IMAGE_LINK'] != ''): ?>
              <a href="<?php echo $this->_tpl_vars['PRODUCTS_IMAGE_LINK']; ?>
" onclick="window.open(this.href); return false;">
              <?php echo $this->_tpl_vars['PRODUCTS_TEXT_ZOOM']; ?>

              </a><br />
              <?php endif; ?>
              <?php if ($this->_tpl_vars['PRODUCTS_FSK18'] == 'true'): ?>
              <br />
              <img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/fsk18.gif" alt="" />
              <?php endif; ?>
              <?php if ($this->_tpl_vars['MODULE_graduated_price'] != ''): ?>
              <?php echo $this->_tpl_vars['MODULE_graduated_price']; ?>

              <br />
              <br />
              <br />
              <?php endif; ?>
          </td>
        </tr>
      </table>
      <p><?php if ($this->_tpl_vars['MODULE_product_options'] != ''): ?><?php echo $this->_tpl_vars['MODULE_product_options']; ?>
<br /><?php endif; ?></p>
      <table width="300"  border="0">
        <tr>
          <td class="main" valign="middle"><table width="100"  border="0">
              <tr>
                <td><?php echo $this->_tpl_vars['ADD_QTY']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ADD_CART_BUTTON']; ?>
</td>
              </tr>
          </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php if ($this->_tpl_vars['PRODUCTS_URL'] != ''): ?>
<table width="100%" border="0" class="boxTextBG">
  <tr> 
    <td align="center"><?php echo $this->_tpl_vars['PRODUCTS_URL']; ?>
<br /></td>
  </tr>
</table><?php endif; ?>
<?php if ($this->_tpl_vars['PRODUCTS_DATE_AVIABLE'] != ''): ?> 
<table width="100%" border="0" class="boxTextBG">
  <tr> 
    <td align="center"><?php echo $this->_tpl_vars['PRODUCTS_DATE_AVIABLE']; ?>
<br /></td>
  </tr>
</table><?php endif; ?> 
<?php if ($this->_tpl_vars['PRODUCTS_ADDED'] != ''): ?> 
<table width="100%" border="0" class="boxTextBG">
  <tr> 
    <td align="center"><?php echo $this->_tpl_vars['PRODUCTS_ADDED']; ?>
<br /></td>
  </tr>
</table><?php endif; ?>
<?php if ($this->_tpl_vars['MODULE_products_reviews'] != ''): ?>
<table width="100%" border="0">
  <tr>
      <td><?php echo $this->_tpl_vars['MODULE_products_reviews']; ?>
<br /></td>
  </tr>
</table><?php endif; ?>
<?php if ($this->_tpl_vars['MODULE_products_media'] != ''): ?>
  <table width="100%" border="0">
    <tr> 
      <td align="center"><?php echo $this->_tpl_vars['MODULE_products_media']; ?>
<br /></td>
    </tr>
  </table>
<?php endif; ?> <?php if ($this->_tpl_vars['MODULE_cross_selling'] != ''): ?> 
<table width="100%" border="0">
  <tr> 
    <td align="center"><?php echo $this->_tpl_vars['MODULE_cross_selling']; ?>
<br /></td>
  </tr>
</table>
<?php endif; ?> <?php if ($this->_tpl_vars['MODULE_reverse_cross_selling'] != ''): ?> 
<table width="100%" border="0">
  <tr> 
    <td align="center"><?php echo $this->_tpl_vars['MODULE_reverse_cross_selling']; ?>
<br /></td>
  </tr>
</table>
<?php endif; ?><?php if ($this->_tpl_vars['MODULE_also_purchased'] != ''): ?> 
<table width="100%" border="0">
    <tr> 
      <td align="center"><?php echo $this->_tpl_vars['MODULE_also_purchased']; ?>
<br /></td>
    </tr>
</table><?php endif; ?>
<?php echo $this->_tpl_vars['FORM_END']; ?>
