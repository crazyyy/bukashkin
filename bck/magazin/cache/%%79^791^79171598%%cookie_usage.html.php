<?php /* Smarty version 2.6.24, created on 2011-05-26 03:16:55
         compiled from shopos-light/module/cookie_usage.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/cookie_usage.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'cookie_usage'), $this);?>
 <font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong><?php echo $this->_config[0]['vars']['heading_cookie_usage']; ?>
</strong></font> 
<br />
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="main"><?php echo $this->_config[0]['vars']['text_information']; ?>
</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="infoboxheading" width="250"><?php echo $this->_config[0]['vars']['title_infobox']; ?>
</td>
        </tr>
        <tr>
          <td class="main" ><?php echo $this->_config[0]['vars']['text_infobox']; ?>
</td>
        </tr>
      </table></td>
  </tr>
</table>
<p align="right"><?php echo $this->_tpl_vars['BUTTON_CONTINUE']; ?>
</p>