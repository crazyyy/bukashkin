<?php /* Smarty version 2.6.24, created on 2011-05-27 03:04:03
         compiled from shopos-light/module/categorie_listing/categorie_listing.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/categorie_listing/categorie_listing.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'categorie_listing'), $this);?>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr valign="top"> 
    <td class="main"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr valign="top"> 
          <td class="contentsTopics"><?php echo $this->_tpl_vars['CATEGORIES_NAME']; ?>
</td>
          <td align="right"><?php if ($this->_tpl_vars['CATEGORIES_IMAGE']): ?><img src="<?php echo $this->_tpl_vars['CATEGORIES_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['CATEGORIES_IMAGE']; ?>
" /><?php endif; ?></td>
        </tr>
        <tr valign="top"> 
          <td class="contentsTopics"><?php echo $this->_tpl_vars['CATEGORIES_HEADING_TITLE']; ?>
</td>
          <td align="right"></td>
        </tr>	
      </table><?php if ($this->_tpl_vars['CATEGORIES_DESCRIPTION']): ?>
      <?php echo $this->_tpl_vars['CATEGORIES_DESCRIPTION']; ?>
 
      <br />
      <br />
	  <?php endif; ?>
      <?php if ($this->_tpl_vars['module_content'] != ''): ?> <strong><?php echo $this->_config[0]['vars']['heading_more_categories']; ?>
</strong> 
      <br />
      <table style="border-top: 2px solid; border-color: #d4d4d4;" width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> <?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?> 
		<?php  
          $col++; 
		 ?> 
          <td class="main"><table  width="100%" border="0" cellpadding="0" cellspacing="4">
                <tr> 
                  <td align="center" ><?php if ($this->_tpl_vars['module_data']['CATEGORIES_IMAGE']): ?><a href="<?php echo $this->_tpl_vars['module_data']['CATEGORIES_LINK']; ?>
"><img src="<?php echo $this->_tpl_vars['module_data']['CATEGORIES_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['CATEGORIES_NAME']; ?>
" /></a><?php endif; ?></td>
                </tr>
                <tr>
                  <td align="center" ><strong><a href="<?php echo $this->_tpl_vars['module_data']['CATEGORIES_LINK']; ?>
"><?php echo $this->_tpl_vars['module_data']['CATEGORIES_NAME']; ?>
</a></strong></td>
                </tr>
                <tr>
                  <td align="center" ><?php echo $this->_tpl_vars['module_data']['CATEGORIES_DESCRIPTION']; ?>
</td>
                </tr>
              </table>
            </td>
          <?php  
		  if ($col>=3) { 
		  $col=0; 
		  echo '</tr><tr>';
		   } 
		   ?> 
		 <?php endforeach; endif; unset($_from); ?> </tr>
      </table> 
       <?php endif; ?> <br />
    </td>
    <td class="main">&nbsp;</td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php echo $this->_tpl_vars['MODULE_new_products']; ?>
</td>
  </tr>
</table>