<?php
/*
#####################################
#  ShopOS: Shopping Cart Software.
#  Copyright (c) 2008-2010
#  http://www.shopos.ru
#  http://www.shoposs.com
#  Ver. 1.0.0
#####################################
*/

defined( '_VALID_OS' ) or die( 'Прямой доступ  не допускается.' );

$admin_access_query = os_db_query("select * from " . TABLE_ADMIN_ACCESS . " where customers_id = '" . $_SESSION['customer_id'] . "'");
$admin_access = os_db_fetch_array($admin_access_query); 



$top_menu = array();
$menu_value = array();

$top_menu['HEADING_CATALOG'] = array('url' => 'FILENAME_CATEGORIES');
$top_menu['HEADING_CUSTOMERS'] = array('url' => 'FILENAME_ORDERS');
$top_menu['HEADING_ADDONS'] = array('url' => 'FILENAME_MODULES');
$top_menu['HEADING_CONFIGURATION'] = array('url' => 'FILENAME_CONFIGURATION');
$top_menu['HEADING_OTHER'] = array('url' => 'FILENAME_BACKUP');
$top_menu['IMPORT2'] = array('url' => 'import.php');

//1 каталог
$top_menu['MANUFACTURERS'] = array('url' => FILENAME_MANUFACTURERS);
$top_menu['CATEGORIES'] = array('url' => FILENAME_CATEGORIES);
$top_menu['ATTRIBUTES'] = array('url' => FILENAME_PRODUCTS_OPTIONS);
$top_menu['REVIEWS'] = array('url' => FILENAME_REVIEWS);
$top_menu['SPECIALS'] = array('url' => FILENAME_SPECIALS);
$top_menu['FEATURED'] = array('url' => FILENAME_FEATURED);
$top_menu['PRODUCTS_EXPECTED'] = array('url' => FILENAME_PRODUCTS_EXPECTED);
$top_menu['PRODUCTS_OPTIONS'] = array('url' => FILENAME_PRODUCTS_OPTIONS);
$top_menu['PRODUCTS_ATTRIBUTES'] = array('url' => FILENAME_PRODUCTS_ATTRIBUTES);
$top_menu['ATTRIBUTES_MANAGER'] = array('url' => FILENAME_NEW_ATTRIBUTES);
 
//2 покупатели
$top_menu['CUSTOMERS'] = array('url' => FILENAME_CUSTOMERS);
$top_menu['CUSTOMERS_STATUS'] = array('url' => FILENAME_CUSTOMERS_STATUS);
$top_menu['ORDERS'] = array('url' => FILENAME_ORDERS);

 //3 модули
$top_menu['PAYMENT'] = array('url' => FILENAME_MODULES.'?set=payment');
$top_menu['SHIPPING'] = array('url' => FILENAME_MODULES.'?set=shipping');
$top_menu['ORDER_TOTAL'] = array('url' => FILENAME_MODULES.'?set=ordertotal');
$top_menu['MODULES_SHIP2PAY'] = array('url' => FILENAME_SHIP2PAY);
//4 настройки
$top_menu['HEADING_CONFIGURATION_MAIN'] = array('url' => FILENAME_CONFIGURATION.'?gID=1');

