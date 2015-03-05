<?php /* Smarty version 2.6.24, created on 2011-11-08 21:13:42
         compiled from shopos-light/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'shopos-light/index.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang.conf",'section' => 'index'), $this);?>

<script type="text/javascript" language="JavaScript" src="tab6.js"></script>
    <div class="furjbqy"><table height="100%"><tbody><tr><td valign="middle"><a href="http://bukashkin.ru/reviews.php" class="activated"><img src="http://bukashkin.ru/img/1.png" alt="" style="border: 0;" class="tdsfh"></a></td></tr></tbody></table></div>
<table width="100%"  border="0" cellspacing="0" cellpadding="0" style="border-bottom:1px dashed #000;">
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0" style="margin:10px">
      <tr>
        <td align="left"><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/top_logo.jpg" alt="<?php echo $this->_tpl_vars['store_name']; ?>
" /></td>
      </tr>
      <tr>
        <td style="border-top: 1px solid; border-bottom: 1px solid; border-color: #C5C5C5;"><table width="100%"  border="0" cellpadding="2" cellspacing="0">
          <tr>
            <td class="main"><?php echo $this->_tpl_vars['box_LANGUAGES']; ?>
 <?php echo $this->_tpl_vars['navtrail']; ?>
</td>
            <td align="right" class="main"><?php if ($this->_tpl_vars['account']): ?><?php  if (isset($_SESSION['customer_id'])) {  ?><a href="<?php echo $this->_tpl_vars['logoff']; ?>
"><?php echo $this->_config[0]['vars']['link_logoff']; ?>
</a> | <?php  }  ?><?php endif; ?><?php if ($this->_tpl_vars['account']): ?><a href="<?php echo $this->_tpl_vars['account']; ?>
"><?php echo $this->_config[0]['vars']['link_account']; ?>
</a> | <?php endif; ?><a href="<?php echo $this->_tpl_vars['cart']; ?>
"><?php echo $this->_config[0]['vars']['link_cart']; ?>
</a> | <a href="<?php echo $this->_tpl_vars['checkout']; ?>
"><?php echo $this->_config[0]['vars']['link_checkout']; ?>
</a></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td class="navLeft" valign="top"><table width="184"  border="0" cellpadding="0" cellspacing="0" class="tabnav">
              <tr>
                <td><?php echo $this->_tpl_vars['box_CATEGORIES']; ?>
<?php echo $this->_tpl_vars['box_CONTENT']; ?>
<?php echo $this->_tpl_vars['box_INFORMATION']; ?>
<?php echo $this->_tpl_vars['box_LAST_VIEWED']; ?>
<?php echo $this->_tpl_vars['box_REVIEWS']; ?>
<?php echo $this->_tpl_vars['box_SEARCH']; ?>
<?php echo $this->_tpl_vars['box_SPECIALS']; ?>
<?php echo $this->_tpl_vars['box_WHATSNEW']; ?>
</td>
              </tr>
            </table>&nbsp;</td>
            <td valign="top"><table width="100%"  border="0" cellspacing="4" cellpadding="0">
              <tr>
                <td><table width="98%" border="0" cellpadding="0" cellspacing="0" style="padding:2px">
                  <tr>
                    <td class="main"><?php echo $this->_tpl_vars['main_content']; ?>
</td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
            <td valign="top" class="navRight"><table width="184"  border="0" cellspacing="0" cellpadding="0" class="tabnav">
              <tr>
                      <td><?php echo $this->_tpl_vars['box_CART']; ?>
<?php echo $this->_tpl_vars['box_LOGIN']; ?>
<?php echo $this->_tpl_vars['box_ADMIN']; ?>
<?php echo $this->_tpl_vars['box_NEWSLETTER']; ?>
<?php echo $this->_tpl_vars['box_BESTSELLERS']; ?>
<?php echo $this->_tpl_vars['box_INFOBOX']; ?>
 <?php echo $this->_tpl_vars['box_CURRENCIES']; ?>
 <?php echo $this->_tpl_vars['box_MANUFACTURERS_INFO']; ?>
<?php echo $this->_tpl_vars['box_MANUFACTURERS']; ?>

                      <?php echo $this->_tpl_vars['box_ADD_QUICKIE']; ?>
 </td>
              </tr>
            </table>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" valign="top"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
      </tr>
    </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php if ($this->_tpl_vars['BANNER']): ?>
<table width="100%"  border="0" cellspacing="4" cellpadding="0">
  <tr>
    <td align="center"><?php echo $this->_tpl_vars['BANNER']; ?>
</td>
  </tr>
</table>
<?php endif; ?>
<div align="center">Copyright &copy; 2011 <a   href="http://www.webog.org.ua">Web Design Studio "WeBog"</a></div>