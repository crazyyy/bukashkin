<?php /* Smarty version 2.6.24, created on 2011-05-28 16:44:27
         compiled from shopos-light/module/print_product_info.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/print_product_info.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'print_product_info'), $this);?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
 / <?php echo $this->_tpl_vars['PRODUCTS_MODEL']; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body leftmargin="0" topmargin="0" onload="window.print()">

<!-- head -->
<table border="0" width="640" cellpadding="10" cellspacing="0" bgcolor="#ffffff">
<tr>
	<td>
	<p><strong><font color="#999999" size="4" face="Arial, Helvetica, sans-serif"><?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
</font></strong><br />
	<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $this->_tpl_vars['PRODUCTS_MODEL']; ?>
</font></p>
	</td>
</tr>
</table>	
<!-- head eof -->

<table width="640" border="0">
<tr>
<td width="1" valign="top">

<!-- pics -->
<table width="1" border="0" cellpadding="5">
 <tr>
  <td style="border-right: 1px solid; border-color: #cccccc" width="1" align="left" valign="top">
  		<?php if ($this->_tpl_vars['PRODUCTS_IMAGE'] != ''): ?><img src="<?php echo $this->_tpl_vars['PRODUCTS_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['NAME']; ?>
" border="0" /><?php endif; ?>
  </td>
 </tr>
  <!-- more images -->
  <?php if ($this->_tpl_vars['PRODUCTS_IMAGE_1'] != ''): ?>
    <tr>
      <td style="border-right: 1px solid; border-color: #cccccc;">                          
      <img src="<?php echo $this->_tpl_vars['PRODUCTS_IMAGE_1']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['NAME']; ?>
" border="0" />                          
      </td>
    </tr>     
  <?php endif; ?>
  <?php if ($this->_tpl_vars['PRODUCTS_IMAGE_2'] != ''): ?>
    <tr>
      <td style="border-right: 1px solid; border-color: #cccccc;">                          
      <img src="<?php echo $this->_tpl_vars['PRODUCTS_IMAGE_2']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['NAME']; ?>
" border="0" />                          
      </td>
    </tr>  
  <?php endif; ?>
  <?php if ($this->_tpl_vars['PRODUCTS_IMAGE_3'] != ''): ?>
    <tr>
      <td style="border-right: 1px solid; border-color: #cccccc;">                          
      <img src="<?php echo $this->_tpl_vars['PRODUCTS_IMAGE_3']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['NAME']; ?>
" border="0" />                          
      </td>
    </tr>  
  <?php endif; ?>
  <!-- more images eof -->
</table></td>
<!-- pics eof -->

<!-- desc -->
<td valign="top">

<table width="100%">
  <tr>
  <td align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $this->_tpl_vars['PRODUCTS_DESCRIPTION']; ?>
<br />
    <br />
    <strong><?php if ($this->_tpl_vars['module_content'] != ''): ?><?php echo $this->_config[0]['vars']['options']; ?>
<br />
    </strong> <?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?> 
    <?php echo $this->_tpl_vars['module_data']['GROUP']; ?>
: <?php echo $this->_tpl_vars['module_data']['NAME']; ?>
<br />
    <?php endforeach; endif; unset($_from); ?> <br />
    <br /><?php endif; ?>
    <strong><?php echo $this->_config[0]['vars']['price']; ?>
 <font color="#FF0000"><?php echo $this->_tpl_vars['PRODUCTS_PRICE']; ?>
</font><br /><?php echo $this->_tpl_vars['PRODUCTS_TAX_INFO']; ?>
<?php echo $this->_tpl_vars['PRODUCTS_SHIPPING_LINK']; ?>
</strong>
    <?php if ($this->_tpl_vars['PRODUCTS_VPE']): ?><br /><?php echo $this->_tpl_vars['PRODUCTS_VPE']; ?>
<?php endif; ?> 
    </font></td>
  </tr>
</table>

</td></tr></table>
<!-- desc eof -->

</body>
</html>