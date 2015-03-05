<?php /* Smarty version 2.6.24, created on 2011-05-05 14:31:28
         compiled from default/module/latest_news_default.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'default/module/latest_news_default.html', 1, false),array('modifier', 'os_truncate', 'default/module/latest_news_default.html', 21, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'latest_news'), $this);?>
 <table cellspacing="0" cellpadding="0" width="100%"><tr><td class="hd bf" align="left"><a href="<?php echo $this->_tpl_vars['NEWS_LINK']; ?>
"><?php echo $this->_config[0]['vars']['heading_text']; ?>
</a></td></tr></table>
<table width="100%" border="0" cellspacing="0" cellpadding="4">  <tr>  <?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?>  <?php  $col++;    ?>    <td class="main" width="50%" valign="top">        <table  width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr class="contentBoxContents1" valign="top">
    <td height="90" class="contentBoxContents1" valign="top">
      <table border="0" width="100%" cellspacing="5" cellpadding="0">
        <tr>
                <td class="contents">
                
                <span class="date"><?php echo $this->_tpl_vars['module_data']['NEWS_DATA']; ?>
</span><br /><strong><a href="<?php echo $this->_tpl_vars['module_data']['NEWS_LINK_MORE']; ?>
"><?php echo $this->_tpl_vars['module_data']['NEWS_HEADING']; ?>
</a></strong>
                
                </td>

                <td class="contents" align="right"></td>
                
        </tr>
        <tr>
                <td class="contents" valign="top" width="100%" colspan="2">


<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td class="contents"><div style="padding-left:1em"><?php echo ((is_array($_tmp=$this->_tpl_vars['module_data']['NEWS_CONTENT'])) ? $this->_run_mod_handler('os_truncate', true, $_tmp, @MAX_DISPLAY_LATEST_NEWS_CONTENT, " ...") : smarty_modifier_os_truncate($_tmp, @MAX_DISPLAY_LATEST_NEWS_CONTENT, " ...")); ?>
</div></td></tr>
<tr><td class="contents"><a href="<?php echo $this->_tpl_vars['NEWS_LINK']; ?>
" class="contents"><?php echo $this->_config[0]['vars']['other_news']; ?>
</a></td></tr>
</table>

                </td>

        </tr>
</table>
</td>
  </tr>
        </table></td>  <?php    if ($col>=2) {  $col=0;  echo '</tr><tr>';  }   ?>  <?php endforeach; endif; unset($_from); ?>    <td></td>  </tr></table>