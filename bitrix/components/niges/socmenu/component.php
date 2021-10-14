
<? ob_start(); ?>

<style>
.bxcompprop-items-block  div:nth-child(1),
.bxcompprop-content-table tr:nth-child(1), 
.bxcompprop-content-table tr:nth-child(2) {
	display:none !important
}
.bxcompprop-content-table tr:last-child {
	display:none !important
}



.bxcompprop-content-table tr:nth-child(6), 
.bxcompprop-content-table tr:nth-child(10), 
.bxcompprop-content-table tr:nth-child(14), 
.bxcompprop-content-table tr:nth-child(18), 
.bxcompprop-content-table tr:nth-child(22), 
.bxcompprop-content-table tr:nth-child(26), 
.bxcompprop-content-table tr:nth-child(30), 
.bxcompprop-content-table tr:nth-child(34), 
.bxcompprop-content-table tr:nth-child(38),
.bxcompprop-content-table tr:nth-child(42)
{ display:none !important }
.bxcompprop-content-table tr:nth-child(7), 
.bxcompprop-content-table tr:nth-child(11), 
.bxcompprop-content-table tr:nth-child(15),
.bxcompprop-content-table tr:nth-child(19), 
.bxcompprop-content-table tr:nth-child(23), 
.bxcompprop-content-table tr:nth-child(27), 
.bxcompprop-content-table tr:nth-child(31), 
.bxcompprop-content-table tr:nth-child(35), 
.bxcompprop-content-table tr:nth-child(39) 
{ border-bottom:1px solid #d6d6d6; }



.bxcompprop-content-table tr:nth-child(4) td, .bxcompprop-content-table tr:nth-child(5) td, .bxcompprop-content-table tr:nth-child(6) td, 
.bxcompprop-content-table tr:nth-child(8) td, .bxcompprop-content-table tr:nth-child(9) td, .bxcompprop-content-table tr:nth-child(10) td, 
.bxcompprop-content-table tr:nth-child(12) td, .bxcompprop-content-table tr:nth-child(13) td, .bxcompprop-content-table tr:nth-child(14) td, 
.bxcompprop-content-table tr:nth-child(16) td, .bxcompprop-content-table tr:nth-child(17) td, .bxcompprop-content-table tr:nth-child(18) td, 
.bxcompprop-content-table tr:nth-child(20) td, .bxcompprop-content-table tr:nth-child(21) td, .bxcompprop-content-table tr:nth-child(22) td, 
.bxcompprop-content-table tr:nth-child(24) td, .bxcompprop-content-table tr:nth-child(25) td, .bxcompprop-content-table tr:nth-child(26) td, 
.bxcompprop-content-table tr:nth-child(28) td, .bxcompprop-content-table tr:nth-child(29) td, .bxcompprop-content-table tr:nth-child(30) td, 
.bxcompprop-content-table tr:nth-child(32) td, .bxcompprop-content-table tr:nth-child(33) td, .bxcompprop-content-table tr:nth-child(34) td, 
.bxcompprop-content-table tr:nth-child(36) td, .bxcompprop-content-table tr:nth-child(37) td, .bxcompprop-content-table tr:nth-child(38) td, 
.bxcompprop-content-table tr:nth-child(40) td, .bxcompprop-content-table tr:nth-child(41) td, .bxcompprop-content-table tr:nth-child(42) td 
{ padding-bottom: 2px !important; }

.bxcompprop-content-table tr:nth-child(5) td, .bxcompprop-content-table tr:nth-child(6) td, .bxcompprop-content-table tr:nth-child(7) td,  
.bxcompprop-content-table tr:nth-child(9) td, .bxcompprop-content-table tr:nth-child(10) td, .bxcompprop-content-table tr:nth-child(11) td, 
.bxcompprop-content-table tr:nth-child(13) td, .bxcompprop-content-table tr:nth-child(14) td, .bxcompprop-content-table tr:nth-child(15) td, 
.bxcompprop-content-table tr:nth-child(17) td, .bxcompprop-content-table tr:nth-child(18) td, .bxcompprop-content-table tr:nth-child(19) td, 
.bxcompprop-content-table tr:nth-child(21) td, .bxcompprop-content-table tr:nth-child(22) td, .bxcompprop-content-table tr:nth-child(23) td, 
.bxcompprop-content-table tr:nth-child(25) td, .bxcompprop-content-table tr:nth-child(26) td, .bxcompprop-content-table tr:nth-child(27) td, 
.bxcompprop-content-table tr:nth-child(29) td, .bxcompprop-content-table tr:nth-child(30) td, .bxcompprop-content-table tr:nth-child(31) td, 
.bxcompprop-content-table tr:nth-child(33) td, .bxcompprop-content-table tr:nth-child(34) td, .bxcompprop-content-table tr:nth-child(35) td, 
.bxcompprop-content-table tr:nth-child(37) td, .bxcompprop-content-table tr:nth-child(38) td, .bxcompprop-content-table tr:nth-child(39) td, 
.bxcompprop-content-table tr:nth-child(41) td, .bxcompprop-content-table tr:nth-child(42) td, .bxcompprop-content-table tr:nth-child(43) td 
{ padding-top: 2px !important; }



/**/

.bxcompprop-content-table tr:nth-child(51),
.bxcompprop-content-table tr:nth-child(57), 
.bxcompprop-content-table tr:nth-child(60), 
.bxcompprop-content-table tr:nth-child(62), 
.bxcompprop-content-table tr:nth-child(71), 
.bxcompprop-content-table tr:nth-child(71), 
.bxcompprop-content-table tr:nth-child(80), 
.bxcompprop-content-table tr:nth-child(84) 
{ border-top:1px solid #d6d6d6; }

</style>


<?
$css = preg_replace("/\s+/", " ", ob_get_contents());
ob_end_clean();
echo $css;
?>


<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

$moduleCode = 'socmenu';
$defaultSize = 54;
$arResult = array();


	$arParamsDefault = array(
		'INCID' => '', 
		'IDYAM' => '', 
		'TELNO' => '',
		'TELNOICON' => '',
		'TELNOMOBONLY' => '',
		'POSITION' => 'left',
		'TOPTYPE' => 'top',
		'TOP' => 15,	
		'TOPMEASURE' => '',
		'TOPTYPE_MOBILE' => '',
		'TOP_MOBILE' => '',	
		'TOPMEASURE_MOBILE' => '',
		'FIXED' => 'N',
		'ZINDEX' => 999,	
		'NOINDEX' => 'N',	
		'TARGET' => 'N',	
		'HIDE_MOBILE' => 'N',	
		'HIDE_PC' => 'N',	
		'SETSTYLE' => 'native',
		'BTNBG' => '#68BEC1',
		'BTNBG_HOVER' => '#44D3FF',
		'BTNCOLOR' => '#FFFFFF',
		'BTNCOLOR_HOVER' => '#EFFBFF',
		'ANIMATION' => 'none',
		'FONT' => 21,
		'FONT_MOBILE' => 21,
		'SIZE' => 46,
		'SIZE_MOBILE' => 46,
		'RADIUS' => 6,
		'RADIUS_MOBILE' => 6,
		'BTNBORDER' => 0,
		'BTNBORDERCOLOR' => '#938D8D',
		'BTNBORDERCOLOR_HOVER' => '#8B98A8',
		'VMARGIN' => 5,
		'HMARGIN' => 2,
		'VMARGIN_MOBILE' => '',
		'HMARGIN_MOBILE' => '',
		'MARGIN' => 0,

		'BTNOPACITY' => 100,
		'BTNOPACITY_HOVER' => 100,

		'BTNSHADOW' => "Y",
		'BTNSHADOWCOLOR' => "#A8A8A8",
		'BTNSHADOWCOLOR_HOVER' => "#C6BABA",
		'BTNSHADOWSIZE' => 4,
		'BTNSHADOWSIZE_HOVER' => 13,
		'BTNSHADOWVOFFSET' => 3,
		'BTNSHADOWVOFFSET_HOVER' => 7,
		'BTNSHADOWHOFFSET' => 0,
		'BTNSHADOWHOFFSET_HOVER' => 0,

		'BTNTRANSITION' => 'ease',
		'BTNTRANSITION_TIME' => '300',
	);



	foreach ($arParamsDefault as $code => $dValue) {
		if(empty($arParams[$code]))
			$arParams[$code] = $dValue;
	}

	for ($ibtn = 0; $ibtn <= 20; $ibtn++) {

		$arParamsBTN_NAME = explode(".", $arParams['BTN_TYPE_'.$ibtn]);
		$arParamsBTN_CSS_ICON = explode(".", $arParams['BTN_TYPE_'.$ibtn]);

		if($arParams['BTN_SRC_'.$ibtn] != "")
			$arResult["ITEMS"][] = [
				"NAME" => $arParams['BTN_TYPE_'.$ibtn], 
				"LINK" => $arParams['BTN_SRC_'.$ibtn],		
				"SORT" => "500", 
				"DISPLAY" => $arParams['BTN_DISPLAY_'.$ibtn],
				"CSS_ICON" => $arParamsBTN_CSS_ICON["0"]  
			]; 
	}

	foreach ($arParams as $code => $dValue) {
		$arResult[$code] = COption::GetOptionString("niges.".$moduleCode, $code, $dValue, SITE_ID);
	}





	if(empty($arResult["ITEMS"]["0"])){


		require $_SERVER['DOCUMENT_ROOT'].'/bitrix/components/niges/socmenu/templates/.default/.socmenulist.php';
		$arSocNet = $arPosition + $arPositionOther;
		unset($arSocNet['SIZE']);


		$arSocNetMore = [];
		$arDisplayMoreBtnsType = @unserialize(COption::GetOptionString("niges.socmenu", "MORE_TYPE_ICO", false, SITE_ID));
		$arDisplayMoreBtnsLink = @unserialize(COption::GetOptionString("niges.socmenu", "MORE_LINK_ICO", false, SITE_ID));
		$arDisplayMoreBtnsSort = @unserialize(COption::GetOptionString("niges.socmenu", "MORE_SORT_ICO", false, SITE_ID));
		$arDisplayMoreBtnsDisplay = @unserialize(COption::GetOptionString("niges.socmenu", "MORE_DISPLAY_ICO", false, SITE_ID));
		if(isset($arDisplayMoreBtnsLink) && is_array($arDisplayMoreBtnsLink)) 
		foreach ($arDisplayMoreBtnsLink as $key => $arItemLink) {
			$arSocNetMore[$key]['TYPE'] = $arDisplayMoreBtnsType[$key];
			$arSocNetMore[$key]['LINK'] = $arItemLink;
			$arSocNetMore[$key]['SORT'] = $arDisplayMoreBtnsSort[$key];
			$arSocNetMore[$key]['DISPLAY'] = $arDisplayMoreBtnsDisplay[$key];
		}


		$arSort = @unserialize(COption::GetOptionString("niges.socmenu", "SORT_ICO", false, SITE_ID));
		$arDisplayBtns = @unserialize(COption::GetOptionString("niges.socmenu", "DISPLAY_ICO", false, SITE_ID));
		foreach ($arSocNet as $name => $arItem) {
			$arSocNet[$name]['SORT'] = $arSort[$name]; 
			$arSocNet[$name]['DISPLAY'] = $arDisplayBtns[$name]; 
		}

		if (!function_exists('socSort')) {
			function socSort($a, $b) {
				if ($a['SORT'] == $b['SORT']) {
					return 0;
				}
				return ($a['SORT'] < $b['SORT']) ? -1 : 1;
			}
		}

		$arSocNet = $arSocNet + $arSocNetMore;

		uasort($arSocNet, "socSort");

		foreach ($arSocNet as $name => $pos) {

			if( !empty($pos['TYPE']) ) {
				$name = $pos['TYPE'];
				$link = $pos['LINK']; 
			}else{
				$link = COption::GetOptionString("niges.socmenu", $name, false, SITE_ID);
			}

			if ( !empty($link) ) {
				$arResult['ITEMS'][] = array(
					'NAME' => $name,
					'LINK' => $link,
					'SORT' => $pos['SORT'],
					'DISPLAY' => $pos['DISPLAY'],
				);
			}

		}

		$arPositionFull = $arPosition + $arPositionOther;

		if ($arPositionFull && $arResult['ITEMS'][0]) {
			foreach ($arResult['ITEMS'] as $i => $arItem) {
				$arResult['ITEMS'][$i]['CSS_ICON'] = $arPositionFull[$arItem['NAME']][2];
			}
		}

	}else{
		
		foreach ($arParams as $code => $dValue) {
			$arResult[$code] = $dValue;
		}

	}



$this->IncludeComponentTemplate();
?>
