<?php /* Smarty version 2.6.24, created on 2011-05-05 14:31:28
         compiled from default/module/main_content.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'default/module/main_content.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'index'), $this);?>

<?php echo $this->_tpl_vars['MODULE_error']; ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="main"><?php echo $this->_tpl_vars['text']; ?>
</td>
  </tr>
</table>
<?php echo $this->_tpl_vars['MODULE_latest_news']; ?>
	
<?php echo $this->_tpl_vars['MODULE_featured_products']; ?>

<?php echo $this->_tpl_vars['MODULE_new_products']; ?>

<?php echo $this->_tpl_vars['MODULE_upcoming_products']; ?>