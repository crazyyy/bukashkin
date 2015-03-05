<?php /* Smarty version 2.6.24, created on 2011-05-05 14:31:28
         compiled from default/boxes/box_login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'default/boxes/box_login.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'boxes'), $this);?>

<table class="adn"><tr><td class="hd bf"><?php echo $this->_config[0]['vars']['heading_login']; ?>
</td></tr></table>
<table class="adn"><tr><td class="hdb vcent">
  <?php echo $this->_tpl_vars['FORM_ACTION']; ?>
 
 <table class="adw" align="center" border="0">
  <tr>
   <td><?php echo $this->_config[0]['vars']['text_email']; ?>
:</td><td><?php echo $this->_tpl_vars['FIELD_EMAIL']; ?>
</td>
  </tr>
    <tr>
    <td></td><td></td>
  </tr>
  <tr>
    <td><?php echo $this->_config[0]['vars']['text_pwd']; ?>
:</td><td class="mid"><?php echo $this->_tpl_vars['FIELD_PWD']; ?>
</td>
  </tr>
   <tr>
   <td align="center" colspan="2"><br /><?php echo $this->_tpl_vars['BUTTON']; ?>

   <br /> <a href="<?php echo $this->_tpl_vars['LINK_NEW_ACCOUNT']; ?>
"><?php echo $this->_config[0]['vars']['text_register']; ?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_tpl_vars['LINK_LOST_PASSWORD']; ?>
"><?php echo $this->_config[0]['vars']['text_password_forgotten']; ?>
</a></td>
  </tr>
  </table>
<?php echo $this->_tpl_vars['FORM_END']; ?>

</td></tr></table>