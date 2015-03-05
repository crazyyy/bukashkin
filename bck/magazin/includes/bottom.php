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

if (STORE_PAGE_PARSE_TIME == 'true') {
	$time_start = explode(' ', PAGE_PARSE_START_TIME);
	$time_end = explode(' ', microtime());
	$parse_time = number_format(($time_end[1] + $time_end[0] - ($time_start[1] + $time_start[0])), 3);
	error_log(strftime(STORE_PARSE_DATE_TIME_FORMAT) . ' - ' . getenv('REQUEST_URI') . ' (' . $parse_time . 's)' . "\n", 3, STORE_PAGE_PARSE_TIME_LOG);

}

    if (DISPLAY_PAGE_PARSE_TIME == 'true') {
    	$time_start = explode(' ', PAGE_PARSE_START_TIME);
    $time_end = explode(' ', microtime());
    $parse_time = number_format(($time_end[1] + $time_end[0] - ($time_start[1] + $time_start[0])), 3);
      echo '<center>'.PARSE_TIME.' '. $parse_time . ', '.QUERIES.': ' . $query_counts . '</center>';
    }

    if ((GZIP_COMPRESSION == 'true') && ($ext_zlib_loaded == true) && ($ini_zlib_output_compression < 1)) 
	{
	    if ((PHP_VERSION < '4.0.4') && (PHP_VERSION >= '4')) 
		{
		    os_gzip_output(GZIP_LEVEL);
	    }
    }
	
   if (DISPLAY_MEMORY_USAGE == 'true')
   {
      if ( function_exists('memory_get_usage') )
      {
         echo  '<center>'.TEXT_MEMORY_USAGE.round(memory_get_usage()/1024/1024, 2) . 'MB</center>';
      }
   }
   
   
   if (DISPLAY_DB_QUERY == 'true')
   {
       echo "<CENTER><TEXTAREA ROWS=8 style='width:90%'>";
       
	   arsort ($db_query);
	   
	   foreach ($db_query as $v1 => $v2)
	   {
		    echo '('.$v2.') '.$v1."\n\n";
	   }
       
	   echo "</TEXTAREA></center>";
   }
   
?>