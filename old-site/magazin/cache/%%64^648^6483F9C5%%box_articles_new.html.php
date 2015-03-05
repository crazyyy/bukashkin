<?php /* Smarty version 2.6.24, created on 2011-05-05 14:31:28
         compiled from default/boxes/box_articles_new.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'default/boxes/box_articles_new.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'boxes'), $this);?>

<table class="adn"><tr><td class="hd bf"><?php echo $this->_config[0]['vars']['heading_articles_new']; ?>
</td></tr></table>
<table class="adn"><tr><td class="hdb vcent">
<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td class="infoBox" align="left"><table width="95%"  border="0" cellpadding="2" cellspacing="0">
        <tr>
          <td class="blockTitle">
<?php $_from = $this->_tpl_vars['articles_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['articles']):
        $this->_foreach['aussen']['iteration']++;
?>
<a href="<?php echo $this->_tpl_vars['articles']['ARTICLES_URL']; ?>
"><?php echo $this->_tpl_vars['articles']['ARTICLES_NAME']; ?>
</a><br /><br />
 <?php endforeach; endif; unset($_from); ?>  
          </td>
        </tr>
    </table></td>
  </tr>
</table>

</td></tr></table>