<?php /* Smarty version 2.6.24, created on 2011-11-08 21:13:42
         compiled from shopos-light/module/main_content.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/main_content.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'index'), $this);?>

<?php echo $this->_tpl_vars['MODULE_error']; ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td class="pageHeading"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td><?php echo $this->_tpl_vars['title']; ?>
</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td class="pageHeading">&nbsp;</td>
  </tr>
  <tr> 
    <td class="main"><?php echo $this->_tpl_vars['text']; ?>
<br /></td>
  </tr>
  <tr> 
    <td class="main"><?php echo $this->_tpl_vars['MODULE_new_products']; ?>
</td>
  </tr>
  <tr>
    <td class="main"><?php echo $this->_tpl_vars['MODULE_upcoming_products']; ?>
</td>
  </tr>
</table>
