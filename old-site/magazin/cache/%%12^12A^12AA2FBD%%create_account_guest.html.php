<?php /* Smarty version 2.6.24, created on 2011-05-16 12:02:29
         compiled from shopos-light/module/create_account_guest.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/create_account_guest.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'create_account'), $this);?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">  <tr>    <td>	<table width="100%" border="0" cellspacing="0" cellpadding="0">        <tr valign="top">           <td class="contentsTopics"><?php echo $this->_config[0]['vars']['heading_create_account']; ?>
</td>		</tr>	  </table><?php echo $this->_tpl_vars['FORM_ACTION']; ?>
<?php if ($this->_tpl_vars['error'] != ''): ?><table width="100%" border="0" cellspacing="0" cellpadding="0">  <tr>    <td><?php echo $this->_tpl_vars['error']; ?>
</td>  </tr></table><?php endif; ?><table width="100%" border="0" cellspacing="0" cellpadding="0">        <tr>          <td class="main">&nbsp;</td>        </tr>  <tr>    <td><strong><?php echo $this->_config[0]['vars']['title_personal']; ?>
</strong></td>    <td align="right" class="inputRequirement"><?php echo $this->_config[0]['vars']['text_must']; ?>
</td>  </tr></table><table width="100%"  class="formArea" cellspacing="2" cellpadding="0"><?php if ($this->_tpl_vars['gender'] == '1'): ?>  <tr>           <td width="200" class="main"><?php echo $this->_config[0]['vars']['text_gender']; ?>
</td>    <td class="main">		<table cellspacing="0" cellpadding="0">			<tr>			  	<td class="main"> <?php echo $this->_tpl_vars['INPUT_MALE']; ?>
</td>			  	<td class="main"> <?php echo $this->_tpl_vars['INPUT_FEMALE']; ?>
</td>				  			</tr>		</table>	</td>  </tr>  <?php endif; ?>  <tr>     <td class="main"><?php echo $this->_config[0]['vars']['text_firstname']; ?>
</td>    <td class="inputRequirement" ><?php echo $this->_tpl_vars['INPUT_FIRSTNAME']; ?>
</td>  </tr>  <tr>     <td class="main"><?php echo $this->_config[0]['vars']['text_lastname']; ?>
</td>    <td class="inputRequirement"><?php echo $this->_tpl_vars['INPUT_LASTNAME']; ?>
</td>  </tr>  <?php if ($this->_tpl_vars['birthdate'] == '1'): ?>  <tr>     <td class="main"><?php echo $this->_config[0]['vars']['text_birthdate']; ?>
</td>    <td class="inputRequirement"><?php echo $this->_tpl_vars['INPUT_DOB']; ?>
</td>  </tr>  <?php endif; ?>  <tr>    <td class="main"><?php echo $this->_config[0]['vars']['text_email']; ?>
</td>    <td class="inputRequirement"><?php echo $this->_tpl_vars['INPUT_EMAIL']; ?>
</td>  </tr></table><?php if ($this->_tpl_vars['company'] == '1'): ?>      <table width="100%" border="0" cellspacing="0" cellpadding="0">        <tr>          <td class="main">&nbsp;</td>        </tr>        <tr>          <td class="main"><strong><?php echo $this->_config[0]['vars']['title_company']; ?>
</strong></td>        </tr>      </table>       <table class="formArea" width="100%" border="0" cellspacing="2" cellpadding="0">  <tr>           <td width="200" class="main"><?php echo $this->_config[0]['vars']['text_company']; ?>
</td>    <td class="inputRequirement"><?php echo $this->_tpl_vars['INPUT_COMPANY']; ?>
</td>  </tr>  <?php if ($this->_tpl_vars['vat'] == '1'): ?>  <tr>     <td class="main"><?php echo $this->_config[0]['vars']['text_ustid']; ?>
</td>     <td class="inputRequirement"><?php echo $this->_tpl_vars['INPUT_VAT']; ?>
</td>  </tr>  <?php endif; ?></table><?php endif; ?>      <table width="100%" border="0" cellspacing="0" cellpadding="0">        <tr>          <td class="main">&nbsp;</td>        </tr>        <tr>          <td class="main"><strong><?php echo $this->_config[0]['vars']['title_address']; ?>
</strong></td>        </tr>      </table>       <table class="formArea" width="100%" border="0" cellspacing="2" cellpadding="0">  <tr>           <td width="200" class="main"><?php echo $this->_config[0]['vars']['text_street']; ?>
</td>    <td class="inputRequirement"><?php echo $this->_tpl_vars['INPUT_STREET']; ?>
</td>  </tr>  <?php if ($this->_tpl_vars['suburb'] == '1'): ?>  <tr>     <td class="main"><?php echo $this->_config[0]['vars']['text_suburb']; ?>
</td>    <td class="inputRequirement"><?php echo $this->_tpl_vars['INPUT_SUBURB']; ?>
</td>  </tr>  <?php endif; ?>  <tr>     <td class="main"><?php echo $this->_config[0]['vars']['text_code']; ?>
</td>    <td class="inputRequirement"><?php echo $this->_tpl_vars['INPUT_CODE']; ?>
</td>  </tr>  <tr>     <td class="main"><?php echo $this->_config[0]['vars']['text_city']; ?>
</td>    <td class="inputRequirement"><?php echo $this->_tpl_vars['INPUT_CITY']; ?>
</td>  </tr>  <?php if ($this->_tpl_vars['state'] == '1'): ?>  <tr>     <td class="main"><?php echo $this->_config[0]['vars']['text_state']; ?>
</td>    <td class="inputRequirement"><?php echo $this->_tpl_vars['INPUT_STATE']; ?>
</td>  </tr>  <?php endif; ?>  <tr>    <td class="main"><?php echo $this->_config[0]['vars']['text_country']; ?>
</td>    <td class="inputRequirement"><?php echo $this->_tpl_vars['SELECT_COUNTRY']; ?>
</td>  </tr></table>      <table width="100%" border="0" cellspacing="0" cellpadding="0">        <tr>          <td class="main">&nbsp;</td>        </tr>        <tr>          <td class="main"><strong><?php echo $this->_config[0]['vars']['title_contact']; ?>
</strong></td>        </tr>      </table>       <table class="formArea" width="100%" border="0" cellspacing="2" cellpadding="0">  <tr>           <td width="200" class="main"><?php echo $this->_config[0]['vars']['text_tel']; ?>
</td>    <td class="inputRequirement"><?php echo $this->_tpl_vars['INPUT_TEL']; ?>
</td>  </tr>  <tr>    <td class="main"><?php echo $this->_config[0]['vars']['text_fax']; ?>
</td>    <td class="inputRequirement"><?php echo $this->_tpl_vars['INPUT_FAX']; ?>
</td>  </tr></table><table width="100%" border="0" cellspacing="0" cellpadding="0">  <tr>    <td align="right"><?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>
</td>  </tr></table><?php echo $this->_tpl_vars['FORM_END']; ?>
</td>  </tr></table>