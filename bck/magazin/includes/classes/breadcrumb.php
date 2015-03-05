<?php
/*
#####################################
#  ShopOS: Shopping Cart Software.
#  Copyright (c) 2008-2010
#  http://www.shopos.ru
#  http://www.shoposs.com
#  Ver. 1.0.2
#####################################
*/

  class breadcrumb 
  {
    var $_trail;

    function breadcrumb() 
	{
       $this->reset();
	   do_action('breadcrumb_init');
    }

    function reset() 
	{
	   do_action('breadcrumb_reset');
       $this->_trail = array();
    }

    function add($title, $link = '') 
	{
	   do_action('breadcrumb_add');
	   
      $this->_trail[] = apply_filter('breadcrumb_info', array('title' => $title, 'link' => $link));
    }

    function trail($separator = ' - ') 
	{
	  do_action('breadcrumb_trail');
      $trail_string = '';

      for ($i=0, $n=sizeof($this->_trail); $i<$n; $i++) {
        if (isset($this->_trail[$i]['link']) && os_not_null($this->_trail[$i]['link'])) {
          $trail_string .= '<a href="' . $this->_trail[$i]['link'] . '">' . $this->_trail[$i]['title'] . '</a>';
        } else {
          $trail_string .= $this->_trail[$i]['title'];
        }

        if (($i+1) < $n) $trail_string .= $separator;
      }

      return $trail_string;
    }
  }
?>