<?php /* Smarty version 2.6.24, created on 2011-11-08 21:13:42
         compiled from shopos-light/boxes/box_best_sellers.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/boxes/box_best_sellers.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'boxes'), $this);?>


<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td class="infoBoxHeading_right"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="infoBoxHeading_right"><?php echo $this->_config[0]['vars']['heading_best_sellers']; ?>
 </td>
          <td>&nbsp;</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td class="infoBox_right" align="left"><table width="95%"  border="0" cellpadding="2" cellspacing="0">
        <tr>
          <td class="boxText"><table border="0" width="100%" cellspacing="0" cellpadding="3" class="infoBoxContents">
            <tr>
              <td align="left" class="boxText">
                <table width="100%" border="0" cellspacing="2" cellpadding="0">
        <?php $_from = $this->_tpl_vars['box_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['box_data']):
        $this->_foreach['aussen']['iteration']++;
?>
          <tr>
            <td valign="top" class="boxText" style="border-bottom: 1px solid; border-color: #cccccc;"><?php echo $this->_tpl_vars['box_data']['ID']; ?>
.</td>
            <td style="border-bottom: 1px solid; border-color: #cccccc;" class="boxText"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="boxText"><a href="<?php echo $this->_tpl_vars['box_data']['LINK']; ?>
"><?php echo $this->_tpl_vars['box_data']['NAME']; ?>
</a> </td>
                </tr>
                <tr>
                  <td class="boxTeosPrice" align="right"><strong><?php echo $this->_tpl_vars['box_data']['PRICE']; ?>
</strong></td>
                </tr>
              </table></td>
          </tr>
        <?php endforeach; endif; unset($_from); ?>
              </table></td>
            </tr>
          </table></td>
        </tr>
    </table></td>
  </tr>
</table>