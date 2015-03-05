<?php
/*
#####################################
# ShopOS: Скрипты интернет-магазина
#  Copyright (c) 2008-2009
# http://shopos.ru
# Ver. 1.0.1
#####################################
*/

$box_smarty = new osTemplate;
$box_smarty->assign('tpl_path', _HTTP_THEMES_C);
$box_content = '';


if (!os_session_is_registered('customer_id')) {

	$box_smarty->assign('FORM_ACTION', '<form id="loginbox" method="post" action="'.os_href_link(FILENAME_LOGIN, 'action=process', 'SSL').'">');
	$box_smarty->assign('FIELD_EMAIL', os_draw_input_field('email_address', '', 'size="22" maxlength="50"'));
	$box_smarty->assign('FIELD_PWD', os_draw_password_field('password', '', 'size="9" maxlength="30"'));
	$box_smarty->assign('BUTTON', os_image_submit('button_login_small.gif', IMAGE_BUTTON_LOGIN));
	$box_smarty->assign('LINK_LOST_PASSWORD', os_href_link(FILENAME_PASSWORD_DOUBLE_OPT, '', 'SSL'));
	$box_smarty->assign('FORM_END', '</form>');

	$box_smarty->assign('BOX_CONTENT', $loginboxcontent);

	$box_smarty->caching = 0;
	$box_smarty->assign('language', $_SESSION['language']);
	$box_loginbox = $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_login.html');
	$osTemplate->assign('box_LOGIN', $box_loginbox);
}
?>