$top_menu['CONFIGURATION_1'] = array('url' => FILENAME_CONFIGURATION.'?gID=1');
$top_menu['CONFIGURATION_2'] = array('url' => FILENAME_CONFIGURATION.'?gID=2');
$top_menu['CONFIGURATION_3'] = array('url' => FILENAME_CONFIGURATION.'?gID=3');
$top_menu['CONFIGURATION_4'] = array('url' => FILENAME_CONFIGURATION.'?gID=4');
$top_menu['CONFIGURATION_5'] = array('url' => FILENAME_CONFIGURATION.'?gID=5');
$top_menu['CONFIGURATION_7'] = array('url' => FILENAME_CONFIGURATION.'?gID=7');
$top_menu['CONFIGURATION_8'] = array('url' => FILENAME_CONFIGURATION.'?gID=8');
$top_menu['CONFIGURATION_9'] = array('url' => FILENAME_CONFIGURATION.'?gID=9');
$top_menu['CONFIGURATION_10'] = array('url' => FILENAME_CONFIGURATION.'?gID=10');
$top_menu['CONFIGURATION_11'] = array('url' => FILENAME_CONFIGURATION.'?gID=11');
$top_menu['CACHE_FILES'] = array('url' => FILENAME_CACHE, 'access' => 'cache');
$top_menu['CONFIGURATION_12'] = array('url' => FILENAME_CONFIGURATION.'?gID=12');
$top_menu['CONFIGURATION_13'] = array('url' => FILENAME_CONFIGURATION.'?gID=13');
$top_menu['CONFIGURATION_14'] = array('url' => FILENAME_CONFIGURATION.'?gID=14');
$top_menu['CONFIGURATION_15'] = array('url' => FILENAME_CONFIGURATION.'?gID=15');
$top_menu['CONFIGURATION_22'] = array('url' => FILENAME_CONFIGURATION.'?gID=22');
$top_menu['CONFIGURATION_24'] = array('url' => FILENAME_CONFIGURATION.'?gID=24');
//шаблоны
$top_menu['THEMES'] = array('url' => FILENAME_THEMES);
$top_menu['THEMES_MENU'] = array('url' => FILENAME_THEMES);
$top_menu['CONFIGURATION_30'] = array('url' => FILENAME_CONFIGURATION.'?gID=30');
$top_menu['TOOLS_EMAIL_MANAGER'] = array('url' => FILENAME_EMAIL_MANAGER);
$top_menu['TEXT_THEMES_EDIT'] = array('url' => FILENAME_THEMES_EDIT);
$top_menu['CONFIGURATION_31'] = array('url' => FILENAME_CONFIGURATION.'?gID=31');
$top_menu['ORDERS_STATUS'] = array('url' => FILENAME_ORDERS_STATUS);
$top_menu['SHIPPING_STATUS'] = array('url' => FILENAME_SHIPPING_STATUS);
$top_menu['PRODUCTS_VPE'] = array('url' => FILENAME_PRODUCTS_VPE);
$top_menu['CAMPAIGNS'] = array('url' => FILENAME_CAMPAIGNS);
$top_menu['ORDERS_XSELL_GROUP'] = array('url' => FILENAME_XSELL_GROUPS);
$top_menu['CONFIGURATION_19'] = array('url' => FILENAME_CONFIGURATION.'?gID=19');
$top_menu['CONFIGURATION_23'] = array('url' => FILENAME_CONFIGURATION.'?gID=23');
$top_menu['CONFIGURATION_27'] = array('url' => FILENAME_CONFIGURATION.'?gID=27');
$top_menu['CONFIGURATION_17'] = array('url' => FILENAME_CONFIGURATION.'?gID=17');
//5 разное
$top_menu['HEADING_TOOLS'] = array('url' => FILENAME_BACKUP);
$top_menu['BACKUP'] = array('url' => FILENAME_BACKUP);
$top_menu['PRODUCT_EXTRA_FIELDS'] = array('url' => FILENAME_PRODUCTS_EXTRA_FIELDS);
$top_menu['HEADING_CUSTOMER_EXTRA_FIELDS'] = array('url' => FILENAME_EXTRA_FIELDS);
$top_menu['HEADING_TOOLS'] = array('url' => FILENAME_EXTRA_FIELDS);
$top_menu['CONTENT'] = array('url' => FILENAME_CONTENT_MANAGER);
$top_menu['TOOLS_BLACKLIST'] = array('url' => FILENAME_BLACKLIST);
$top_menu['MODULE_NEWSLETTER'] = array('url' => FILENAME_MODULE_NEWSLETTER);
$top_menu['BANNER_MANAGER'] = array('url' => FILENAME_BANNER_MANAGER);

$top_menu['SERVER_INFO'] = array('url' => FILENAME_SERVER_INFO);
$top_menu['CATALOG_LATEST_NEWS'] = array('url' => FILENAME_LATEST_NEWS);
$top_menu['CATALOG_FAQ'] = array('url' => FILENAME_FAQ);
$top_menu['WHOS_ONLINE'] = array('url' => FILENAME_WHOS_ONLINE);
$top_menu['EASY_POPULATE'] = array('url' => FILENAME_EASYPOPULATE);
$top_menu['IMPORT'] = array('url' => FILENAME_CSV_BACKEND);
$top_menu['CATALOG_QUICK_UPDATES'] = array('url' => FILENAME_QUICK_UPDATES);
$top_menu['TOOLS_RECOVER_CART'] = array('url' => FILENAME_RECOVER_CART_SALES);

