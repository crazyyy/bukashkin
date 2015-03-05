<?php /* Smarty version 2.6.24, created on 2011-05-05 14:34:06
         compiled from default/boxes/box_order_history.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'default/boxes/box_order_history.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'boxes'), $this);?>

<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td class="infoBoxHeading_right">
	<table width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100%" height="14" class="infoBoxHeading"><span class="orderhistoryBox"><?php echo $this->_config[0]['vars']['heading_order_history']; ?>
</span></td>
  </tr>
    </table>
	</td>
  </tr>
  <tr>
    <td class="infoBox_right" align="left"><table width="95%"  border="0" cellpadding="2" cellspacing="0">
        <tr>
          <td class="blockTitle"><?php echo $this->_tpl_vars['BOX_CONTENT']; ?>
</td>
        </tr>
    </table></td>
  </tr>
</table>