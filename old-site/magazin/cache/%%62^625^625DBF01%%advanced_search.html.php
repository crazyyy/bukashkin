<?php /* Smarty version 2.6.24, created on 2011-05-16 12:02:23
         compiled from shopos-light/module/advanced_search.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/advanced_search.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'advanced_search'), $this);?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr valign="top"> 
    	<td class="contentsTopics"><?php echo $this->_config[0]['vars']['heading_search']; ?>
</td>
	</tr>
</table>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<?php if ($this->_tpl_vars['error'] != ''): ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php echo $this->_tpl_vars['error']; ?>
</td>
  </tr>
</table>
<?php endif; ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td class="main"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td class="main" align="right"><a href="<?php echo $this->_tpl_vars['HELP_LINK']; ?>
"><?php echo $this->_config[0]['vars']['text_help']; ?>
</a></td>
        </tr>
      </table>
      
    </td>
  </tr>
</table>
<table width="100%" border="0" class="formArea">
  <tr> 
    <td width="250"><strong><?php echo $this->_config[0]['vars']['title_keywords']; ?>
</strong></td>
    <td><?php echo $this->_tpl_vars['INPUT_KEYWORDS']; ?>
</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td valign="top"><strong><?php echo $this->_config[0]['vars']['text_categories']; ?>
</strong></td>
    <td><?php echo $this->_tpl_vars['SELECT_CATEGORIES']; ?>
<br>
      <?php echo $this->_tpl_vars['ENTRY_SUBCAT']; ?>
<?php echo $this->_config[0]['vars']['text_subkategories']; ?>
</td>
  </tr>
  <tr> 
    <td valign="top"><strong><?php echo $this->_config[0]['vars']['text_manufacturer']; ?>
</strong></td>
    <td><?php echo $this->_tpl_vars['SELECT_MANUFACTURERS']; ?>
</td>
  </tr>
  <tr> 
    <td valign="top"><strong><?php echo $this->_config[0]['vars']['text_min']; ?>
</strong></td>
    <td><?php echo $this->_tpl_vars['SELECT_PFROM']; ?>
</td>
  </tr>
  <tr>
    <td valign="top"><strong><?php echo $this->_config[0]['vars']['text_max']; ?>
</strong></td>
    <td><?php echo $this->_tpl_vars['SELECT_PTO']; ?>
</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right"><?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>
</td>
  </tr>
</table>
<?php echo $this->_tpl_vars['FORM_END']; ?>