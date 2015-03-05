<?php
/*
Plugin Name: top filter
Version: 1.4
Author: Матецкий Евгений
Author URI: http://www.shopos.ru/
*/

  add_filter('main_content', 'main_content_filter');
  
  function main_content_filter($_cont)
  {
   
     ob_start();
        include_once( plugdir(). 'categories.php');
		$_category = ob_get_contents();
     ob_end_clean();

     return $_category.$_cont ;
  }
  
  
  function top_filter_install()
  {
     
	 add_option('top_filter_cat', 'top_filter_cat_true', 'checkbox', "array('top_filter_cat_true', 'top_filter_cat_false')");
	 
	 
	 //стили
	 add_option('top_filter_style', '.rcat_root_category {
    color:#333333;
    font-size:140%;
    font-weight:bold;
    line-height:150%;
    text-decoration:none;
}

.rcat_child_categories
{
    font-family:arial,helvetica,sans-serif;
    font-size:12px;
}
.rcat_table
{
padding:10px;
text-align:center;
}', 'textarea');
	 
//разделитель между блоком категорий и блоком main_content
	  add_option('top_filter_hr_check', 'top_filter_hr_check_true', 'radio', "array('top_filter_hr_check_true', 'top_filter_hr_check_false')");
	 //разделитель между блоком категорий и блоком main_content
	 add_option('top_filter_hr', '<hr style="border-color: #e1e2e5;" />');
	 
  }
?>