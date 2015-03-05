<?php /* Smarty version 2.6.24, created on 2011-05-05 14:31:28
         compiled from default/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'default/index.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'index'), $this);?>

<!-- Шапка -->
<table class="adn print" width="100%">
<tr>
<td class="headlink vleft bf">
<a href="<?php echo $this->_tpl_vars['mainpage']; ?>
"><?php echo $this->_config[0]['vars']['text_mainpage']; ?>
</a><span class="delm">|</span>
<?php if ($this->_tpl_vars['account']): ?><?php if ($this->_supers['session']['customer_id']): ?>
<a href="<?php echo $this->_tpl_vars['account']; ?>
"><?php echo $this->_config[0]['vars']['link_account']; ?>
</a><span class="delm">|</span>
<?php endif; ?><?php endif; ?>
<a href="<?php echo $this->_tpl_vars['cart']; ?>
"><?php echo $this->_config[0]['vars']['link_cart']; ?>
</a><span class="delm">|</span>
<a href="<?php echo $this->_tpl_vars['price_list']; ?>
"><?php echo $this->_config[0]['vars']['price_list']; ?>
</a><span class="delm">|</span>
<a href="<?php echo $this->_tpl_vars['checkout']; ?>
"><?php echo $this->_config[0]['vars']['link_checkout']; ?>
</a><span class="delm">|</span>
</td>
<td align="right" class="headlink vleft bf" width="70px">
<?php if ($this->_tpl_vars['account']): ?><?php if ($this->_supers['session']['customer_id']): ?>
<span class="delm">|</span><a href="<?php echo $this->_tpl_vars['logoff']; ?>
"><?php echo $this->_config[0]['vars']['link_logoff']; ?>
</a>
<?php else: ?>
<span class="delm">|</span><a href="<?php echo $this->_tpl_vars['login']; ?>
"><?php echo $this->_config[0]['vars']['link_login']; ?>
</a>
<?php endif; ?>
<?php endif; ?>  
</td>
</tr>
</table>
<table cellspacing="0" cellpadding="0" width="100%" class="print">
<tr>
<td class="htba" valign="middle" align="left"><a href="<?php echo $this->_tpl_vars['mainpage']; ?>
"><img id="logo" src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/logo.png" border="0" alt="" /></a></div></td>
<td class="htba" valign="middle" align="left" width="80%"></td>
<td class="htbb" valign="middle" align="right"><font color="white"><?php echo @STORE_TELEPHONE; ?>
<img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/online.gif" alt="" /><?php echo @STORE_ICQ; ?>
</font></td>
<td class="htba" valign="middle" align="left" width="10%"></td>
</tr>
</table>
<!-- /Шапка -->
<table class="adn">
<tr>
<td class="container">
<table class="adn">
<tr>
<td class="left"><div class="fil1 white"></div>
<?php echo $this->_tpl_vars['box_vote']; ?>

<?php echo $this->_tpl_vars['box_products_scroll']; ?>

<?php echo $this->_tpl_vars['box_CATEGORIES']; ?>

<?php echo $this->_tpl_vars['box_CONTENT']; ?>

<?php echo $this->_tpl_vars['box_ADD_QUICKIE']; ?>

<?php echo $this->_tpl_vars['box_INFORMATION']; ?>

<?php echo $this->_tpl_vars['box_LAST_VIEWED']; ?>

<?php echo $this->_tpl_vars['box_REVIEWS']; ?>

<?php echo $this->_tpl_vars['box_SEARCH']; ?>

<?php echo $this->_tpl_vars['box_SPECIALS']; ?>

<?php echo $this->_tpl_vars['box_FEATURED']; ?>

<?php echo $this->_tpl_vars['box_LATESTNEWS']; ?>

<?php echo $this->_tpl_vars['box_ARTICLES']; ?>

<?php echo $this->_tpl_vars['box_ARTICLESNEW']; ?>

<?php echo $this->_tpl_vars['box_AUTHORS']; ?>

</td><td class="center vleft">
<table class="adn blmtop"><tr><td>
<?php echo $this->_tpl_vars['goods_carousello_box']; ?>

<table class="adn"><tr><td class="hd bf">&nbsp;</td></tr></table></td></tr></table>
<table class="adn"><tr><td class="cbt vleft"><span><?php echo $this->_tpl_vars['navtrail']; ?>
</span></td></tr></table>
<table class="adn" width="98%" border="0" cellpadding="0" cellspacing="0">
<tr><td class="main"><?php echo $this->_tpl_vars['text']; ?>
<?php echo $this->_tpl_vars['main_content']; ?>
</td></tr>
</table>
</td>
<td class="right"><div class="fil1 white"></div>
<?php echo $this->_tpl_vars['box_CART']; ?>

<?php echo $this->_tpl_vars['box_LOGIN']; ?>

<?php echo $this->_tpl_vars['box_ADMIN']; ?>

<?php echo $this->_tpl_vars['box_DOWNLOADS']; ?>

<?php echo $this->_tpl_vars['box_AFFILIATE']; ?>

<?php echo $this->_tpl_vars['box_WHATSNEW']; ?>

<?php echo $this->_tpl_vars['box_NEWSLETTER']; ?>

<?php echo $this->_tpl_vars['box_BESTSELLERS']; ?>

<?php echo $this->_tpl_vars['box_INFOBOX']; ?>

<?php echo $this->_tpl_vars['box_CURRENCIES']; ?>

<?php echo $this->_tpl_vars['box_LANGUAGES']; ?>

<?php echo $this->_tpl_vars['box_MANUFACTURERS']; ?>

<?php echo $this->_tpl_vars['box_MANUFACTURERS_INFO']; ?>

<?php echo $this->_tpl_vars['box_FAQ']; ?>

</td>
</tr>
</table>

<table class="adn print">
 <tr>
  <td>
    <div class="fix" style="border-bottom: 1px solid #ffffff;"></div>
     <table class="adn"><tr><td class="btbl mid bf footer">© <?php  echo date('Y'); ?> <a href="#">Company</a></td></tr></table>
  </td>
 </tr>
</table>

</td></tr></table>
<center><?php echo $this->_tpl_vars['BANNER']; ?>
</center>