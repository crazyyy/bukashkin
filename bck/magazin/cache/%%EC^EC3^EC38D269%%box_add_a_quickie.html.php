<?php /* Smarty version 2.6.24, created on 2011-11-08 21:13:39
         compiled from shopos-light/boxes/box_add_a_quickie.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/boxes/box_add_a_quickie.html', 1, false),)), $this); ?>
 <?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'boxes'), $this);?>

 <?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td class="infoBoxHeading"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="infoBoxHeading"><?php echo $this->_config[0]['vars']['heading_add_a_quickie']; ?>
 </td>
          <td></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td class="infoBox" align="left"><table width="95%"  border="0" cellpadding="2" cellspacing="0">
        <tr>
          <td class="boxText">        
    <?php echo $this->_config[0]['vars']['text_quickie']; ?>

    <table width="100%"  border="0" cellpadding="2" cellspacing="0">
      <tr valign="middle">
        <td><?php echo $this->_tpl_vars['INPUT_FIELD']; ?>
</td>
        <td align="left"><?php echo $this->_tpl_vars['SUBMIT_BUTTON']; ?>
</td>
      </tr>
    </table></td>
        </tr>
    </table></td>
  </tr>
</table>
<?php echo $this->_tpl_vars['FORM_END']; ?>