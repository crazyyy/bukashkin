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

  require('includes/top.php');

  if (empty($_GET['gID'])) die('Error url!');
  
  if (isset($_GET['action'])) 
  {
    switch ($_GET['action']) 
	{
      case 'save':


          $configuration_query = os_db_query("select configuration_key,configuration_id, configuration_value, use_function,set_function from " . TABLE_CONFIGURATION . " where configuration_group_id = '" . (int)$_GET['gID'] . "' order by sort_order");


          while ($configuration = os_db_fetch_array($configuration_query))
             
                         os_db_query("UPDATE ".TABLE_CONFIGURATION." SET configuration_value='".$_POST[$configuration['configuration_key']]."' where configuration_key='".$configuration['configuration_key']."'");

               os_redirect(FILENAME_CONFIGURATION. '?gID=' . (int)$_GET['gID']);
        break;


    }
  }


  $cfg_group_query = os_db_query("select configuration_group_title from " . TABLE_CONFIGURATION_GROUP . " where configuration_group_id = '" . (int)$_GET['gID'] . "'");
  $cfg_group = os_db_fetch_array($cfg_group_query);

  $main->head();
  ?>
<?php $main->top_menu(); ?>
<table border="0" width="100%" cellspacing="2" cellpadding="2">
  <tr>
    <td class="boxCenter" width="100%" valign="top"><table border="0" width="100%" cellspacing="0" cellpadding="2">
      <tr>
        <td class="main">
        <a style="right:20px;position:absolute;" class="button" onclick="document.configuration.submit()" href="#"><span><?php echo BUTTON_SAVE;  ?></span></a>
      
          <?php os_header('configuration.png',BOX_CONFIGURATION." / ".HEAD_T); ?> 
                <table border="0" width="100%" cellspacing="0" cellpadding="0">
         
          <tr>
            <td valign="top" align="right">
            
<?php echo os_draw_form('configuration', FILENAME_CONFIGURATION, 'gID=' . (int)$_GET['gID'] . '&action=save'); ?>
            <table width="100%"  border="0" cellspacing="0" cellpadding="4">
<?php
  $configuration_query = os_db_query("select configuration_key,configuration_id, configuration_value, use_function,set_function from " . TABLE_CONFIGURATION . " where configuration_group_id = '" . (int)$_GET['gID'] . "' order by sort_order");


  while ($configuration = os_db_fetch_array($configuration_query)) {
    if ($_GET['gID'] == 6) {
      switch ($configuration['configuration_key']) {
        case 'MODULE_PAYMENT_INSTALLED':
          if ($configuration['configuration_value'] != '') {
            $payment_installed = explode(';', $configuration['configuration_value']);
            for ($i = 0, $n = sizeof($payment_installed); $i < $n; $i++) {
              include(_MODULES.'payment/' . substr($payment_installed[$i], 0, strrpos($payment_installed[$i], '.')).'/'.$_SESSION['language'].'.php');
            }
          }
          break;


        case 'MODULE_SHIPPING_INSTALLED':
          if ($configuration['configuration_value'] != '') {
            $shipping_installed = explode(';', $configuration['configuration_value']);
            for ($i = 0, $n = sizeof($shipping_installed); $i < $n; $i++) {
              include(_MODULES.'/shipping/'. substr($shipping_installed[$i], 0, strrpos($shipping_installed[$i], '.')).'/'.$_SESSION['language'].'.php');                       
            }
          }
          break;


        case 'MODULE_ORDER_TOTAL_INSTALLED':
          if ($configuration['configuration_value'] != '') {
            $ot_installed = explode(';', $configuration['configuration_value']);
            for ($i = 0, $n = sizeof($ot_installed); $i < $n; $i++) {
              include(_MODULES.'/order_total/' .  substr($ot_installed[$i], 0, strrpos($ot_installed[$i], '.')).'/'.$_SESSION['language'].'.php');                      
            }
          }
          break;
      }
    }
    if (os_not_null($configuration['use_function'])) {
      $use_function = $configuration['use_function'];
      if (preg_match('/->/', $use_function)) {
        $class_method = explode('->', $use_function);
        if (!is_object(${$class_method[0]})) {
          include(get_path('class_admin') . $class_method[0] . '.php');
          ${$class_method[0]} = new $class_method[0]();
        }
        $cfgValue = os_call_function($class_method[1], $configuration['configuration_value'], ${$class_method[0]});
      } else {
        $cfgValue = os_call_function($use_function, $configuration['configuration_value']);
      }
    } else {
      $cfgValue = $configuration['configuration_value'];
    }

    if (isset($_GET['cID']))
	{
    if (((!$_GET['cID']) || (@$_GET['cID'] == $configuration['configuration_id'])) && (!$cInfo) && (substr($_GET['action'], 0, 3) != 'new')) {
      $cfg_extra_query = os_db_query("select configuration_key,configuration_value, date_added, last_modified, use_function, set_function from " . TABLE_CONFIGURATION . " where configuration_id = '" . $configuration['configuration_id'] . "'");
      $cfg_extra = os_db_fetch_array($cfg_extra_query);


      $cInfo_array = os_array_merge($configuration, $cfg_extra);
      $cInfo = new objectInfo($cInfo_array);
    }
	}
	
    if ($configuration['set_function']) 
	{
        eval('$value_field = ' . $configuration['set_function'] . '"' . htmlspecialchars($configuration['configuration_value']) . '");');
    } 
	else 
	{
        $value_field = os_draw_input_field($configuration['configuration_key'], $configuration['configuration_value'],'size="15" class="round"');
    }
	
   // add
$chet =1;
   if (strstr($value_field,'configuration_value')) $value_field=str_replace('configuration_value',$configuration['configuration_key'],$value_field);
{ 
 
   echo '<tr style="padding-top:2cm; background-color:';
   $color = $color == '#f9f9ff' ? '#f0f1ff':'#f9f9ff';
  
   echo '">
      <td style="padding-bottom: 10px;padding-top: 10px;" valign="middle" width="200" align="center">'.$value_field.'</td>
    <td style="padding-bottom: 10px;padding-top: 10px;" valign="top" align="left"><b>'.constant(strtoupper($configuration['configuration_key'].'_TITLE')).'</b><br>'.constant(strtoupper( $configuration['configuration_key'].'_DESC')).'</td>


  </tr>
  ';
  
}
  }
?>
            </table><br>
			<a onClick="return confirm('Установить настройки по умолчанию?')" style="right:130px;position:absolute;" class="button" href="index.php?action=default&name=configuration&param=<?php echo $_GET['gID']; ?>"><span><?php echo BUTTON_DEFAULT;  ?></span></a>
<a style="position:relative;" class="button" onclick="document.configuration.submit()" href="#"><span><?php echo BUTTON_SAVE;  ?></span></a>
</form>       
                 </td>


          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php $main->bottom(); ?>