<?php
/*
#####################################
# ShopOS: Скрипты интернет-магазина
#  Copyright (c) 2008-2009
# http://shopos.ru
# Ver. 1.0.1
#####################################
*/

$box_smarty = new osTemplate;
$box_smarty->assign('tpl_path', _HTTP_THEMES_C); 
$box_content='';
      //fsk18 lock
  $fsk_lock='';
  if ($_SESSION['customers_status']['customers_fsk18_display']=='0') {
  $fsk_lock=' and p.products_fsk18!=1';
  }
  $random_select = "select r.reviews_id, r.reviews_rating, p.products_id, p.products_image, pd.products_name from " . TABLE_REVIEWS . " r, " . TABLE_REVIEWS_DESCRIPTION . " rd, " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_DESCRIPTION . " pd where p.products_status = '1' and p.products_id = r.products_id ".$fsk_lock." and r.reviews_id = rd.reviews_id and rd.languages_id = '" . (int)$_SESSION['languages_id'] . "' and p.products_id = pd.products_id and pd.language_id = '" . (int)$_SESSION['languages_id'] . "'";
  if ($product->isProduct()) {
    $random_select .= " and p.products_id = '" . $product->data['products_id'] . "'";
  }
  $random_select .= " order by r.reviews_id desc limit " . MAX_RANDOM_SELECT_REVIEWS;
  $random_product = os_random_select($random_select);


  if ($random_product) {
    // display random review box
    $review_query = "select substring(reviews_text, 1, 60) as reviews_text from " . TABLE_REVIEWS_DESCRIPTION . " where reviews_id = '" . $random_product['reviews_id'] . "' and languages_id = '" . $_SESSION['languages_id'] . "'";
    $review_query = osDBquery($review_query);
    $review = os_db_fetch_array($review_query,true);

    $review = htmlspecialchars($review['reviews_text']);
    $review = os_break_string($review, 15, '-<br />');

    $box_content = '<div align="center"><a href="' . os_href_link(FILENAME_PRODUCT_REVIEWS_INFO, 'products_id=' . $random_product['products_id'] . '&reviews_id=' . $random_product['reviews_id']) . '">' . os_image(DIR_WS_THUMBNAIL_IMAGES . $random_product['products_image'], $random_product['products_name']) . '</a></div><a href="' . os_href_link(FILENAME_PRODUCT_REVIEWS_INFO, 'products_id=' . $random_product['products_id'] . '&reviews_id=' . $random_product['reviews_id']) . '">' . $review . ' ..</a><br><div align="center">' . os_image(_HTTP_THEMES_C.'img/stars_' . $random_product['reviews_rating'] . '.gif' , sprintf(BOX_REVIEWS_TEXT_OF_5_STARS, $random_product['reviews_rating'])) . '</div>';


  } elseif ($product->isProduct()) {
    // display 'write a review' box
    $box_content = '<table border="0" cellspacing="0" cellpadding="2"><tr><td class="infoBoxContents"><a href="' . os_href_link(FILENAME_PRODUCT_REVIEWS_WRITE, os_product_link($product->data['products_id'],$product->data['products_name'])) . '">' . BOX_REVIEWS_WRITE_REVIEW .'</a></td></tr></table>';
   }

  if ($box_content!='') {
  $box_smarty->assign('REVIEWS_LINK',os_href_link(FILENAME_REVIEWS)); 
  $box_smarty->assign('BOX_CONTENT', $box_content);
  $box_smarty->assign('language', $_SESSION['language']);
  // set cache ID
 if (!CacheCheck()) {
  $box_smarty->caching = 0;
  $box_reviews= $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_reviews.html');
  } else {
  $box_smarty->caching = 1;
  $box_smarty->cache_lifetime=CACHE_LIFETIME;
  $box_smarty->cache_modified_check=CACHE_CHECK;
  $cache_id = $_SESSION['language'].$random_product['reviews_id'].$product->data['products_id'].$_SESSION['language'];
  $box_reviews= $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_reviews.html',$cache_id);
  }
  $osTemplate->assign('box_REVIEWS',$box_reviews);

  } 

?>