$top_menu['HEADING_LOCATION_AND_TAXES'] = array('url' => FILENAME_COUNTRIES);
$top_menu['COUNTRIES'] = array('url' => FILENAME_COUNTRIES);
$top_menu['ZONES'] = array('url' => FILENAME_ZONES);
$top_menu['GEO_ZONES'] = array('url' => FILENAME_GEO_ZONES);
$top_menu['TAX_CLASSES'] = array('url' => FILENAME_TAX_CLASSES);
$top_menu['TAX_RATES'] = array('url' => FILENAME_TAX_RATES);

$top_menu['HEADING_LOCALIZATION'] = array('url' => FILENAME_CURRENCIES);
$top_menu['CURRENCIES'] = array('url' => FILENAME_CURRENCIES);
$top_menu['LANGUAGES'] = array('url' => FILENAME_LANGUAGES);

$top_menu['HEADING_GV_ADMIN'] = array('url' => FILENAME_COUPON_ADMIN);
$top_menu['COUPON_ADMIN'] = array('url' => FILENAME_COUPON_ADMIN);
$top_menu['GV_ADMIN_QUEUE'] = array('url' => FILENAME_GV_QUEUE);
$top_menu['GV_ADMIN_MAIL'] = array('url' => FILENAME_GV_MAIL);
$top_menu['GV_ADMIN_SENT'] = array('url' => FILENAME_GV_SENT);

$top_menu['HEADING_STATISTICS'] = array('url' => FILENAME_STATS_SALES_REPORT2);
$top_menu['PRODUCTS_VIEWED'] = array('url' => FILENAME_STATS_PRODUCTS_VIEWED);
$top_menu['PRODUCTS_PURCHASED'] = array('url' => FILENAME_STATS_PRODUCTS_PURCHASED);
$top_menu['STATS_CUSTOMERS'] = array('url' => FILENAME_STATS_CUSTOMERS);
$top_menu['SALES_REPORT'] = array('url' => FILENAME_SALES_REPORT);
$top_menu['CAMPAIGNS_REPORT2'] = array('url' => FILENAME_STATS_SALES_REPORT2);
$top_menu['CAMPAIGNS_REPORT'] = array('url' => FILENAME_CAMPAIGNS_REPORT);
$top_menu['STATS_STOCK_WARNING'] = array('url' => FILENAME_STATS_STOCK_WARNING);


$top_menu['HEADING_ARTICLES'] = array('url' => FILENAME_ARTICLES);
$top_menu['TOPICS_ARTICLES'] = array('url' => FILENAME_ARTICLES);
$top_menu['ARTICLES_CONFIG'] = array('url' => FILENAME_ARTICLES_CONFIG);
$top_menu['ARTICLES_AUTHORS'] = array('url' => FILENAME_AUTHORS);
$top_menu['ARTICLES_XSELL'] = array('url' => FILENAME_ARTICLES_XSELL);

$top_menu['HEADING_AFFILIATE'] = array('url' => FILENAME_AFFILIATE);
$top_menu['AFFILIATE_CONFIGURATION'] = array('url' => FILENAME_CONFIGURATION.'?gID=28');
$top_menu['AFFILIATE'] = array('url' => FILENAME_AFFILIATE);
$top_menu['AFFILIATE_BANNERS'] = array('url' => FILENAME_AFFILIATE_BANNERS);
$top_menu['AFFILIATE_CLICKS'] = array('url' => FILENAME_AFFILIATE_CLICKS);
$top_menu['AFFILIATE_CONTACT'] = array('url' => FILENAME_AFFILIATE_CONTACT);
$top_menu['AFFILIATE_PAYMENT'] = array('url' => FILENAME_AFFILIATE_PAYMENT);
$top_menu['AFFILIATE_SALES'] = array('url' => FILENAME_AFFILIATE_SALES);
$top_menu['AFFILIATE_SUMMARY'] = array('url' => FILENAME_AFFILIATE_SUMMARY);
$top_menu['ERROR_LOG'] = array('url' => FILENAME_ERROR_LOG);

$top_menu['PLUGINS'] = array('url' => FILENAME_PLUGINS);


//6 справка
$top_menu['HELP'] = array('url' => 'http://docs.shopos.ru/');
$top_menu['SUPPORT_SITE'] = array('url' => 'http://www.shopos.ru/');
$top_menu['SUPPORT_FORUM'] = array('url' => 'http://www.shopos.ru/forum/');
$top_menu['THEMES_URL'] = array('url' => 'http://www.shopos.ru/themes/');

