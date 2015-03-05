<?php /* Smarty version 2.6.24, created on 2011-05-07 23:37:48
         compiled from shopos-light/module/contact_us.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/contact_us.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'contact_us'), $this);?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="contentsTopics"><?php echo $this->_tpl_vars['CONTACT_HEADING']; ?>
</td>
  </tr>
</table>
<br />
<br />
<?php if ($this->_tpl_vars['error_message'] != ''): ?>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="main" style="border: 1px solid; border-color: #ff0000;" bgcolor="#FFCCCC" align="center"><?php echo $this->_tpl_vars['error_message']; ?>
</td>
  </tr>
</table>
<br />
<?php endif; ?>

<?php if ($this->_tpl_vars['success'] != '1'): ?>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td class="main"><?php echo $this->_tpl_vars['CONTACT_CONTENT']; ?>
</td>
  </tr>
  <tr> 
    <td align="right"><br /></td>
  </tr>
  <tr> 
    <td><table width="100%" border="0" cellspacing="2" cellpadding="0">
        <tr> 
          <td class="main"><?php echo $this->_config[0]['vars']['text_name']; ?>
</td>
          <td><?php echo $this->_tpl_vars['INPUT_NAME']; ?>
</td>
        </tr>
        <tr> 
          <td class="main"><?php echo $this->_config[0]['vars']['text_email']; ?>
</td>
          <td><?php echo $this->_tpl_vars['INPUT_EMAIL']; ?>
</td>
        </tr>
        <tr>
          <td class="main" valign="top"><?php echo $this->_config[0]['vars']['text_message']; ?>
</td>
          <td><?php echo $this->_tpl_vars['INPUT_TEXT']; ?>
</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>
</td>
  </tr>
</table>
<?php echo $this->_tpl_vars['FORM_END']; ?>

<?php else: ?>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr> 
    <td><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/checkout_success.gif" alt="" /></td>
    <td class="main"valign="top"><br />
      <?php echo $this->_config[0]['vars']['text_success']; ?>
<br /> <br />
      <br /> <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td align="right"><br /><?php echo $this->_tpl_vars['BUTTON_CONTINUE']; ?>
</td>
        </tr>
      </table></td>
  </tr>
</table>
<?php endif; ?>