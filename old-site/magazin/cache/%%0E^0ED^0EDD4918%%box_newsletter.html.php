<?php /* Smarty version 2.6.24, created on 2011-05-05 14:31:28
         compiled from default/boxes/box_newsletter.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'default/boxes/box_newsletter.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'boxes'), $this);?>

<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<table class="adn"><tr><td class="hd bf"><?php echo $this->_config[0]['vars']['heading_guestnewsletter']; ?>
</td></tr></table>
<table class="adn"><tr><td class="hdb vcent">
<div class="dtree vleft" style="display: block;">
<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr> 
    <td class="infoBox_right" align="left"> <table width="95%"  border="0" cellpadding="2" cellspacing="0">
        <tr> 
          <td class="blockTitle"> 
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td><b><?php echo $this->_config[0]['vars']['text_email']; ?>
</b>: <?php echo $this->_tpl_vars['FIELD_EMAIL']; ?>
</td>
              </tr>
              <tr> 
                <td><table width="100%"  border="0" cellpadding="2" cellspacing="0">
                    <tr> 
                      <td align="right"><br /><?php echo $this->_tpl_vars['BUTTON']; ?>
</td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
        </div>
</td></tr></table>
<?php echo $this->_tpl_vars['FORM_END']; ?>