$menu_value[1]['value'] = 'HEADING_CATALOG';	
$menu_value[2]['value'] = 'HEADING_CUSTOMERS';	
$menu_value[2]['child'] = array (
	      array('value'=> 'ORDERS'),
          array('value'=> 'CUSTOMERS'),
	      array('value'=> 'CUSTOMERS_STATUS')
);

//4 Настройки
$menu_value[3]['value'] = 'HEADING_CONFIGURATION';	
$menu_value[3]['child'] = array (
          array('value'=> 'HEADING_CONFIGURATION_MAIN',
		       'child' => array( //настройки -> основные
	      array('value'=> 'CONFIGURATION_1'),
	      array('value'=> 'CONFIGURATION_2'),
	      array('value'=> 'CONFIGURATION_3'),
	      array('value'=> 'CONFIGURATION_4'),
	      array('value'=> 'CONFIGURATION_5'),
	      array('value'=> 'CONFIGURATION_7'),
	      array('value'=> 'CONFIGURATION_8'),
	      array('value'=> 'CONFIGURATION_9'),
	      array('value'=> 'CONFIGURATION_10'),
		  array('value'=> 'CONFIGURATION_11'),
	      array('value'=> 'ERROR_LOG'),
	      array('value'=> 'CACHE_FILES'),
	      array('value'=> 'CONFIGURATION_12'),
	      array('value'=> 'CONFIGURATION_13'),
	      array('value'=> 'CONFIGURATION_14'),
	      array('value'=> 'CONFIGURATION_15'),
	      array('value'=> 'CONFIGURATION_22'),
	      array('value'=> 'CONFIGURATION_24')
	  )
		  
		  ),
	      array('value'=> 'THEMES', 'child' =>
		     array 
		     (
                array('value'=> 'THEMES_MENU'),
		        array('value'=> 'CONFIGURATION_30'),
	            array('value'=> 'TOOLS_EMAIL_MANAGER'),
	            array('value'=> 'TTEXT_THEMES_EDIT')
             )
		  ),
		  array('value'=> 'CONFIGURATION_31'),
		  array('value'=> 'ORDERS_STATUS'),
		  array('value'=> 'SHIPPING_STATUS'),
		  array('value'=> 'PRODUCTS_VPE'),
		  array('value'=> 'CAMPAIGNS'),
		  array('value'=> 'ORDERS_XSELL_GROUP'),
		  array('value'=> 'CONFIGURATION_19'),
		  array('value'=> 'CONFIGURATION_23'),
		  array('value'=> 'CONFIGURATION_27'),
		  array('value'=> 'CONFIGURATION_17')
		  
);

$menu_value[4]['value'] = 'HEADING_ADDONS';	
$menu_value[4]['child'] = array (
          array('value'=> 'PAYMENT'),
	      array('value'=> 'SHIPPING'),
	      array('value'=> 'ORDER_TOTAL'),
	      array('value'=> 'MODULES_SHIP2PAY'),
	      array('value'=> 'PLUGINS')
);

$menu_value[5]['value'] = 'HEADING_OTHER';	
$menu_value[5]['child'] = array (
          array('value' => 'HEADING_TOOLS', 'child' =>
		    array (
			   array('value' =>'BACKUP'),
			   array('value' =>'PRODUCT_EXTRA_FIELDS'),
			   array('value' =>'HEADING_CUSTOMER_EXTRA_FIELDS'),
			   array('value' =>'CONTENT'),
			   array('value' =>'TOOLS_BLACKLIST'),
			   array('value' =>'MODULE_NEWSLETTER'),
			   array('value' =>'BANNER_MANAGER'),
			   array('value' =>'SERVER_INFO'),
			   array('value' =>'CATALOG_LATEST_NEWS'),
			   array('value' =>'CATALOG_FAQ'),
			   array('value' =>'WHOS_ONLINE'),
			   array('value' =>'EASY_POPULATE'),
			   array('value' =>'IMPORT2'),
			   array('value' =>'HEADING_IMPORT'),
			   array('value' =>'CATALOG_QUICK_UPDATES'),
			   array('value' =>'TOOLS_RECOVER_CART')	
			)
		  
		  ),
		  array('value' => 'HEADING_LOCALIZATION', 'child' =>
		    array (
			 array ('value' => 'LANGUAGES'),
		     array ('value' => 'CURRENCIES'),
			 array ('value' => 'COUNTRIES'),
		     array ('value' => 'ZONES'),
		     array ('value' => 'GEO_ZONES'),
		     array ('value' => 'TAX_CLASSES'),
		     array ('value' => 'TAX_RATES')
			 )
		  ),		  
		  
		  array('value' => 'HEADING_GV_ADMIN', 'child' =>
		    array (
		     array ('value' => 'COUPON_ADMIN'),
		     array ('value' => 'GV_ADMIN_QUEUE'),
		     array ('value' => 'GV_ADMIN_MAIL'),
		     array ('value' => 'GV_ADMIN_SENT'),
			 )
		  ),	  

		  array('value' => 'HEADING_STATISTICS', 'child' =>
		    array (
		     array ('value' => 'PRODUCTS_VIEWED'),
		     array ('value' => 'PRODUCTS_PURCHASED'),
		     array ('value' => 'STATS_CUSTOMERS'),
		     array ('value' => 'SALES_REPORT'),
		     array ('value' => 'CAMPAIGNS_REPORT2'),
		     array ('value' => 'CAMPAIGNS_REPORT'),
		     array ('value' => 'STATS_STOCK_WARNING')
			 )
		  ),	  

		  array('value' => 'HEADING_AFFILIATE', 'child' =>
		    array (
		     array ('value' => 'AFFILIATE_CONFIGURATION'),
		     array ('value' => 'AFFILIATE'),
		     array ('value' => 'AFFILIATE_BANNERS'),
		     array ('value' => 'AFFILIATE_CLICKS'),
		     array ('value' => 'AFFILIATE_CONTACT'),
		     array ('value' => 'AFFILIATE_PAYMENT'),
		     array ('value' => 'AFFILIATE_SALES'),
		     array ('value' => 'AFFILIATE_SUMMARY')
			 )
		  )
);

