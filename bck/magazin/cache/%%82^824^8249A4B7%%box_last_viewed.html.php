<?php /* Smarty version 2.6.24, created on 2012-03-11 16:14:18
         compiled from shopos-light/boxes/box_last_viewed.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/boxes/box_last_viewed.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'boxes'), $this);?>

<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td class="infoBoxHeading"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="infoBoxHeading"><?php echo $this->_config[0]['vars']['heading_last_viewed']; ?>
</td>
          <td>&nbsp;</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td class="infoBox" align="left"><table width="95%"  border="0" cellpadding="2" cellspacing="0"><tr><td class="boxText"><table border="0" width="100%" cellspacing="0" cellpadding="3" class="infoBoxContents">
              <tr> 
                <td align="center" valign="middle" class="boxText">
                    <?php if ($this->_tpl_vars['IMAGE'] != ''): ?><a href="<?php echo $this->_tpl_vars['LINK']; ?>
"><img src="<?php echo $this->_tpl_vars['IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['NAME']; ?>
" /></a>
					<br /><?php endif; ?> <a href="<?php echo $this->_tpl_vars['LINK']; ?>
"><?php echo $this->_tpl_vars['NAME']; ?>
</a>
                  <br /> 
                  <table width="98%" border="0" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td align="center" valign="middle" class="boxTextBG"><?php echo $this->_tpl_vars['PRICE']; ?>
</td>
                    </tr>
                </table></td>
              </tr>
              <tr> 
                <td align="center" valign="middle" class="boxText"><a href="<?php echo $this->_tpl_vars['MY_PERSONAL_PAGE']; ?>
"><?php echo $this->_config[0]['vars']['text_my_page']; ?>
</a></td>
              </tr>
              <tr>
                <td align="left" valign="middle" class="boxText"><?php echo $this->_config[0]['vars']['text_watch_category']; ?>
 
                  <a href="<?php echo $this->_tpl_vars['CATEGORY_LINK']; ?>
"><strong><?php echo $this->_tpl_vars['CATEGORY_NAME']; ?>
</strong></a></td>
              </tr>
            </table></td>
        </tr>
    </table></td>
  </tr>
</table>