<?php /* Smarty version 2.6.24, created on 2011-05-16 12:02:28
         compiled from shopos-light/module/newsletter.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/newsletter.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'newsletter'), $this);?>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">        <tr valign="top">           <td class="contentsTopics"><?php echo $this->_config[0]['vars']['heading_title']; ?>
</td>		</tr>	  </table><?php if ($this->_tpl_vars['info_message'] != ''): ?> <table width="100%" border="0" cellspacing="0" cellpadding="0">  <tr>     <td class="main" style="border: 1px solid; border-color: #ff0000;" bgcolor="#FFCCCC"><div align="center"><?php echo $this->_tpl_vars['info_message']; ?>
</div></td>  </tr></table><?php endif; ?> <?php echo $this->_tpl_vars['FORM_ACTION']; ?>
 <table class="formArea" width="100%" border="0" cellspacing="3" cellpadding="0">  <tr>     <td width="18%">&nbsp;</td>    <td width="82%">&nbsp;</td>  </tr>  <tr>     <td><strong><?php echo $this->_config[0]['vars']['text_sec_code']; ?>
</strong></td>    <td><strong><?php echo $this->_tpl_vars['VVIMG']; ?>
</strong></td>  </tr>  <tr>     <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>  <tr>     <td><strong><?php echo $this->_config[0]['vars']['text_sec_code']; ?>
</strong></td>    <td><?php echo $this->_tpl_vars['INPUT_CODE']; ?>
</td>  </tr>  <tr>     <td><strong><?php echo $this->_config[0]['vars']['text_email']; ?>
</strong></td>    <td><?php echo $this->_tpl_vars['INPUT_EMAIL']; ?>
</td>  </tr>  <tr>     <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>  <tr>     <td>&nbsp;</td>    <td><table cellspacing="0" cellpadding="0">        <tr>           <td class="main"><?php echo $this->_tpl_vars['CHECK_INP']; ?>
</td>          <td class="main"><?php echo $this->_config[0]['vars']['text_in']; ?>
</td>        </tr>        <tr>           <td class="main"><?php echo $this->_tpl_vars['CHECK_DEL']; ?>
</td>          <td class="main"><?php echo $this->_config[0]['vars']['text_out']; ?>
</td>        </tr>      </table></td>  </tr>  <tr>     <td>&nbsp;</td>    <td><span class="small"><?php echo $this->_tpl_vars['BUTTON_SEND']; ?>
</span><span class="small"><strong></strong></span></td>  </tr></table><?php echo $this->_tpl_vars['FORM_END']; ?>
<br>