$menu_value[6]['value'] = 'HEADING_HELP';	
//справка
$menu_value[6]['child'] =  array(
      array('value' => 'HELP'),
      array('value' => 'SUPPORT_SITE'),
      array('value' => 'THEMES_URL'),
      array('value' => 'SUPPORT_FORUM')
);	

	 	
$menu_value[1]['child'] = 
array(
   array('value'=> 'CATEGORIES'),
   array('value'=> 'ATTRIBUTES',
      'child' => array(
	      array('value'=> 'PRODUCTS_OPTIONS'),
	      array('value'=> 'PRODUCTS_ATTRIBUTES'),
	      array('value'=> 'ATTRIBUTES_MANAGER')
	  )
   ),
   array('value'=> 'MANUFACTURERS'),
   array('value'=> 'REVIEWS'),
   array('value'=> 'SPECIALS'),
   array('value'=> 'FEATURED'),
   array('value'=> 'PRODUCTS_EXPECTED'),
     array('value' => 'HEADING_ARTICLES', 'child' =>
		    array (
		     array ('value' => 'TOPICS_ARTICLES'),
		     array ('value' => 'ARTICLES_CONFIG'),
		     array ('value' => 'ARTICLES_AUTHORS'),
		     array ('value' => 'ARTICLES_XSELL')
			 )
		  ),
);


$menu_value = apply_filter('admin_menu', $menu_value);

if (SET_WHOS_ONLINE == "false")
{
    remove_action('admin_menu', 'WHOS_ONLINE');
}

global $os_remove_action;

if ($messageStack->size > 0) 
{
    echo $messageStack->output();
}
   $this->crutch();

?>	
<!-- top_menu -->	  
<div id="head"></div>
<div id="user_info_left"><div class="png"><img src="images/favicon.png" width="16px" height="16px" border="0" /></div><a href="index2.php" style="padding-left:10px;color: #c3def1;text-decoration: none; font-weight: bold;" target="_blank"><?php echo PROJECT_VERSION.' : '.TEXT_ADMIN_PANEL; ?></a>
</div> 
<div id="lang_top_center">
<?php $this->lang_menu();?>
</div>
<div id="user_info" style="color:#c3def1"> 
<a href="<?php echo os_href_link(FILENAME_DEFAULT, '', 'NONSSL'); ?>"><?php echo TEXT_HEADER_DEFAULT; ?></a>&nbsp;&nbsp;<a href="../index.php" target="_blank"><?php echo TEXT_HEADER_SHOP; ?></a>&nbsp;&nbsp;<a href="../logoff.php"><?php echo BOX_HEADING_LOGOFF; ?></a>
</div> 
<div id="topline"></div>
<?php
	 	
