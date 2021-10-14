<?php 

IncludeModuleLangFile(__FILE__);
if (!$USER->IsAdmin()) {
	$APPLICATION->AuthForm(GetMessage("ACCESS_DENIED"));
}

$APPLICATION->SetTitle(GetMessage("BT_SALE_DISCOUNT_LIST_MESS_TITLE"));

require ($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_admin_after.php");

if (file_exists($_SERVER['DOCUMENT_ROOT'].'/bitrix/components/abudagov/socnetlink/templates/.default/themes/color/.position.php')) :
	$arThemes = scandir($_SERVER['DOCUMENT_ROOT'].'/bitrix/components/abudagov/socnetlink/templates/.default/themes/');
	unset($arThemes[0], $arThemes[1]);
	require $_SERVER['DOCUMENT_ROOT'].'/bitrix/components/abudagov/socnetlink/templates/.default/themes/color/.position.php';
	$arSocNet = $arPosition;
	$size = $arSocNet['SIZE'];
	unset($arSocNet['SIZE']);

	$l = CLang::GetList($by = "sort", $order = "asc");
	while($l_arr = $l->Fetch()) {
		$arSites[$l_arr['LID']] = $l_arr;
	}

	if (count($arSites) == 1) {
		foreach ($arSites as $id => $arSite) {
			$_REQUEST["SITE_ID"] = $arSite["LID"];
		}
	}

	if (isset($_REQUEST["SITE_ID"])) {
		$siteId = htmlspecialcharsbx($_REQUEST["SITE_ID"]);
		if ($_REQUEST['set_socnetlink_props']) {
			if (isset($_REQUEST["ACTIVE"])) {
				COption::SetOptionString("abudagov.socnetlink","ACTIVE",htmlspecialcharsbx($_REQUEST["ACTIVE"]),false,$siteId);
			} else {
				COption::SetOptionString("abudagov.socnetlink","ACTIVE",'N',false,$siteId);
			}
			if (isset($_REQUEST["SNL_PROP"])) {
				foreach ($_REQUEST["SNL_PROP"] as $name => $value) {
					COption::SetOptionString("abudagov.socnetlink",htmlspecialcharsbx($name),htmlspecialcharsbx($value),false,$siteId);
				}
			}
			if (!isset($_REQUEST["SNL_PROP"]["HIDE_MOBILE"])) {
				COption::SetOptionString("abudagov.socnetlink",'HIDE_MOBILE','N',false,$siteId);
			}
			if (!isset($_REQUEST["SNL_PROP"]["FIXED"])) {
				COption::SetOptionString("abudagov.socnetlink",'FIXED','N',false,$siteId);
			}
            if (!isset($_REQUEST["SNL_PROP"]["NOINDEX"])) {
                COption::SetOptionString("abudagov.socnetlink",'NOINDEX','N',false,$siteId);
            }
			if (isset($_REQUEST["SNL_SOCNET"])) {
				foreach ($_REQUEST["SNL_SOCNET"] as $name => $value) {
					COption::SetOptionString("abudagov.socnetlink",htmlspecialcharsbx($name),htmlspecialcharsbx($value),false,$siteId);
				}
			}
			if (isset($_REQUEST["SNL_SOCNET_SORT"])) {
				COption::SetOptionString("abudagov.socnetlink",'SORT_ICO',serialize($_REQUEST["SNL_SOCNET_SORT"]),false,$siteId);
			}
		}

		$arSort = @unserialize(COption::GetOptionString("abudagov.socnetlink", "SORT_ICO", false, $siteId));
		foreach ($arSocNet as $name => $arItem) {
			$arSocNet[$name]['SORT'] = $arSort[$name];
		}

		if (!function_exists('socSort')) {
			function socSort($a, $b) {
			    if ($a['SORT'] == $b['SORT']) {
			        return 0;
			    }
			    return ($a['SORT'] < $b['SORT']) ? -1 : 1;
			}
		}

		uasort($arSocNet, "socSort");
	}


	?>
	<div class="adm-detail-content-wrap">
		<form method="post" action="">
			<div class="adm-detail-content" id="edit1">
				<div class="adm-detail-title"><?php echo GetMessage('Nastrojka_resheniya')?></div>
				<div class="adm-detail-content-item-block">
					<table class="adm-detail-content-table edit-table" id="edit1_edit_table">
						<tbody>
							<?php if (!isset($siteId)) :?>
								<tr>
									<td width="50%" class="adm-detail-content-cell-l">
										<?php echo GetMessage('Vyberite_sajt')?>
									</td>
									<td width="50%" class="adm-detail-content-cell-r">
										<select name="SITE_ID">
											<?php foreach ($arSites as $lid => $arVal) :?>
												<option
													value="<?php echo $arVal["LID"]?>"
													<?php if ($siteId == $arVal["LID"]) :?> selected <?php endif;?>
												>
													[<?php echo $arVal["LID"]?>] <?php echo $arVal["NAME"];?>
												</option>
											<?php endforeach;?>
										</select>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="adm-info-message-wrap">
											<div class="adm-info-message">
												<?php echo GetMessage('najmite_sohranit')?>
											</div>
										</div>
									</td>
								</tr>
							<?php else:?>
								<tr>
									<td width="50%" class="adm-detail-content-cell-l">
										<?php echo GetMessage('Sajt')?>
									</td>
									<td width="50%" class="adm-detail-content-cell-r">
										<input type="hidden" name="SITE_ID" value="<?php echo htmlspecialcharsbx($_REQUEST["SITE_ID"])?>">
										<b>[<?php echo $siteId?>] <?php echo $arSites[$_REQUEST["SITE_ID"]]['NAME']?></b>
									</td>
								</tr>
								<tr>
									<td width="50%" class="adm-detail-content-cell-l">
										<?php echo GetMessage('Aktivnost')?>
									</td>
									<td width="50%" class="adm-detail-content-cell-r">
										<input type="checkbox" name="ACTIVE" value="Y" <?php if (COption::GetOptionString("abudagov.socnetlink", "ACTIVE", false, $siteId) == 'Y'):?>checked<?php endif;?>>
									</td>
								</tr>
								<tr class="heading">
									<td colspan="2"><?php echo GetMessage('Nastrojki_vneshnego_vida')?></td>
								</tr>
								<tr>
									<td width="50%" class="adm-detail-content-cell-l">
										<?php echo GetMessage('Tema')?>
									</td>
									<td width="50%" class="adm-detail-content-cell-r">
										<?php foreach ($arThemes as $i => $theme) :?>
											<label>
												<input type="radio" value="<?php echo $theme?>" name="SNL_PROP[THEMES]" <?php if (COption::GetOptionString("abudagov.socnetlink", "THEMES", false, $siteId) == $theme) :?>checked<?php endif;?>>
												<img style="width: 100px; height: auto; border: 1px solid #333;" src="/bitrix/components/abudagov/socnetlink/templates/.default/themes/<?php echo $theme?>/icons.png?102018" alt="">
											</label>
										<?php endforeach;?>
									</td>
								</tr>
								<tr>
									<td width="50%" class="adm-detail-content-cell-l">
										<?php echo GetMessage('razmer')?>
									</td>
									<td width="50%" class="adm-detail-content-cell-r">
										<input type="number" max="64" min="1" value="<?php echo COption::GetOptionString("abudagov.socnetlink", "SIZE", 46, $siteId)?>" name="SNL_PROP[SIZE]" >
									</td>
								</tr>
                                <tr>
                                    <td width="50%" class="adm-detail-content-cell-l">
										<?php echo GetMessage('razmer-mobile')?>
                                    </td>
                                    <td width="50%" class="adm-detail-content-cell-r">
                                        <input type="number" max="64" min="1" value="<?php echo COption::GetOptionString("abudagov.socnetlink", "SIZE_MOBILE", 46, $siteId)?>" name="SNL_PROP[SIZE_MOBILE]" >
                                    </td>
                                </tr>
								<tr>
									<td width="50%" class="adm-detail-content-cell-l">
										<?php echo GetMessage('Skruglenie_kraev')?>
									</td>
									<td width="50%" class="adm-detail-content-cell-r">
										<input type="number" max="999" min="0" value="<?php echo COption::GetOptionString("abudagov.socnetlink", "RADIUS", 10, $siteId)?>" name="SNL_PROP[RADIUS]" >
									</td>
								</tr>
								<tr>
									<td width="50%" class="adm-detail-content-cell-l">
										<?php echo GetMessage('z_index')?>
									</td>
									<td width="50%" class="adm-detail-content-cell-r">
										<input type="number" max="99999" min="0" value="<?php echo COption::GetOptionString("abudagov.socnetlink", "ZINDEX", 101, $siteId)?>" name="SNL_PROP[ZINDEX]" >
									</td>
								</tr>
								<tr>
									<td width="50%" class="adm-detail-content-cell-l">
										<?php echo GetMessage('Poziciya')?>
									</td>
									<td width="50%" class="adm-detail-content-cell-r">
										<label>
											<input type="radio" value="left" name="SNL_PROP[POSITION]" <?php echo (COption::GetOptionString("abudagov.socnetlink", "POSITION", false, $siteId) == 'left') ? 'checked': ''; ?>> <?php echo GetMessage('sleva')?>
										</label>
										<label>
											<input type="radio" value="right" name="SNL_PROP[POSITION]" <?php echo (COption::GetOptionString("abudagov.socnetlink", "POSITION", false, $siteId) == 'right') ? 'checked': ''; ?>> <?php echo GetMessage('sprava')?>
										</label>
										<label>
											<input type="radio" value="indiv" name="SNL_PROP[POSITION]" <?php echo (COption::GetOptionString("abudagov.socnetlink", "POSITION", false, $siteId) == 'indiv') ? 'checked': ''; ?>> <?php echo htmlspecialcharsbx(GetMessage('indiv'))?>
										</label>
									</td>
								</tr>
								<tr>
									<td width="50%" class="adm-detail-content-cell-l">
										<?php echo GetMessage('Animaciya')?>
									</td>
									<td width="50%" class="adm-detail-content-cell-r">
										<select name="SNL_PROP[ANIMATION]">
											<option value="none" <?php echo (COption::GetOptionString("abudagov.socnetlink", "ANIMATION", false, $siteId) == 'none') ? 'selected': ''; ?>><?php echo GetMessage('Bez_animacii')?></option>
											<option value="twitch" <?php echo (COption::GetOptionString("abudagov.socnetlink", "ANIMATION", false, $siteId) == 'twitch') ? 'selected': ''; ?>><?php echo GetMessage('Podergivanie')?></option>
											<option value="rotate" <?php echo (COption::GetOptionString("abudagov.socnetlink", "ANIMATION", false, $siteId) == 'rotate') ? 'selected': ''; ?>><?php echo GetMessage('Povorot')?></option>
											<option value="shift" <?php echo (COption::GetOptionString("abudagov.socnetlink", "ANIMATION", false, $siteId) == 'shift') ? 'selected': ''; ?>><?php echo GetMessage('Sdvig')?></option>
										</select>
									</td>
								</tr>
								<tr>
									<td width="50%" class="adm-detail-content-cell-l">
										<?php echo GetMessage('Otstup_sverxu')?>
									</td>
									<td width="50%" class="adm-detail-content-cell-r">
										<input type="number" max="100" min="0" value="<?php echo COption::GetOptionString("abudagov.socnetlink", "TOP", 20, $siteId)?>" name="SNL_PROP[TOP]" >
									</td>
								</tr>
								<tr>
									<td width="50%" class="adm-detail-content-cell-l">
										<?php echo GetMessage('Otstup_ikonok')?>
									</td>
									<td width="50%" class="adm-detail-content-cell-r">
										<input type="number" min="0" value="<?php echo COption::GetOptionString("abudagov.socnetlink", "MARGIN", 10, $siteId)?>" name="SNL_PROP[MARGIN]" >
									</td>
								</tr>
								<tr>
									<td width="50%" class="adm-detail-content-cell-l">
										<?php echo GetMessage('Skryvat_na_mobilnyx_ustrojstvax')?>
									</td>
									<td width="50%" class="adm-detail-content-cell-r">
										<input type="checkbox" name="SNL_PROP[HIDE_MOBILE]" value="Y" <?php if (COption::GetOptionString("abudagov.socnetlink", "HIDE_MOBILE", false, $siteId) != 'N'):?>checked<?php endif;?>>
									</td>
								</tr>
								<tr>
									<td width="50%" class="adm-detail-content-cell-l">
										<?php echo GetMessage('Zakrepit_polozhenie')?>
									</td>
									<td width="50%" class="adm-detail-content-cell-r">
										<input type="checkbox" name="SNL_PROP[FIXED]" value="Y" <?php if (COption::GetOptionString("abudagov.socnetlink", "FIXED", false, $siteId) != 'N'):?>checked<?php endif;?>>
									</td>
								</tr>
                                <tr>
                                    <td width="50%" class="adm-detail-content-cell-l">
                                        <?php echo GetMessage('noindex-nofollow')?>
                                    </td>
                                    <td width="50%" class="adm-detail-content-cell-r">
                                        <input type="checkbox" name="SNL_PROP[NOINDEX]" value="Y" <?php if (COption::GetOptionString("abudagov.socnetlink", "NOINDEX", false, $siteId) == 'Y'):?>checked<?php endif;?>>
                                    </td>
                                </tr>
								<tr class="heading">
									<td colspan="2"><?php echo GetMessage('Ssylki_socialnye_seti')?></td>
								</tr>
								<?php foreach ($arSocNet as $name => $pos) :?>
									<?php if (!$name) {continue;}?>
									<tr>
										<td width="50%" class="adm-detail-content-cell-l">
											<label for="<?php echo $name?>">
												<span style="position: relative; top: -6px;"><?php echo $name?>:</span>
												<div style="display: inline-block; background: url('/bitrix/components/abudagov/socnetlink/templates/.default/themes/color/icons.png?102018') -<?php echo $pos[0]*$size/2?>px -<?php echo $pos[1]*$size/2?>px; width: <?php echo $size/2?>px; height: <?php echo $size/2?>px; background-size: 115px 253px;"></div>
											</label>
										</td>
										<td width="50%" class="adm-detail-content-cell-r">
											<input type="text" maxlength="2000" name="SNL_SOCNET[<?php echo $name?>]" id="<?php echo $name?>" placeholder="http://..." value="<?php echo COption::GetOptionString("abudagov.socnetlink", $name, false, $siteId)?>">
											<input type="text" maxlength="10" style="width: 50px;" name="SNL_SOCNET_SORT[<?php echo $name?>]" id="<?php echo $name?>" placeholder="sort" value="<?php echo ($pos['SORT']) ? $pos['SORT'] : '500'?>">
										</td>
									</tr>
								<?php endforeach;?>
							<?php endif;?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="adm-detail-content-btns">
				<?php if (isset($siteId)) :?>
					<input class="adm-btn-save" type="submit" name="set_socnetlink_props" value="<?php echo GetMessage('Soxranit')?>">
					<input type="button" value="<?php echo GetMessage('Otmenit')?>" name="cancel" onclick="window.location='abudagov.socnetlink_setting.php?lang=ru'" title="<?php echo GetMessage('Ne_soxranyat_i_vernutsya')?>">
				<?php else:?>
					<input class="adm-btn-save" type="submit" name="set_site" value="<?php echo GetMessage('Vibrat');?>">
				<?php endif;?>
			</div>
		</form>
	</div>
<?php else:?>
	<p><?php echo GetMessage('Oshibkaustanovkimodulya')?></p>
<?php endif;?>