<?php
global $osPrice;

	$carousello_settings = array();
	$carousello_info = array();
	
	$carousello_query_raw = "select * from " . TABLE_GOODS_CAROUSELLO_SETTINGS . "";
	$carousello_query = os_db_query($carousello_query_raw);
	while ($carousello = os_db_fetch_array($carousello_query)) {
		$carousello_settings[$carousello['good_carousello_settings_code']] = $carousello['good_carousello_settings_value'];
	}
	
	$carousello_fields = array("p.products_image", "p.products_id", "pd.products_name", "p.products_tax_class_id", "p.products_price");
	
	switch(intval($carousello_settings['display'])) {
		case 1 :
			// из списка
			$box->assign('BOX_GOODS_CAROUSELLO_TITLE', 'Обратите внимание');
			$carousello_query_raw = "	select
											" . implode(",", $carousello_fields) . "
										 from 
											" . TABLE_PRODUCTS . " p,
											" . TABLE_GOODS_CAROUSELLO . " c,
											" . TABLE_PRODUCTS_DESCRIPTION . " pd
										 where 
											p.products_id = pd.products_id 
											and pd.language_id = '" . $_SESSION['languages_id'] . "' 
											and c.good_carousello_visibility = 1
											and p.products_id = c.good_carousello_id";
			break;
		case 2 :
			// рекомендуемые
			$carousello_query_raw = "	select
											" . implode(",", $carousello_fields) . "
										 from 
											" . TABLE_PRODUCTS . " p,
											" . TABLE_FEATURED . " f,
											" . TABLE_PRODUCTS_DESCRIPTION . " pd
										 where 
											p.products_id = pd.products_id 
											and pd.language_id = '" . $_SESSION['languages_id'] . "' 
											and f.status = 1
											and p.products_id = f.products_id
										limit " .(isset($carousello_settings['display_count']) ? $carousello_settings['display_count'] : 10);
			$box->assign('BOX_GOODS_CAROUSELLO_TITLE', 'Рекоммендуемые товары');
			break;
		case 3 :
			// популярные (покупаемые)
			$carousello_query_raw = "	select
											" . implode(",", $carousello_fields) . "
										 from 
											" . TABLE_PRODUCTS . " p,
											" . TABLE_PRODUCTS_DESCRIPTION . " pd
										 where 
											p.products_id = pd.products_id 
											and pd.language_id = '" . $_SESSION['languages_id'] . "' 
											and p.products_status = 1
										order by products_ordered desc
										limit " .(isset($carousello_settings['display_count']) ? $carousello_settings['display_count'] : 10);
			$box->assign('BOX_GOODS_CAROUSELLO_TITLE', 'Популярные товары');
			break;
		case 4 :
			// новинки
			$carousello_query_raw = "	select
											" . implode(",", $carousello_fields) . "
										 from 
											" . TABLE_PRODUCTS . " p,
											" . TABLE_PRODUCTS_DESCRIPTION . " pd
										 where 
											p.products_id = pd.products_id 
											and pd.language_id = '" . $_SESSION['languages_id'] . "' 
											and p.products_status = 1
										order by products_id desc
										limit " .(isset($carousello_settings['display_count']) ? $carousello_settings['display_count'] : 10);
			$box->assign('BOX_GOODS_CAROUSELLO_TITLE', 'Новые товары');
			break;
		case 0 :
		default :
			break;
	}
	
	if(intval($carousello_settings['display']) != 0) {
		
		$carousello_query = os_db_query($carousello_query_raw);
		while ($carousello = os_db_fetch_array($carousello_query)) {
			if($carousello['products_image']) 
			{
				$carousello['products_image'] = http_path('images_info') . $carousello['products_image'];
			}
			else
			{
			  	$carousello['products_image'] =  http_path('images') . 'product_images/noimage.gif';
			}
			$carousello['products_link'] = os_href_link(FILENAME_PRODUCT_INFO, os_product_link($carousello['products_id'], $carousello['products_name']));
			
			$carousello['products_price'] = $osPrice->Format($carousello['products_price'], true);

			
			$carousello_info[] = $carousello;
			
			
		}
		
		if(isset($carousello_settings['autoscroll']) && $carousello_settings['autoscroll'] == 1 && isset($carousello_settings['autoscroll_delay'])) {
			$box->assign('BOX_GOOD_CAROUSELLO_AUTOSCROLL', 1);
			$box->assign('BOX_GOOD_CAROUSELLO_AUTOSCROLL_DELAY', $carousello_settings['autoscroll_delay']);
		} else {
			$box->assign('BOX_GOOD_CAROUSELLO_AUTOSCROLL', 0);
		}
		
		
		$box->assign('BOX_GOOD_CAROUSELLO_ITEMS', $carousello_info);
		$box->caching = 0;
		$box_test = $box->fetch(CURRENT_TEMPLATE.'/boxes/box_goods_carousello.html');
		$osTemplate->assign('box_GOODS_CAROUSELLO', $box_test);
	}
?>