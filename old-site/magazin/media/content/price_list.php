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

?>
<br />
<style type="text/css">
<!--
.border {border-collapse: collapse; width: 96%; font-size: 0.9em;}
.border CAPTION {margin: 1em 0; font-size: 1em;}
.border TR:hover {background-color: #EEE; color: black;}
.border TH {background-color: white; color: black;}
.border TD {padding: 4px; border: 1px solid #DADADA; empty-cells: hide;}
.hid {visibility: hidden;}
.right {
      text-align: center;
      width: 10px;
          }
TD A {text-decoration: none;}
TD A:hover {text-decoration: underline;}
A.mnf {background-color: #EEE; color: black;}
-->
</style>
<table class="border">
<tr>

<th><?php
echo TEXT_VALID_PRODUCTS_NAME.' <a href="'.os_href_link(FILENAME_CONTENT, 'coID='.$_GET['coID'].'&products_name=asc').'">&uarr;</a><a href="'.os_href_link(FILENAME_CONTENT, 'coID='.$_GET['coID'].'&products_name=desc').'">&darr;</a>';
?>
</th>


<th>
<?php
echo TEXT_VALID_PRODUCTS_PRICE.' <a href="'.os_href_link(FILENAME_CONTENT, 'coID='.$_GET['coID'].'&products_price=asc').'">&uarr;</a><a href="'.os_href_link(FILENAME_CONTENT, 'coID='.$_GET['coID'].'&products_price=desc').'">&darr;</a>';
?>
</th>
</tr>
<?
    if (isset($_GET['products_name']))
	{
	   if (strtolower($_GET['products_name'])=='asc')
	   {
           $_orders = ' order by pd.products_name ASC';
	   }
	   elseif (strtolower($_GET['products_name'])=='desc')
	   {
	       $_orders = ' order by pd.products_name DESC';
	   }
	}
	else
	{
	       $_orders = ' order by pd.products_name ASC';
	}
	
    if (isset($_GET['products_price']))
	{
	   if (strtolower($_GET['products_price'])=='asc')
	   {
           $_orders = ' order by p.products_price ASC';
	   }
	   elseif (strtolower($_GET['products_price'])=='desc')
	   {
	       $_orders = ' order by p.products_price DESC';
	   }
	}
	else
	{
	      $_orders = ' order by p.products_price ASC';
	}

	
    $export_query = "select
                                                                                                p.products_id, pd.products_name, p.products_model, p.products_price, p.products_status, p.products_tax_class_id
                                                                                                from
                                                                                                " . TABLE_PRODUCTS . " p LEFT JOIN
                                                                                                " . TABLE_PRODUCTS_DESCRIPTION . " pd ON
                                                                                                p.products_id = pd.products_id AND
                                                                                                pd.language_id = '".$_SESSION['languages_id']."'
                                                                                                where
                                                                                                p.products_status = 1".$_orders;
                $export_query = osDBquery($export_query);
    while ($row = os_db_fetch_array($export_query,true)) 
        {
                $products_price = $osPrice->Format($row['products_price'], true);
        echo "<tr>\n";
        echo "<td>"."<a href=\"".os_href_link(FILENAME_PRODUCT_INFO, 'products_id=' .$row["products_id"])."\">" .$row["products_name"]."</a></td>\n";

            echo "<td align=\"right\">";
			echo $products_price; 
			echo "</td>\n";
            echo "</tr>\n";
    }
echo "</table><br /><br /><br />";

?>