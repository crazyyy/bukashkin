<?php /* Smarty version 2.6.24, created on 2011-05-16 12:02:25
         compiled from shopos-light/module/password_double_opt_in.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/password_double_opt_in.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'new_password'), $this);?>
 <font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong><?php echo $this->_tpl_vars['text_heading']; ?>
</strong></font> <?php if ($this->_tpl_vars['info_message'] != ''): ?><br /><table width="100%" border="0" cellspacing="0" cellpadding="0">  <tr>    <td class="main" style="border: 1px solid; border-color: #ff0000;" bgcolor="#FFCCCC"><div align="center"><?php echo $this->_tpl_vars['info_message']; ?>
</div></td>  </tr></table><br /><br /><?php endif; ?><?php echo $this->_tpl_vars['FORM_ACTION']; ?>
<table class="formArea" width="100%" border="0" cellspacing="3" cellpadding="0">  <tr>     <td colspan="2"><b><?php echo $this->_tpl_vars['message']; ?>
<br>      <br>      </b></td>  </tr>  <tr>     <td colspan="2"><strong><?php echo $this->_config[0]['vars']['text_step1']; ?>
</strong><br>      <?php echo $this->_config[0]['vars']['text_info_pre']; ?>
 <?php echo $this->_tpl_vars['SHOP_NAME']; ?>
 <?php echo $this->_config[0]['vars']['text_info_post']; ?>
</td>  </tr>  <tr>     <td width="18%">&nbsp;</td>    <td width="82%">&nbsp;</td>  </tr>  <tr>     <td><strong><?php echo $this->_config[0]['vars']['text_sec_code']; ?>
</strong></td>    <td><strong><?php echo $this->_tpl_vars['VVIMG']; ?>
</strong></td>  </tr>  <tr>     <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>  <tr>     <td><strong><?php echo $this->_config[0]['vars']['text_sec_code']; ?>
</strong></td>    <td><?php echo $this->_tpl_vars['INPUT_CODE']; ?>
</td>  </tr>  <tr>     <td><strong><?php echo $this->_config[0]['vars']['text_email']; ?>
</strong></td>    <td><?php echo $this->_tpl_vars['INPUT_EMAIL']; ?>
</td>  </tr>  <tr>     <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>  <tr>     <td colspan="2"><?php echo $this->_config[0]['vars']['text_continue']; ?>
</td>  </tr>  <tr>     <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>  <tr>     <td><strong><span class="small"><strong><?php echo $this->_config[0]['vars']['text_to_step2']; ?>
</strong></span>       </strong><span class="small"></span></td>    <td><span class="small"><?php echo $this->_tpl_vars['BUTTON_SEND']; ?>
</span><span class="small"><strong></strong></span></td>  </tr></table><?php echo $this->_tpl_vars['FORM_END']; ?>
 