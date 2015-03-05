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

   class main {
		var $error = array();
		var $style = array();
		
		//добавляет в даминку главное меню
	    function top_menu ()
	    {
		   global $messageStack;
		   
		    if ($messageStack->size > 0) 
            {
                echo $messageStack->output();
            }
			
            require( dir_path('catalog') . 'admin/includes/top_menu.php');
	        return true;
	    }
		
		function bottom()
		{
		    _e ('</div>');
			
		    if (DISPLAY_PAGE_PARSE_TIME == 'true') 
			{ 
			    global $query_counts;
    	        $time_start = explode(' ', PAGE_PARSE_START_TIME);
                $time_end = explode(' ', microtime());
                $parse_time = number_format(($time_end[1] + $time_end[0] - ($time_start[1] + $time_start[0])), 3);
                echo '<center>'.PARSE_TIME.' '. $parse_time . ', '.QUERIES.': ' . $query_counts . '</center>';
            }
			
			//показывает кол. потребляемой памяти в админке
            if (DISPLAY_MEMORY_USAGE == 'true')
            {
                if ( function_exists('memory_get_usage') )
                {
                      echo  '<center>'.TEXT_MEMORY_USAGE.round(memory_get_usage()/1024/1024, 2) . 'MB</center>';
                }
            }
   
            if (DISPLAY_DB_QUERY == 'true')
            {
			    global $db_query;
				
                echo '<center><textarea rows="8" style="width:90%">';
	            arsort ($db_query);
	   
	            foreach ($db_query as $v1 => $v2)
	            {
		             echo '('.$v2.') '.$v1."\n\n";
	            }
       
	            echo "</textarea></center>";
            }
			
		  // _e ('<center><span style="font-size:12px;color:#000;">&copy; '.date('Y').' ShopOS</span><br /><a href="http://www.shopos.ru/" title="скрипты интернет магазина" style="font-size:12px;color:#000;">Скрипты интернет-магазина</a></center>');
		   
		   return true;
		}
		
		//добавление стилей с именем $styleю.css
		function style ($style, $param = false)
		{
		    if ($param)
			{
		        $this->style[] = 'themes/'.ADMIN_TEMPLATE.'/styles/'.$style.'.css';
			}
			else
			{
		        _e ('<link rel="stylesheet" type="text/css" href="themes/'.ADMIN_TEMPLATE.'/styles/'.$style.'.css">');
		    }
		   return true;
		}
		
		//добавляет favicon
		function favicon ()
		{
		    _e ('<link rel="shortcut icon" href="favicon.ico" />');
		}
		
		// формируется тег <head></head>
		function head ()
		{
		   global $os_action;
		   global $PHP_SELF;
	     
		   _e ('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">');
           _e ('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">');
           _e ('<head>');
           $this->favicon();
		   _e ('<meta http-equiv="Content-Type" content="text/html; charset='.$_SESSION['language_charset'].'">');
		   
		   if (TITLES != TITLE." : HEADING_TITLE")  
		   {
		      _e ('<title>'.TITLES.'</title>');
		   }
		   else
		   {
		      _e ('<title>'.TITLE.' : '.HEADING_TITLE.'</title>');
		   }
		   
		   $this->style('style');
		   $this->style('menu');
		   
           _e ('<script type="text/javascript" src="includes/general.js"></script>');

		   if (strstr($PHP_SELF, 'index2.php'))
		   {
              // _e ('<script type="text/javascript" src="includes/javascript/tabber.js"></script>');
              // _e ('<link rel="stylesheet" href="includes/javascript/tabber.css" TYPE="text/css" MEDIA="screen">');
              // _e ('<link rel="stylesheet" href="includes/javascript/tabber-print.css" TYPE="text/css" MEDIA="print">');
		   }
		   
		   
		   if (!empty($os_action['head_admin']))
		   {
		       foreach ($os_action['head_admin'] as $val => $val2)
			   { 
			      if (function_exists($val))
				  {
				      $val();
				  }
				  else
				  {
				    $this->error[] = 'no function '.$val;
				  }
			   }
		   }
		   
           _e ('</head>');
           _e ('<body bgcolor="#FFFFFF">');
		   
		}
   
      function breadcrumb()
	  {
	     global $top_menu;
		 
	     return true;
	  }
   
      function lang_menu() //Панель с выбором языка
      {

          _e('<form action="" id="lang_form" method="post"><input type="hidden" id="lang_a" name="lang_a" value="ru">');
		  
	      if($_SESSION['language_admin'] == 'ru')
	      {
		      _e('<span onclick="document.getElementById(\'lang_a\').value = \'ru\';"><img width="14px" height="11px" alt="ru" border="0"  class="img_lang" src="'. http_path('icons_admin').'lang/ru.gif'.'" /></span>');  	 
	      }
	      else
	      { 
		      _e('<span onclick="document.getElementById(\'lang_a\').value = \'ru\';document.getElementById(\'lang_form\').submit();"><img  class="img_lang_a" width="14px" height="11px" alt="ru" border="0"    src="'. http_path('icons_admin').'lang/ru.gif'.'" /></span>');  
	      }
	

	      if($_SESSION['language_admin'] == 'en')
	      {
		      _e('<span onclick="document.getElementById(\'lang_a\').value = \'en\';"><img width="14px" alt="en" border="0" height="11px" class="img_lang" src="'. http_path('icons_admin').'lang/en.gif'.'" /></span>');;  		 
	      }
	      else
	      { 
		      _e('<span onclick="document.getElementById(\'lang_a\').value = \'en\';document.getElementById(\'lang_form\').submit();"><img  class="img_lang_a" width="14px" height="11px" alt="en" border="0" src="'. http_path('icons_admin').'lang/en.gif'.'" /></span>');  
	      }	
          _e ('</form>');
          return true;
      }
	  
	  function fly_menu ($url, $name, $target="_blank")
	  {
	      if (!empty($target))
		  {
			  _e('<a target="'.$target.'" style="color:#4378a1;position:absolute;top:100px;right:3%;" id="fly_menu" href="'.$url.'">'.$name.'</a>'); 
		  }
		  else
		  {
		     _e('<a style="color:#4378a1;position:absolute;top:100px;right:3%;" id="fly_menu" href="'.$url.'">'.$name.'</a>'); 
		  }
	  }
	  
      function crutch ()
      {
	  
	  
/*	 замедление меню _e('
	   
	   <script type="text/javascript" src="../jscript/jquery/jquery.js"></script>
		<script type="text/javascript" src="superfish.js"></script>
		<script type="text/javascript" src="bgiframe.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$(".nav")
			.superfish({
				animation : { opacity:"show",height:"show"}
			})
			.find(">li[ul]")
				.mouseover(function(){
					$("ul", this).bgIframe({opacity:false});
				})
				.find("a")
					.focus(function(){
						$("ul", $(".nav>li[ul]")).bgIframe({opacity:false});
					});
		});
		</script>
	   ');
	   */
	  /* костыли для ie6*/
        _e ('<!--[if lte IE 6]>');
		_e ('<script type="text/javascript" src="../jscript/jquery/jquery.js"></script>');
		_e ('<script type="text/javascript" src="../jscript/jquery/plugins/bgiframe.js"></script>');
		_e ('<script type="text/javascript">');
		_e('$(document).ready(function(){
			$(".nav")
			.find(">li:has(ul)")
				.mouseover(function(){
					$("ul", this).bgIframe({opacity:false});
				})
				.find("a")
					.focus(function(){
						$("ul", $(".nav>li:has(ul)")).bgIframe({opacity:false});
					});
		});');
		_e('</script>');
	  
/*	  _e('<style>
		  #finder {
                                           position:absolute;
                                           right: 2cm;
                                           top:16px;
                                      }    
                       #user_info_left {left: px};									  
                </style>');		 */
        _e('<![endif]-->');
   }
   
   function heading($img, $text)
   {
       echo '<h1 class="contentBoxHeading"><img border="0" height="16px" width="16px" alt="" src="'.get_path('icons_admin', 'http').$img.'" />'.$text.'</h1>';
   }
   
   }
?>