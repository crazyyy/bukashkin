<?php /* Smarty version 2.6.24, created on 2011-05-05 15:20:45
         compiled from shopos-light/module/product_reviews_write.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/product_reviews_write.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'reviews'), $this);?>

<br />
<font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong><?php echo $this->_config[0]['vars']['heading_reviews_write']; ?>
</strong></font><br />
<br />
<?php if ($this->_tpl_vars['error']): ?>
<?php echo $this->_tpl_vars['error']; ?>

<?php else: ?>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="main"><p><strong><?php echo $this->_config[0]['vars']['text_product']; ?>
</strong> <?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
<br />
        <strong><?php echo $this->_config[0]['vars']['text_author']; ?>
</strong> <?php echo $this->_tpl_vars['AUTHOR']; ?>
</p>
      <p><strong><?php echo $this->_config[0]['vars']['text_input']; ?>
</strong><br />
        <?php echo $this->_tpl_vars['INPUT_TEXT']; ?>
<br />
        <font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $this->_config[0]['vars']['text_note']; ?>
</font><br />
        <br />
        <strong><?php echo $this->_config[0]['vars']['text_rating']; ?>
&nbsp;<font color="#FF0000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $this->_config[0]['vars']['text_bad']; ?>
</font></strong><?php echo $this->_tpl_vars['INPUT_RATING']; ?>
<font color="#FF0000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><?php echo $this->_config[0]['vars']['text_good']; ?>
</strong></font></p></td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php echo $this->_tpl_vars['BUTTON_BACK']; ?>
</td>
    <td><div align="right"><?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>
</div></td>
  </tr>
</table>
<?php echo $this->_tpl_vars['FORM_END']; ?>


<?php endif; ?>