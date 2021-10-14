<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

$defaultSize = 46;
$arResult = array();

$arParams = array(
	'THEMES' => 'color',
	'RADIUS' => 0,
	'ZINDEX' => 0,
	'POSITION' => 'right',
	'ANIMATION' => 'color',
	'TOP' => 0,
	'HIDE_MOBILE' => 'N',
	'MARGIN' => 0,
	'FIXED' => 'N',
	'NOINDEX' => 'N',
	'SIZE' => 46,
	'SIZE_MOBILE' => 46
);

foreach ($arParams as $code => $dValue) {
	$arResult[$code] = COption::GetOptionString("abudagov.socnetlink", $code, $dValue, SITE_ID);
}

require $_SERVER['DOCUMENT_ROOT'].'/bitrix/components/abudagov/socnetlink/templates/.default/themes/'.$arResult['THEMES'].'/.position.php';
$arSocNet = $arPosition;
unset($arSocNet['SIZE']);

$arSort = @unserialize(COption::GetOptionString("abudagov.socnetlink", "SORT_ICO", false, SITE_ID));
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

foreach ($arSocNet as $name => $pos) {
	if ($link = COption::GetOptionString("abudagov.socnetlink", $name, false, SITE_ID)) {
		$arResult['ITEMS'][] = array(
			'NAME' => $name,
			'LINK' => $link,
			'SORT' => $pos['SORT'],
		);
	}
}

if ($arPosition && $arResult['ITEMS'][0]) {
	foreach ($arResult['ITEMS'] as $i => $arItem) {

		$arResult['ITEMS'][$i]['BG_POS'] =
			'-'.$arPosition[$arItem['NAME']][0]*($arPosition['SIZE']/$defaultSize*$arResult['SIZE']).'px'
			.' -'.$arPosition[$arItem['NAME']][1]*($arPosition['SIZE']/$defaultSize*$arResult['SIZE']).'px';

		$arResult['ITEMS'][$i]['BG_POS_MOBILE'] =
			'-'.$arPosition[$arItem['NAME']][0]*($arPosition['SIZE']/$defaultSize*$arResult['SIZE_MOBILE']).'px'
			.' -'.$arPosition[$arItem['NAME']][1]*($arPosition['SIZE']/$defaultSize*$arResult['SIZE_MOBILE']).'px';

	}
}

$this->IncludeComponentTemplate();
?>