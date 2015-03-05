<?php
/*
Plugin Name: XML Sitemap
Plugin URI: http://www.shopos.ru/
Description: XML карта сайта для Google, Yandex. 
Version: 1.0
Author: Матецкий Евгений
Author URI: http://www.shopos.ru/
*/

defined( '_VALID_OS' ) or die( 'Direct Access to this location is not allowed.' );


add_action('page', 'xml_sitemap');


function xml_sitemap ()
{
    include(dirname(__FILE__).'/index.php');
}

function xml_sitemap_url_readonly()
{

  _e('<a href="'.http_path('catalog').'index.php?page=xml_sitemap'.'">Ссылка на карту сайта</a>');
}

function xml_sitemap_install()
{
    add_option('xml_sitemap_url', '', 'readonly');
}

?>