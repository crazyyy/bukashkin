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

$db = new db();

class db {
    var $link;
   /* var $server = DB_SERVER;
    var $username = DB_SERVER_USERNAME;
    var $password = DB_SERVER_PASSWORD;
    var $database = DB_DATABASE;
    var $use_pconnect = USE_PCONNECT;*/
	var $cache;
    /* constant */
	var $DB_CACHE = false;
	var $STORE_DB_TRANSACTIONS = false;
	var $DISPLAY_DB_QUERY = false;
	var $SEARCH_ENGINE_FRIENDLY_URLS = false;
    var $AJAX_CART = false;
	
    function connect() 
	{
        if ($use_pconnect == 'true') 
	    {
             $this->link = mysql_pconnect($this->server, $this->username, $this->password);
        } 
		else 
		{
             $this->link = @mysql_connect($this->server, $this->username, $this->password, $this->link); 
        }

        if ($this->link)
		{
             @mysql_select_db($this->database);
             @mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
        }

        if (!$this->link) 
		{
             $db->error("connect", mysql_errno(), mysql_error());
        }

        return true;
    }

    function query($query) 
	{
        global $query_counts;
		global $db_query;
        $query_counts++; 

        if (STORE_DB_TRANSACTIONS == 'true') 
		{
            error_log('QUERY ' . $query . "\n", 3, STORE_PAGE_PARSE_TIME_LOG);
        }
        
		$result = mysql_query($query) or $this->error($query, mysql_errno(), mysql_error());

        if (STORE_DB_TRANSACTIONS == 'true') 
		{
            $result_error = mysql_error();
            error_log('RESULT ' . $result . ' ' . $result_error . "\n", 3, STORE_PAGE_PARSE_TIME_LOG);
        }
       
        if (!$result) 
		{
            $this->error($query, mysql_errno(), mysql_error());
        }
		
		if (DISPLAY_DB_QUERY == 'true')
	    {
		 
	    $db_text = $query;
        $db_text = str_replace("\r\n", "", $db_text); 
        $db_text = str_replace("\n","",$db_text);
		$db_text = strtolower($db_text);
        $db_text = trim($db_text);
        $db_text = preg_replace("|[\s]+|s", " ", $db_text);
		
	    //$db_query[$query_counts] = $db_text;
		
		if (isset($db_query[$db_text]))
        {
		   $db_query[$db_text]++;
		}	
        else
        {
		   $db_query[$db_text] = 1;
		}		
        }

        return $result;
    }
  
    function fetch_array(&$db_query,$cq=false)
	{
        if ($this->DB_CACHE=='true' && $cq) 
		{
             if (!count($db_query)) return false;
             if (is_array($db_query)) 
			 {
                  $curr = current($db_query);
                  next($db_query);
             }
             return $curr;
        } 
		else 
		{
             if (is_array($db_query)) 
			 {
                 $curr = current($db_query);
                 next($db_query);
                 return $curr;
             }
             return @mysql_fetch_array($db_query, MYSQL_ASSOC);
        }
    }
    
    function error($query, $errno, $error) 
    {
       
	   
       if (DB_ERR_MAIL_SEND == true)
       {
             $msg = "\n" . 'MYSQL ERROR REPORT' . "\n" . " - " . date("d/m/Y H:m:s",time()) . "\n" . '---------------------------------------' . "\n";
             $msg .= $errno . ' - ' . $error . "\n\n" . $query . "\n";
             $msg .= '---------------------------------------' . "\n";
             $msg .= 'Server Name   : ' . $_SERVER['SERVER_NAME'] . "\n";
             $msg .= 'Remote Address: ' . $_SERVER['REMOTE_ADDR'] . "\n";
             $msg .= 'Referer       : ' . $_SERVER["HTTP_REFERER"] . "\n";
             $msg .= 'Requested     : ' . $_SERVER["REQUEST_URI"] . "\n";
             $msg .= 'Trace Back    : ' . str_replace(DIR_FS_CATALOG, '', str_replace('\\', '/', implode(" => ", zen_trace_back('', 0 , 1, true))))."\n";;
   
            if(defined('DEBUG') && DEBUG == true) 
            {
			       echo(nl2br($msg));
			       die('==========================================================================');
            }
	 
           $log = date("d/m/Y H:m:s",time()) . ' | ' . $errno . ' - ' . $error . ' | ' . $query . ' | ' . $_SERVER["REQUEST_URI"] . "\n";
   
	       error_log($log, 3, _TMP.'shopos_db_error.log');
		   echo '<textarea class="round" style="color:red;width:100%; height:100px;">'.$log.'</textarea>';
           @ mail('shopos db error!', 'MySQL DB Error!', $msg, 'From: db_error@'.$_SERVER["SERVER_NAME"]);
       }
	   
       //include(_LANG.'ru/db_error.php');	  
       @ header('Location: '._HTTP.'db_error.php');
       die();
       //die(DB_ERR_MSG);
    }

