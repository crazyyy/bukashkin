<?php /* Smarty version 2.6.24, created on 2012-03-11 16:14:08
         compiled from shopos-light/boxes/box_manufacturers_info.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/boxes/box_manufacturers_info.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'boxes'), $this);?>


<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td class="infoBoxHeading_right"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="infoBoxHeading_right"><?php echo $this->_config[0]['vars']['heading_manufacturers_info']; ?>
 </td>
          <td>&nbsp;</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td class="infoBox_right" align="left"><table width="95%"  border="0" cellpadding="2" cellspacing="0">
        <tr>
          <td class="boxText"><?php if ($this->_tpl_vars['IMAGE']): ?><center><img src="<?php echo $this->_tpl_vars['IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['NAME']; ?>
" /><br />
          </center><?php endif; ?>
            <?php echo $this->_tpl_vars['NAME']; ?>
<br />
            <?php if ($this->_tpl_vars['URL']): ?><?php echo $this->_tpl_vars['URL']; ?>
<br /><?php endif; ?>
          <?php echo $this->_tpl_vars['LINK_MORE']; ?>
</td>
        </tr>
    </table></td>
  </tr>
</table>