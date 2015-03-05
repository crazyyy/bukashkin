<?php /* Smarty version 2.6.24, created on 2012-03-11 16:14:08
         compiled from shopos-light/boxes/box_reviews.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/boxes/box_reviews.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'boxes'), $this);?>


<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td class="infoBoxHeading"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td class="infoBoxHeading"><?php echo $this->_config[0]['vars']['heading_reviews']; ?>
 </td>
        <td align="right"><a href="<?php echo $this->_tpl_vars['REVIEWS_LINK']; ?>
"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/icon_more.gif" alt="" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td class="infoBox" align="left"><table width="95%"  border="0" cellpadding="2" cellspacing="0">
        <tr>
          <td class="boxText"><?php echo $this->_tpl_vars['BOX_CONTENT']; ?>
</td>
        </tr>
    </table></td>
  </tr>
</table>