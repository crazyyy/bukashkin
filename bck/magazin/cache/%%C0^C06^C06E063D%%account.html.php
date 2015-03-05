<?php /* Smarty version 2.6.24, created on 2011-05-16 12:02:15
         compiled from shopos-light/module/account.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/module/account.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'account'), $this);?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">	<tr valign="top">		<td class="moduleHeading" align="left"><?php echo $this->_config[0]['vars']['heading_account']; ?>
<?php echo $this->_tpl_vars['error_message']; ?>
</td>	</tr></table><table width="100%" border="0" cellspacing="0" cellpadding="2">  <tr>    <td width="50%" valign="top"> <?php if ($this->_tpl_vars['products_history']): ?><span class="smallHeading"><?php echo $this->_config[0]['vars']['title_viewed_products']; ?>
</span>       <table width="100%" border="0" cellspacing="0" cellpadding="0">        <tr>     	<td valign="middle" class="main" style="border-top: 1px solid; border-color: #cccccc;">       	<table width="100%" border="0" cellspacing="0" cellpadding="3">              <?php $_from = $this->_tpl_vars['products_history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['history_products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['history_products']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['products_history']):
        $this->_foreach['history_products']['iteration']++;
?>               <tr>                 <td rowspan="4" valign="top" class="main" style="border-bottom: 1px solid; border-color: #cccccc;"><a href="<?php echo $this->_tpl_vars['products_history']['PRODUCTS_URL']; ?>
"><img src="<?php echo $this->_tpl_vars['products_history']['PRODUCTS_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['products_history']['PRODUCTS_NAME']; ?>
" border="0" /></a></td>                <td valign="top" class="main"><a href="<?php echo $this->_tpl_vars['products_history']['PRODUCTS_URL']; ?>
"><?php echo $this->_tpl_vars['products_history']['PRODUCTS_NAME']; ?>
</a></td>              </tr>              <tr>                 <td valign="bottom" class="main"><?php echo $this->_tpl_vars['products_history']['PRODUCTS_PRICE']; ?>
</td>              </tr>              <tr>                <td valign="bottom" class="main"><a href="<?php echo $this->_tpl_vars['products_history']['PRODUCTS_URL']; ?>
"></a><a href="<?php echo $this->_tpl_vars['products_history']['PRODUCTS_CATEGORY_URL']; ?>
"><?php echo $this->_config[0]['vars']['text_goto_cat']; ?>
</a></td>              </tr>              <tr>                 <td valign="top" class="main" style="border-bottom: 1px solid; border-color: #cccccc;"><?php echo $this->_tpl_vars['products_history']['BUY_NOW_BUTTON']; ?>
</td>              </tr>              <?php endforeach; endif; unset($_from); ?> 		</table></td>  </tr></table><?php else: ?><span class="smallHeading"><?php echo $this->_config[0]['vars']['title_welcome']; ?>
</span>      <table width="100%" border="0" cellspacing="0" cellpadding="0">        <tr>           <td valign="middle" class="main" style="border-top: 1px solid; border-color: #cccccc;">             <table width="100%" border="0" cellspacing="0" cellpadding="3">              <tr>                 <td valign="top" class="main"><p><?php echo $this->_config[0]['vars']['text_welcome']; ?>
</p></td>              </tr>		    </table></td>        </tr>      </table>      <?php endif; ?><?php if ($this->_tpl_vars['LINK_LOGIN']): ?>      <table width="100%" border="0" cellspacing="0" cellpadding="3">        <tr>          <td valign="top" class="main"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/arrow_green.gif" alt="" /><a href="<?php echo $this->_tpl_vars['LINK_LOGIN']; ?>
"><?php echo $this->_config[0]['vars']['text_login']; ?>
</a></td>        </tr>      </table>       <?php endif; ?></td>    <td valign="top"><span class="smallHeading"><?php echo $this->_config[0]['vars']['title_account']; ?>
</span>       <table width="100%" border="0" cellspacing="0" cellpadding="4">        <tr>           <td valign="middle" class="main" style="border-top: 1px solid; border-color: #cccccc;">             <table width="100%" border="0" cellspacing="0" cellpadding="3">              <tr>                 <td class="main"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/arrow_green.gif" alt="" /><a href="<?php echo $this->_tpl_vars['LINK_EDIT']; ?>
"><?php echo $this->_config[0]['vars']['text_edit']; ?>
</a></td>              </tr>              <tr>                 <td class="main"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/arrow_green.gif" alt="" /><a href="<?php echo $this->_tpl_vars['LINK_ADDRESS']; ?>
"><?php echo $this->_config[0]['vars']['text_address']; ?>
</a></td>              </tr>              <tr>                 <td class="main"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/arrow_green.gif" alt="" /><a href="<?php echo $this->_tpl_vars['LINK_PASSWORD']; ?>
"><?php echo $this->_config[0]['vars']['text_password']; ?>
</a></td>              </tr>            </table></td>        </tr>      </table>      <?php if ($this->_tpl_vars['order_content']): ?><span class="smallHeading"><?php echo $this->_config[0]['vars']['title_orders']; ?>
&nbsp;</span><a href="<?php echo $this->_tpl_vars['LINK_ALL']; ?>
"><span class="smallHeading"><?php echo $this->_config[0]['vars']['text_all']; ?>
</span></a>       <table width="100%" border="0" cellspacing="0" cellpadding="4">        <tr>           <td valign="middle" class="main" style="border-top: 1px solid; border-color: #cccccc;">             <table width="100%" border="0" cellspacing="0" cellpadding="3">              <?php $_from = $this->_tpl_vars['order_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order_data']):
        $this->_foreach['aussen']['iteration']++;
?>               <tr>                 <td rowspan="2" valign="top" class="main"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/arrow_green.gif" alt="" /></td>                <td class="main"><a href="<?php echo $this->_tpl_vars['order_data']['ORDER_LINK']; ?>
"><?php echo $this->_tpl_vars['order_data']['ORDER_DATE']; ?>
</a>&nbsp;&nbsp;<?php echo $this->_config[0]['vars']['order_nr']; ?>
<?php echo $this->_tpl_vars['order_data']['ORDER_ID']; ?>
</td>                <td class="main"><?php echo $this->_config[0]['vars']['order_total']; ?>
<?php echo $this->_tpl_vars['order_data']['ORDER_TOTAL']; ?>
</td>              </tr>              <tr>                 <td class="main">&nbsp;&nbsp;<?php echo $this->_config[0]['vars']['order_status']; ?>
<?php echo $this->_tpl_vars['order_data']['ORDER_STATUS']; ?>
                 </td>                <td class="main"><?php echo $this->_tpl_vars['order_data']['ORDER_BUTTON']; ?>
</td>              </tr>              <?php endforeach; endif; unset($_from); ?> </table></td>        </tr>      </table>      <?php endif; ?>	  <span class="smallHeading"><?php echo $this->_config[0]['vars']['title_notification']; ?>
</span>       <table width="100%" border="0" cellspacing="0" cellpadding="4">        <tr>           <td valign="middle" class="main" style="border-top: 1px solid; border-color: #cccccc;">             <table width="100%" border="0" cellspacing="0" cellpadding="3">              <tr>                 <td class="main"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/arrow_green.gif" alt="" /><a href="<?php echo $this->_tpl_vars['LINK_NEWSLETTER']; ?>
"><?php echo $this->_config[0]['vars']['text_newsletter']; ?>
</a></td>              </tr>            </table></td>        </tr>      </table></td>  </tr></table>