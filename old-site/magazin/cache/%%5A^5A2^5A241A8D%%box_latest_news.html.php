<?php /* Smarty version 2.6.24, created on 2011-05-05 14:31:28
         compiled from default/boxes/box_latest_news.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'default/boxes/box_latest_news.html', 1, false),array('modifier', 'os_truncate', 'default/boxes/box_latest_news.html', 12, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'boxes'), $this);?>


<table class="adn"><tr><td class="hd bf"><?php echo $this->_config[0]['vars']['heading_news']; ?>
</td></tr></table>
<table class="adn"><tr><td class="hdb vcent"><div class="vleft">

	<table width="95%"  border="0" cellpadding="2" cellspacing="0">
        <tr>
          <td class="blockTitle">
  <?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?>
		<br /><em><?php echo $this->_tpl_vars['module_data']['NEWS_DATA']; ?>
</em>
		<strong><a href="<?php echo $this->_tpl_vars['module_data']['NEWS_LINK_MORE']; ?>
"><?php echo $this->_tpl_vars['module_data']['NEWS_HEADING']; ?>
</a></strong><br />
		<?php echo ((is_array($_tmp=$this->_tpl_vars['module_data']['NEWS_CONTENT'])) ? $this->_run_mod_handler('os_truncate', true, $_tmp, @MAX_DISPLAY_LATEST_NEWS_CONTENT, " ...") : smarty_modifier_os_truncate($_tmp, @MAX_DISPLAY_LATEST_NEWS_CONTENT, " ...")); ?>
<br />
  <?php endforeach; endif; unset($_from); ?>  
          </td>
        </tr>
    </table>



</div>
</td></tr></table>