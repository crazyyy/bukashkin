
		<table border="0" width="100%" cellspacing="0" cellpadding="2">
		<?php
			if ( (@$_GET['action'] == 'new') ) {
				$form_action = 'insert';
				$fInfo = new objectInfo(array());
				$good_carousello_array = array();
				$carousello_query = os_db_query("	select
													p.products_id
												from
													" . TABLE_PRODUCTS . " p,
													" . TABLE_GOODS_CAROUSELLO . " c
												where
													c.good_carousello_id = p.products_id");
				while ($good_carousello = os_db_fetch_array($carousello_query)) {
					$good_carousello_array[] = $good_carousello['products_id'];
				}
			?>
			<form name="new_featured" <?php echo 'action="' . os_href_link(FILENAME_PLUGINS_PAGE, os_get_all_get_params(array('action', 'info', 'fID')) . 'main_page=goods_carousello_page&action=' . $form_action, 'NONSSL') . '"'; ?> method="post"><?php if ($form_action == 'update') echo os_draw_hidden_field('carousello_good_id', $_GET['fID']); ?>
				<tr>
					<td>
						<br />
						<table border="0" cellspacing="0" cellpadding="2">
							<tr>
								<td class="main"><?php echo TEXT_FEATURED_PRODUCT; echo (@$fInfo->products_name) ? "" :  ''; ?>&nbsp;</td>
								<?php echo '<input type="hidden" name="products_up_id" value="' . @$fInfo->products_id . '">'; ?>
								<td class="main"><?php echo (@$fInfo->products_name) ? $fInfo->products_name : os_draw_products_pull_down('products_id', 'style="font-size:10px"', $good_carousello_array); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0" width="100%" cellspacing="0" cellpadding="2">
							<tr>
								<td class="main" align="right" valign="top"><br /><?php echo (($form_action == 'insert') ? '<span class="button"><button type="submit" onClick="this.blur();" value="' . BUTTON_INSERT . '"/>' . BUTTON_INSERT . '</button></span>' : '<span class="button"><button type="submit" onClick="this.blur();" value="' . BUTTON_UPDATE . '"/>' . BUTTON_UPDATE . '</button></span>'). '&nbsp;&nbsp;&nbsp;<a class="button" onClick="this.blur();" href="' . os_href_link(FILENAME_PLUGINS_PAGE, 'main_page=goods_carousello_page&page=' . $_GET['page'] . '&fID=' . @$_GET['fID']) . '"><span>' . BUTTON_CANCEL . '</span></a>'; ?></td>
							</tr>
						</table>
					</td>
				</tr>
			</form>
		<?php } else { ?>
			<tr>
				<td>
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td valign="top">
								<!-- table with goods -->
								<table border="0" width="100%" cellspacing="2" cellpadding="2">
									<tr class="dataTableHeadingRow">
										<td class="dataTableHeadingContent"><?php echo TABLE_HEADING_PRODUCTS_PLUG; ?></td>
										<td class="dataTableHeadingContent" align="right"><?php echo TABLE_HEADING_VISIBILITY_PLUG; ?></td>
										<td class="dataTableHeadingContent" align="right"><?php echo TABLE_HEADING_ACTION_PLUG; ?>&nbsp;</td>
									</tr>
									<?php
										$carousello_query_raw = "	select
																		p.products_id,
																		pd.products_name,
																		p.products_tax_class_id,
																		p.products_price,
																		c.good_carousello_id,
																		c.good_carousello_visibility
																	 from 
																		" . TABLE_PRODUCTS . " p,
																		" . TABLE_GOODS_CAROUSELLO . " c,
																		" . TABLE_PRODUCTS_DESCRIPTION . " pd
																	 where 
																		p.products_id = pd.products_id 
																		and pd.language_id = '" . $_SESSION['languages_id'] . "' 
																		and p.products_id = c.good_carousello_id 
																	 order by 
																		pd.products_name";
										$carousello_split = new splitPageResults($_GET['page'], MAX_DISPLAY_ADMIN_PAGE, $carousello_query_raw, $carousello_query_numrows);
										$carousello_query = os_db_query($carousello_query_raw);
										$color = '';
										while ($carousello = os_db_fetch_array($carousello_query)) {
											if ( ((@!$_GET['fID']) || (@$_GET['fID'] == $carousello['good_carousello_id'])) && (@!$fInfo) ) {
												$products_query = os_db_query("	select
																					products_image
																				from
																					" . TABLE_PRODUCTS . "
																				where
																					products_id = '" . $carousello['products_id'] . "'");
												$products = os_db_fetch_array($products_query);
												$fInfo_array = os_array_merge($carousello, $products);
												$fInfo = new objectInfo($fInfo_array);
											}
											$color = $color == '#f9f9ff' ? '#f0f1ff':'#f9f9ff'; 	  
											if ( (@is_object($fInfo)) && (@$carousello['good_carousello_id'] == @$fInfo->good_carousello_id) ) {
												echo '<tr class="dataTableRowSelected" onmouseover="this.style.cursor=\'hand\'">' . "\n";
											} else {
												echo '<tr onmouseover="this.style.background=\'#e9fff1\';this.style.cursor=\'hand\';" onmouseout="this.style.background=\''.$color.'\';" style="background-color:'.$color.'"  onclick="document.location.href=\'' . os_href_link(FILENAME_PLUGINS_PAGE, 'main_page=goods_carousello_page&page=' . $_GET['page'] . '&fID=' . $carousello['good_carousello_id']) . '\'">' . "\n";
											}
											?>
												<td  class="dataTableContent"><?php echo $carousello['products_name']; ?></td>
												<td  class="dataTableContent" align="center">
													<?php
														if ($carousello['good_carousello_visibility'] == '1') {
															echo os_image(http_path('icons_admin')  . 'icon_status_green.gif', IMAGE_ICON_STATUS_GREEN, 10, 10) . '&nbsp;&nbsp;<a href="' . os_href_link(FILENAME_PLUGINS_PAGE, 'main_page=goods_carousello_page&action=setflag&flag=0&id=' . $carousello['good_carousello_id'], 'NONSSL') . '">' . os_image(http_path('icons_admin') . 'icon_status_red_light.gif', IMAGE_ICON_STATUS_RED_LIGHT, 10, 10) . '</a>';
														} else {
															echo '<a href="' . os_href_link(FILENAME_PLUGINS_PAGE, 'main_page=goods_carousello_page&action=setflag&flag=1&id=' . $carousello['good_carousello_id'], 'NONSSL') . '">' . os_image(http_path('icons_admin') . 'icon_status_green_light.gif', IMAGE_ICON_STATUS_GREEN_LIGHT, 10, 10) . '</a>&nbsp;&nbsp;' . os_image(http_path('icons_admin') . 'icon_status_red.gif', IMAGE_ICON_STATUS_RED, 10, 10);
														}
													?>
												</td>
												<td class="dataTableContent" align="right"><?php if ( (@is_object($fInfo)) && (@$carousello['good_carousello_id'] == @$fInfo->good_carousello_id) ) { echo os_image(http_path('icons_admin') . 'icon_arrow_right.gif', ''); } else { echo '<a href="' . os_href_link(FILENAME_PLUGINS_PAGE, 'main_page=goods_carousello_page&page=' . $_GET['page'] . '&fID=' . $carousello['good_carousello_id']) . '">' . os_image(http_path('icons_admin') . 'icon_info.gif', IMAGE_ICON_INFO) . '</a>'; } ?>&nbsp;</td>
											</tr>
										<?php } ?>
									<tr>
										<td colspan="4">
											<table border="0" width="100%" cellpadding="0"cellspacing="2">
												<tr>
													<td class="smallText" valign="top"><?php echo $carousello_split->display_count($carousello_query_numrows, MAX_DISPLAY_ADMIN_PAGE, $_GET['page'], TEXT_DISPLAY_NUMBER_OF_CAROUSELLO); ?></td>
													<td class="smallText" align="right"><?php echo $carousello_split->display_links($carousello_query_numrows, MAX_DISPLAY_ADMIN_PAGE, MAX_DISPLAY_PAGE_LINKS, $_GET['page']); ?></td>
												</tr>
												<?php if (@!$_GET['action']) { ?>
													<tr>
														<td colspan="2" align="right">
															<?php
																echo '<a class="button" onClick="this.blur();" href="' . os_href_link(FILENAME_PLUGINS_PAGE, 'main_page=goods_carousello_page&page=' . $_GET['page'] . '&action=new') . '"><span>' . BUTTON_NEW_PRODUCTS . '</span></a>';
															?>
														</td>
													</tr>
												<?php } ?>
											</table>
										</td>
									</tr>
								</table>
								<!-- /table with goods -->
							</td>
							<?php
								$heading = array();
								$contents = array();
								
								switch (@$_GET['action']) 
								{
									case 'delete':
										$heading[] = array('text' => '<b>' . TEXT_INFO_HEADING_DELETE_FEATURED . '</b>');
										$contents = array('form' => os_draw_form('featured', FILENAME_PLUGINS_PAGE, 'main_page=goods_carousello_page&page=' . $_GET['page'] . '&fID=' . $fInfo->good_carousello_id . '&action=deleteconfirm'));
										$contents[] = array('text' => TEXT_INFO_DELETE_INTRO);
										$contents[] = array('text' => '<br /><b>' . $fInfo->products_name . '</b>');
										$contents[] = array('align' => 'center', 'text' => '<br /><span class="button"><button type="submit" onClick="this.blur();" value="' . BUTTON_DELETE . '"/>' . BUTTON_DELETE . '</button></span>&nbsp;<a class="button" onClick="this.blur();" href="' . os_href_link(FILENAME_PLUGINS_PAGE, 'main_page=goods_carousello_page&page=' . $_GET['page'] . '&fID=' . $fInfo->good_carousello_id) . '"><span>' . BUTTON_CANCEL . '</span></a>');
										break;
									default:
										if (@is_object($fInfo)) {
											$heading[] = array('text' => '<b>' . $fInfo->products_name . '</b>');
											$contents[] = array('align' => 'center', 'text' => '<a class="button" onClick="this.blur();" href="' . os_href_link(FILENAME_PLUGINS_PAGE, 'main_page=goods_carousello_page&page=' . $_GET['page'] . '&fID=' . $fInfo->good_carousello_id . '&action=delete') . '"><span>' . BUTTON_DELETE . '</span></a>');
										}
									break;
								}
								if ( (os_not_null($heading)) && (os_not_null($contents)) ) {
									echo '            <td class="right_box" valign="top">' . "\n";
									$box = new box;
									echo $box->infoBox($heading, $contents);
									echo '            </td>' . "\n";
								}
		} 
		
		?>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<br>
			<br>
			<br>
			<?php if(@!$_GET['action']) { ?>
				<?php
					$carousello_query = os_db_query("	select
															s.good_carousello_settings_code,
															s.good_carousello_settings_value
														from
															" . TABLE_GOODS_CAROUSELLO_SETTINGS . " s");
					while ($carousello = os_db_fetch_array($carousello_query)) {
						$carousello_settings[$carousello['good_carousello_settings_code']] = intval($carousello['good_carousello_settings_value']);
					}
				?>
				</form>
				<form action="<?php echo os_href_link(FILENAME_PLUGINS_PAGE, 'main_page=goods_carousello_page&action=display'); ?>" method="post">
					<input type="hidden" name="action" value="display">
							<table>
						<tr>
							<td>
								<b>Наскройки отображения</b>
							</td>
						</tr>
						<tr>
							<td>
								<input type="radio" name="display" value="0" <?php if(@$carousello_settings['display'] == 0) { ?>checked<?php } ?>>Не отображать <br>
								<input type="radio" name="display" value="1" <?php if(@$carousello_settings['display'] == 1) { ?>checked<?php } ?>>Из списка <br>
								<input type="radio" name="display" value="2" <?php if(@$carousello_settings['display'] == 2) { ?>checked<?php } ?>>Рекомендованные <br>
								<input type="radio" name="display" value="3" <?php if(@$carousello_settings['display'] == 3) { ?>checked<?php } ?>>Популярные <br>
								<input type="radio" name="display" value="4" <?php if(@$carousello_settings['display'] == 4) { ?>checked<?php } ?>>Новинки <br>
							</td>
						</tr>
						<tr>
							<td>
								<b>Выводить элементов не из списка в карусели</b>
								<input type="text" name="display_count" value="<?php print (isset($carousello_settings['display_count']) ? (intval($carousello_settings['display_count'])) : 10); ?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Автопрокрутка</b>
								<input type="checkbox" name="autoscroll" value="1" <?php if(isset($carousello_settings['autoscroll']) && $carousello_settings['autoscroll'] == 1) {?>checked<?php } ?>>
								<br>
								<b>Интервал автопрокрутки</b>
								<input type="text" name="autoscroll_delay" value="<?php print (isset($carousello_settings['autoscroll_delay']) ? (intval($carousello_settings['autoscroll_delay'])) : 3000); ?>">
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" value="Сохранить">
							</td>
						</tr>
					</table>
				</form>
			<?php } ?>
