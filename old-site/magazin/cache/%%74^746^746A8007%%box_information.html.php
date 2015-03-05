<?php /* Smarty version 2.6.24, created on 2011-05-05 14:31:28
         compiled from default/boxes/box_information.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'default/boxes/box_information.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'boxes'), $this);?>

<table class="adn"><tr><td class="hd bf"><?php echo $this->_config[0]['vars']['heading_content']; ?>
</td></tr></table>
<table class="adn"><tr><td class="hdb"><?php echo $this->_tpl_vars['BOX_CONTENT']; ?>
</td></tr></table>