	function db_query($query) 
    {
	    if (DB_CACHE == 'true') 
	    {
		     $result = $this->cached($query);
	    } 
	    else 
	    {
	       	 $result = $this->query($query);
	    }
	    return $result;
    }

	
    function cached($query)
	{

        // get HASH ID for filename
        $id=md5($query);

       // cache File Name
       $file=SQL_CACHEDIR.$id.'.db';
 
       // file life time
       $expire = DB_CACHE_EXPIRE; // 24 hours

       if (STORE_DB_TRANSACTIONS == 'true') {
         error_log('QUERY ' . $query . "\n", 3, STORE_PAGE_PARSE_TIME_LOG);
       }

       if (file_exists($file) && filemtime($file) > (time() - $expire)) {

     // get cached resulst
        $result = unserialize(implode('',file($file)));

        } else {

         if (file_exists($file)) @unlink($file);

        // get result from DB and create new file
        $result = $this->query($query, $this->link) or $this->error($query, mysql_errno(), mysql_error());

        if (STORE_DB_TRANSACTIONS == 'true') {
                $result_error = mysql_error();
                error_log('RESULT ' . $result . ' ' . $result_error . "\n", 3, STORE_PAGE_PARSE_TIME_LOG);
        }

            // fetch data into array
            while ($record = $this->fetch_array($result))
                $records[]=$record;


            // safe result into file.
			
            $stream = serialize($records);
           $fp = fopen($file,"w");
           fwrite($fp, $stream);
			$this->cache[$id] = $stream;
           fclose($fp);
            $result = unserialize(implode('',file($file)));

        }

        return $result;
    }
  
    function input($string) 
	{
       if (function_exists('mysql_real_escape_string')) 
	   {
            return mysql_real_escape_string($string);
       } 
	   elseif (function_exists('mysql_escape_string')) 
	   {
            return mysql_escape_string($string);
       }
	   
       return addslashes($string);
    }

	function prepare_input($string) 
	{
        if (is_string($string)) 
		{
            return trim(stripslashes($string));
        } 
		elseif (is_array($string)) 
		{
            reset($string);
            while (list($key, $value) = each($string)) 
			{
                $string[$key] = $this->prepare_input($value);
            }
            return $string;
        } 
		else 
		{
            return $string;
        }
    }
  
	function data_seek($db_query, $row_number,$cq=false) 
	{
        if (DB_CACHE=='true' && $cq) 
		{
            if (!count($db_query)) return;
            return $db_query[$row_number];
        } 
		else 
		{
            if (!is_array($db_query)) return mysql_data_seek($db_query, $row_number);
        }
    }
  
    function categoriesstatus_for_product($product_id) 
    {
	    $categorie_query = "SELECT categories_id FROM ".TABLE_PRODUCTS_TO_CATEGORIES."WHERE products_id='".$product_id."'";
	    $categorie_query = $this->db_query($categorie_query);

	    while ($categorie_data = $this->fetch_array($categorie_query, true)) 
	    {
		     if (os_check_categories_status($categorie_data['categories_id']) >= 1) 
		     {
			     return 1;
		     } 
		     else 
		     {
			     return 0;
		     }
		     echo $categorie_data['categories_id'];
	    }
    } 

    function close() 
    {
       return mysql_close($this->link);
    }
	
	function insert_id() 
    {
        return mysql_insert_id();
    }

    function output($string) 
    {
        return htmlspecialchars($string);
    }

    function select_db($database) 
    {
        return mysql_select_db($database);
    }

    function fetch_fields($db_query) 
    {
        return mysql_fetch_field($db_query);
    }
  
    function num_rows($db_query,$cq=false) 
    {
        if (DB_CACHE=='true' && $cq) 
	    {
           if (!count($db_query)) return false;
           return count($db_query);
        } 
	    else 
	    {
           if (!is_array($db_query)) return mysql_num_rows($db_query);
        }
    }
  
    function perform($table, $data, $action = 'insert', $parameters = '', $link = 'db_link') 
	{
        reset($data);

        if ($action == 'insert') 
		{
            $query = 'insert into ' . $table . ' (';
             while (list($columns, ) = each($data)) 
			 {
               $query .= $columns . ', ';
             }
			 
            $query = substr($query, 0, -2) . ') values (';
            reset($data);
			
            while (list(, $value) = each($data)) 
			{
      	       $value = (is_Float($value) & PHP4_3_10) ? sprintf("%.F",$value) : (string)($value);
               switch ($value) 
			   {
                   case 'now()':
                     $query .= 'now(), ';
                   break;
                   case 'null':
                     $query .= 'null, ';
                   break;
                   default:
                     $query .= '\'' . $this->input($value) . '\', ';
                   break;
               }
            }
            $query = substr($query, 0, -2) . ')';
        } 
		elseif ($action == 'update') 
		{
            $query = 'update ' . $table . ' set ';
            while (list($columns, $value) = each($data)) 
			{
                $value = (is_Float($value) & PHP4_3_10) ? sprintf("%.F",$value) : (string)($value);
      	        switch ($value) 
				{
                   case 'now()':
                      $query .= $columns . ' = now(), ';
                   break;
                   case 'null':
                      $query .= $columns .= ' = null, ';
                   break;
                   default:
                      $query .= $columns . ' = \'' . $this->input($value) . '\', ';
                   break;
                }
            }
            $query = substr($query, 0, -2) . ' where ' . $parameters;
    }

    return $this->query($query, $link);
  }
  
}
?>