_e('<div id="menu">');
_e('<ul class="nav" id="nav">');
foreach ($menu_value as $val => $mass)
{
    //ссылка по умолчанию для пункта меню
   $url = 'index2.php';
   
   //проверка существования константы с filname
   if (@defined($top_menu[$mass['value']]['url']))
   {
      $url =  constant($top_menu[$mass['value']]['url']);
   }
   
   if (!isset($os_remove_action['admin_menu'][$mass['value']]))
   {
      //создаем первый уровень меню
       _e(' <li><a href="'.os_href_link($url, '', 'NONSSL').'"><span>'.constant('BOX_'.$mass['value']).'</span><!--[if gte IE 7]><!--></a><!--<![endif]-->');
   }
   
   //проверка. есть ли 2ой уровень у пункта меню. 
   //проверка пустой ли массиив с элементами 2ого уровня
   if (isset($mass['child']) && !empty($mass['child']))
   {
      _e(' <!--[if	lte	IE 6]><table><tr><td><![endif]-->');
      _e(' <ul><li class="pad1"><b class="p7"></b><b class="p3"></b></li>');
      //выборка элементов 2ого уровня.
      foreach ($mass['child'] as $val1 => $mass1)
	  {
	     if (isset($mass1['child']) && !empty($mass1['child']))
		 { 
		      //если есть 3ий уровень
			  
		      $value = @constant('BOX_'.$mass1['value']);
			  $url = $top_menu[$mass1['value']]['url'];
			 
			  if (empty($value)) $value = 'empty';
			  if (empty($url)) $url = 'index2.php';
			  if (!isset($os_remove_action['admin_menu'][$mass1['value']])){
		     _e('<li><a class="fly" href="'.$url.'">'.$value.'<!--[if gte IE 7]><!--></a><b class="p4"></b><!--<![endif]-->');
	         _e('<!--[if	lte	IE 6]><table><tr><td><![endif]-->');
		     _e('<ul><li class="pad1"><b class="p7"></b><b class="p3"></b></li>');
			 }
			 
			 foreach ($mass1['child'] as $val2 => $mass2)
			 {
			      if (defined('BOX_'.$mass2['value']))
		          {
		              $value = @constant('BOX_'.$mass2['value']);
			          $url = $top_menu[$mass2['value']]['url'];
			 
			          if (empty($value)) $value = 'empty';
			          if (empty($url)) $url= 'index2.php';
					  
					  $_access = explode ('.php', $url);
					  
					  if (!isset($os_remove_action['admin_menu'][$mass2['value']])){
					  if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access[$_access[0]] == '1'))
					  {
					      _e('   <li><a href="'.$url.'">'.$value.'</a><b class="p4"></b></li>');
					  }
					  }
	              }
			    
			 }
  
  		     _e('<li class="pad2"><b class="p5"></b><b class="p6"></b></li></ul><!--[if	lte	IE 6]></td></tr></table></a><b class="p4"></b><![endif]--></li>');
		 }
		 else
		 {
		     //если только 2ой уровень
			 
			  
	          if (defined('BOX_'.$mass1['value']))
		      {
		            $value = @constant('BOX_'.$mass1['value']);
			        $url = $top_menu[$mass1['value']]['url'];
			 
			        if (empty($value)) $value = 'empty';
			        if (empty($url)) $url = 'index2.php';
		             $_access = explode ('.php', $url);
                    $_url = false;
					
					if (substr_count($url, "http:")>=1)
					{ 
					    $_url = true;
					}
					  
					if (!isset($os_remove_action['admin_menu'][$mass1['value']]))
                    {
					if (($_SESSION['customers_status']['customers_status_id'] == '0') && isset($admin_access[$_access[0]]) &&($admin_access[$_access[0]] == '1') or $_url)
					{
			             _e('<li><a href="'.$url.'">'.$value.'</a><b class="p4"></b></li>');
					}
					}
					
	          }
		 }
	  }
	  
	  _e(' <li class="pad2"><b class="p5"></b><b class="p6"></b></li></ul>');
	  _e(' <!--[if	lte	IE 6]></td></tr></table></a><![endif]-->');
   }
   
   
   _e(' </li>');
}
?>
<form action="http://www.shopos.ru/forum/index.php?action=search2" method="post" accept-charset="UTF-8">
<li style="position:absolute;right: 1.5cm;"><input type="text" class="round inbr" name="search" onblur="if (!value) value=defaultValue" onclick="if (value==defaultValue) value=''"  style="width: 4cm;" value="Поиск"></li></form>
<?php
_e('</ul>');
_e('</div>');


?>

<!-- /top_menu -->
<?php
  
?>
<div class="wrap">