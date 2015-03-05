<?php
/*
Plugin Name: Карусель товаров
Plugin URI: http://www.shopos.ru/
Version: 1.3
*/

define("TABLE_GOODS_CAROUSELLO", DB_PREFIX . "goods_carousello");
define("TABLE_GOODS_CAROUSELLO_SETTINGS", DB_PREFIX . "goods_carousello_settings");
define('BOX_GOODS_CAROUSELLO', 'Карусель товаров'); 	
	
add_action('main_page_admin', 'goods_carousello_page');
add_action('box', 'goods_carousello_box');
add_action('head', 'goods_carousello_head');

define('TABLE_HEADING_PRODUCTS_PLUG', 'Товары');
define('TABLE_HEADING_VISIBILITY_PLUG', 'Видимость');
define('TABLE_HEADING_ACTION_PLUG', 'Действие');

define('TEXT_FEATURED_PRODUCT', 'Товар:');

define('TEXT_DISPLAY_NUMBER_OF_CAROUSELLO','Показано %d - %d (всего %d товаров в карусели) ');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Удалить товар из карусели');
define('TEXT_INFO_DELETE_INTRO', 'Вы действительно хотите удалить данный товар из карусели?');

function goods_carousello_head()
{
   _e('<style>
					.scrollable {
						position:relative;
						overflow:hidden;
						width: 100%;
						height: 200px;
					}
					
					.scrollable .items {
						width:20000em;
						position:absolute;
					}
					
					.items .container  {
						float:left;
					}
					
					.items .item {
						float:left;
					}
					
					.disabled {
						display: none;
					}
				</style>');
	//_e('<script src="'.http_path('catalog').'jscript/jquery/jquery.js"></script>');					
	_e('<script src="http://code.jquery.com/jquery-1.4.2.min.js"></script>');					
	_e('<script src="'.plugurl().'js/jquery.tools.min.js"></script>');	

}	

    if (isset($_GET['main_page']))
	{
	switch (@$_GET['action']) 
	{
		case 'display':
				os_db_query(" replace into
								" . TABLE_GOODS_CAROUSELLO_SETTINGS . " (good_carousello_settings_code, good_carousello_settings_value)
								values ('display', '" . @intval($_POST['display']) . "')");
				os_db_query(" replace into
								" . TABLE_GOODS_CAROUSELLO_SETTINGS . " (good_carousello_settings_code, good_carousello_settings_value)
								values ('display_count', '" . @intval($_POST['display_count']) . "')");
				os_db_query(" replace into
								" . TABLE_GOODS_CAROUSELLO_SETTINGS . " (good_carousello_settings_code, good_carousello_settings_value)
								values ('autoscroll', '" . @intval($_POST['autoscroll']) . "')");
				os_db_query(" replace into
								" . TABLE_GOODS_CAROUSELLO_SETTINGS . " (good_carousello_settings_code, good_carousello_settings_value)
								values ('autoscroll_delay', '" . @intval($_POST['autoscroll_delay']) . "')");
								
			@os_redirect(os_href_link(FILENAME_PLUGINS_PAGE, 'main_page=goods_carousello_page&', 'NONSSL'));
			break;
		case 'edit':
			@os_redirect(os_href_link(FILENAME_PLUGINS_PAGE, 'main_page=goods_carousello_page&', 'NONSSL'));
			break;
		case 'setflag':
			
			$carousello_id = os_db_prepare_input($_GET['id']);
			
			os_db_query("update 
							" . TABLE_GOODS_CAROUSELLO . "
						 set 
							good_carousello_visibility = " . intval($_GET['flag']) . "
						 where 
							good_carousello_id = '" . os_db_input($carousello_id) . "'");
			@os_redirect(os_href_link(FILENAME_PLUGINS_PAGE, 'main_page=goods_carousello_page&', 'NONSSL'));
		break;
		case 'insert':
			os_db_query("	REPLACE into 
								" . TABLE_GOODS_CAROUSELLO . " (good_carousello_id, good_carousello_visibility)
							values
								('" . $_POST['products_id'] . "', '1')");
			os_redirect(os_href_link(FILENAME_PLUGINS_PAGE, 'main_page=goods_carousello_page&page=' . $_GET['page']));
		break;
		case 'deleteconfirm':
			$carousello_id = os_db_prepare_input($_GET['fID']);
			os_db_query("delete from 
							" . TABLE_GOODS_CAROUSELLO . "
						 where 
							good_carousello_id = '" . os_db_input($carousello_id) . "'");
			@os_redirect(os_href_link(FILENAME_PLUGINS_PAGE, 'main_page=goods_carousello_page&page=' . $_GET['page']));
		break;
	}
    }


function goods_carousello_page()
{

	
   include(dirname(__FILE__).'/goods_carousello.php');
}

function scrolling_install()
{
   os_db_query('drop table if exists '.DB_PREFIX.'goods_carousello;');
   
  os_db_query("CREATE TABLE `".DB_PREFIX."goods_carousello` (
	`good_carousello_id` int(11) NOT NULL auto_increment,
	`good_carousello_visibility` int(11) NOT NULL default '1',
	PRIMARY KEY  (`good_carousello_id`)
) ENGINE=MyISAM;");

 os_db_query('drop table if exists '.DB_PREFIX.'goods_carousello_settings;');
   
  os_db_query("CREATE TABLE `".DB_PREFIX."goods_carousello_settings` (
	`good_carousello_settings_code` varchar(255) NOT NULL default '',
	`good_carousello_settings_value` varchar(255) NOT NULL default '',
	PRIMARY KEY  (`good_carousello_settings_code`)
) ENGINE=MyISAM;");

    add_option('scrolling_button', '', 'readonly');
}

function scrolling_button_readonly()
{
	 _e('<center>'.add_button('main_page', 'goods_carousello_page', 'Настройки' ).'</center>');
}

function scrolling_delete()
{
     os_db_query('drop table if exists '.DB_PREFIX.'goods_carousello');
	 os_db_query('drop table if exists '.DB_PREFIX.'goods_carousello_settings'); 
}

function goods_carousello_box()
{
   $_title = '';
   $_content = '';
   
   global $osTemplate;
   
   $osTemplate->assign('tpl_path', _HTTP_THEMES_C);
   $box = new osTemplate;
		 
   include( plugdir().'goods_carousello_box.php' );
   

   

   $box->template_dir = plugdir();
   $_box_value = $box->fetch('box_goods_carousello.html');
   $osTemplate->assign('goods_carousello_box', $_box_value);
  
}
?>