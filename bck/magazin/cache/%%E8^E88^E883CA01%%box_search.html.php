<?php /* Smarty version 2.6.24, created on 2011-05-05 14:31:28
         compiled from default/boxes/box_search.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'default/boxes/box_search.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'boxes'), $this);?>

<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<table class="adn"><tr><td class="hd bf"><?php echo $this->_config[0]['vars']['heading_search']; ?>
</td></tr></table>
<table class="adn"><tr><td class="hdb vcent">

<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td class="infoBox" align="left"><table width="95%"  border="0" cellpadding="2" cellspacing="0">
        <tr>
          <td class="blockTitle">
            <table width="100%"  border="0" cellpadding="2" cellspacing="0">
              <tr>
                <td valign="middle"><?php echo $this->_tpl_vars['INPUT_SEARCH']; ?>
</td>
                <td valign="middle" width="100%"><?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>
</td>
              </tr>
              <tr>
                <td colspan="2"><div class="ajaxQuickFind" id="ajaxQuickFind" style="text-align: left;"></div>
</td>
              </tr>
            </table>
            <br />
            <a href="<?php echo $this->_tpl_vars['LINK_ADVANCED']; ?>
"><?php echo $this->_config[0]['vars']['text_advanced_search']; ?>
</a> </td>
        </tr>
    </table></td>
  </tr>
</table>
</td></tr></table>
<?php echo $this->_tpl_vars['FORM_END']; ?>

<?php echo '
<script language="javascript" type="text/javascript">
	function ajaxQuickFind(elt) {
//		if(ajaxQuickFindUpForm.keywords.value.length > 2)
			loadXMLDoc(\'ajaxQuickFind\', hashFormFields(ajaxQuickFindUpForm), true);
	}
	var timeout = null;
	var ajaxQuickFindUpForm = null;
	function ajaxQuickFindUp(elt) {
		ajaxQuickFindUpForm = elt.form;
	  if (timeout) clearTimeout(timeout);
	  timeout = setTimeout(\'ajaxQuickFind()\', 500);
	}
</script>
'; ?>