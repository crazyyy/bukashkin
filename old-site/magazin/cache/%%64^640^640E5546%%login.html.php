<?php /* Smarty version 2.6.24, created on 2011-05-06 07:40:35
         compiled from shopos-light/module/login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/login.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'login'), $this);?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">	<tr valign="top"> 		<td class="contentsTopics"><?php echo $this->_config[0]['vars']['heading_login']; ?>
</td>	</tr></table><br /><?php if ($this->_tpl_vars['info_message'] != ''): ?><table width="100%"  border="0" cellspacing="0" cellpadding="0">  <tr class="headerMessage">    <td align="center"><?php echo $this->_tpl_vars['info_message']; ?>
</td>  </tr></table><br /><?php endif; ?><?php if ($this->_tpl_vars['account_option'] == 'account' || $this->_tpl_vars['account_option'] == 'both'): ?> <table width="100%" border="0" cellspacing="0" cellpadding="5">  <tr>    <td width="50%" valign="top">       <table width="100%" border="0" cellspacing="0" cellpadding="0">        <tr>           <td style="border-bottom: 1px solid; border-color: #cccccc;" class="main"><strong><?php echo $this->_config[0]['vars']['title_new']; ?>
</strong></td>        </tr>        <tr>           <td style="border-right: 1px solid; border-color: #cccccc;" class="main"><?php echo $this->_config[0]['vars']['text_new']; ?>
<br />            <br />            <?php echo $this->_tpl_vars['BUTTON_NEW_ACCOUNT']; ?>
 </td>        </tr>      </table>    </td>    <td width="50%" valign="top"> <?php echo $this->_tpl_vars['FORM_ACTION']; ?>
       <table width="100%" border="0" cellspacing="0" cellpadding="0">          <tr>            <td style="border-bottom: 1px solid; border-color: #cccccc;"  class="main"><strong><?php echo $this->_config[0]['vars']['title_returning']; ?>
</strong></td>          </tr>          <tr>            <td class="main"><p><?php echo $this->_config[0]['vars']['text_returning']; ?>
<br /></p>              <table width="100" border="0" cellspacing="2" cellpadding="0">                <tr>                  <td class="main"><strong><?php echo $this->_config[0]['vars']['text_email']; ?>
</strong> </td>                  <td><?php echo $this->_tpl_vars['INPUT_MAIL']; ?>
</td>                </tr>                <tr>                  <td class="main"><strong><?php echo $this->_config[0]['vars']['text_password']; ?>
</strong></td>                  <td><?php echo $this->_tpl_vars['INPUT_PASSWORD']; ?>
</td>                </tr>              </table>              <p><br /><a href="<?php echo $this->_tpl_vars['LINK_LOST_PASSWORD']; ?>
"><?php echo $this->_config[0]['vars']['text_lost_password']; ?>
</a></p>              <p><?php echo $this->_tpl_vars['BUTTON_LOGIN']; ?>
</p></td>          </tr>        </table>      <?php echo $this->_tpl_vars['FORM_END']; ?>
		</td>  </tr></table><?php endif; ?><br /><?php if ($this->_tpl_vars['account_option'] == 'both' || $this->_tpl_vars['account_option'] == 'guest'): ?><br /><table width="100%" border="0" cellspacing="0" cellpadding="0">  <tr>    <td align="center"><table width="50%" border="0" cellspacing="0" cellpadding="0">        <tr>          <td style="border-bottom: 1px solid; border-color: #cccccc;" class="main"><strong><?php echo $this->_config[0]['vars']['title_guest']; ?>
</strong></td>        </tr>        <tr>          <td style="border-right: 1px solid; border-color: #cccccc;" class="main"><?php echo $this->_config[0]['vars']['text_guest']; ?>
<br />            <br />            <?php echo $this->_tpl_vars['BUTTON_GUEST']; ?>
</td>        </tr>      </table>    </td>  </tr></table><?php endif; ?>