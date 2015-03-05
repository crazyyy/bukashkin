<?php /* Smarty version 2.6.24, created on 2011-05-27 03:03:55
         compiled from shopos-light/module/error_message.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/error_message.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'error_handler'), $this);?>
<table width="100%"  border="0" cellpadding="0" cellspacing="0">	<tr>    	<td class="main" align="center" style="border: 1px solid; border-color: #ff0000; background-color:#FFCCCC;"><strong><?php echo $this->_tpl_vars['ERROR']; ?>
</strong></td>	</tr></table><br /><?php echo $this->_config[0]['vars']['text_search_again']; ?>
<br /><?php echo $this->_tpl_vars['FORM_ACTION']; ?>
<table style="border:1px solid; border-color: #666666; background-color: #E6E6E6;" width="100%"  border="0" cellpadding="5" cellspacing="0">	<tr>		    <td width="70%" align="right" class="main"><strong><?php echo $this->_config[0]['vars']['text_search']; ?>
</strong>       <?php echo $this->_tpl_vars['INPUT_SEARCH']; ?>
</td>		<td><?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>
</td>	</tr></table><?php echo $this->_tpl_vars['FORM_END']; ?>
<table width="100%" border="0">	<tr>		<td align="right"><?php echo $this->_tpl_vars['BUTTON']; ?>
</td>	</tr></table> 