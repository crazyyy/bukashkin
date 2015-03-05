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

//добавление опции для плагина
function add_option( $name, $value, $func = 'input', $_array = '')
{
	global $p; // класс class/plugin.php
	global $_plugin_sort;
	
	if (!empty($p->name))
	{
	   if (empty($_array))
	   {
	       if ( isset($_plugin_sort[$p->name]) ) $_plugin_sort[$p->name]++;
		   else $_plugin_sort[$p->name] = 1;
		   
	       os_db_query("insert ".DB_PREFIX."plugins (plugins_key, plugins_name, plugins_value, sort_order, sort_plugins, use_function) VALUES ('".$p->name."', '".$name."','".$value."','".$_plugin_sort[$p->name]."','0', '".$func."(');");
       }
       else
       {
	       $_plugin_sort[$p->name]++;
	      if ($func == 'radio' or $func == 'checkbox')
		  {
		       $_array = mysql_real_escape_string(trim($_array));
		       os_db_query("insert ".DB_PREFIX."plugins (plugins_key, plugins_name, plugins_value, sort_order, sort_plugins, use_function) VALUES ('".$p->name."', '".$name."','".$value."','".$_plugin_sort[$p->name]."',0, '".$func."($_array,"."');");
		  }
	   }
    }	   
	   
	return true;   
}

function get_option ($_key)
{
    global $p;

	if (!empty($p->options) && isset($p->options[$_key]))
	{
	    return $p->options[$_key];
	}
	else return false;
}

function update_option ($_key, $_value)
{
    $_key = os_db_prepare_input($_key);
	$_value = os_db_prepare_input($_value);
	
    if ($_key != 'show')
	{
        os_db_query("update `".DB_PREFIX."plugins` set plugins_value='".$_value."' where plugins_name='".$_key."';");
	}
	return true;
}

function db_version()
{
    global $database_version;
	
	if (empty($database_version))
	{
	
     $_table = os_db_query('SHOW TABLES');
	 $_in = 'Tables_in_'.DB_DATABASE;
    while ($_table_value = os_db_fetch_array($_table))
    {
         $_all_table[$_table_value[$_in]] = '';
    }
	 
	if (isset($_all_table[DB_PREFIX.'database_version'])) //определяем, есть ли таблица с версией магазина
	{
	 
	    $_version_fields = os_db_query('SHOW FIELDS FROM '.DB_PREFIX.'database_version');
        $_version_fields = os_db_fetch_array($_version_fields, true);

        if (isset($_version_fields['Field']) && $_version_fields['Field'] == 'version')
        {
             $_database_version = osDBquery('SELECT version FROM '.DB_PREFIX.'database_version limit 1');
   
             if (os_db_num_rows($_database_version,true))  
             {
                 $database_version = os_db_fetch_array($_database_version,true);
                 $database_version = $database_version['version'];
             }
             else $database_version = '1.0.0';
        }
        else $database_version = '1.0.0';
    }
	else
	{   
    	 os_db_query("drop table if exists ".DB_PREFIX."database_version;");
	     os_db_query("CREATE TABLE ".DB_PREFIX."database_version (version varchar(255) NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE utf8_general_ci;");
	     os_db_query("INSERT INTO ".DB_PREFIX.'database_version(version) VALUES (\'1.0.0\');');
		 $database_version = '1.0.0';
	}
	}
	
	return $database_version;

}

function plugins_switch()
{
?>
<tr>
                <td colspan="13" valign="bottom">
                    <img src="images/arrow_ltr.png" border="0" width="38" height="22"/>
                    <a href="#" onclick="javascript:SwitchCheck();"><?php echo PLUGINS_SWITCH_ALL; ?></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="action" dir="ltr" onchange="this.form.submit();">
    
            <option value="<?php echo PLUGINS_SELECTED; ?>" selected="selected"><?php echo PLUGINS_SELECTED; ?></option>
            <option value="install" ><?php echo PLUGINS_INSTALL;?></option>
            <option value="remove" ><?php echo PLUGINS_REMOVE;?></option>
 
                    </select></form>
                </td>
            </tr>
<?php


}

?>