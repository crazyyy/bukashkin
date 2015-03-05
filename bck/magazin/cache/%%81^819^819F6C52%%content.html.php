<?php /* Smarty version 2.6.24, created on 2011-05-06 07:29:45
         compiled from shopos-light/module/content.html */ ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="contentsTopics"><?php echo $this->_tpl_vars['CONTENT_HEADING']; ?>
</td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="main">
	<?php if ($this->_tpl_vars['file']): ?>
	 <?php echo $this->_tpl_vars['file']; ?>

	<?php else: ?>
	<?php echo $this->_tpl_vars['CONTENT_BODY']; ?>

	<?php endif; ?>
	</td>
  </tr>
  <tr>
    <td align="right"><br />
        <?php echo $this->_tpl_vars['BUTTON_CONTINUE']; ?>
</td>
  </tr>
</table>
