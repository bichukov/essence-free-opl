
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>







<?



 


if(isset($arCurrentValues['SETSTYLE']) && $arCurrentValues['SETSTYLE'] == 'custom')	$customStyleHidden = 'N'; 
else	$customStyleHidden = 'Y'; 
	
if(isset($arCurrentValues['BTNSHADOW']) && $arCurrentValues['BTNSHADOW'] == 'Y')	$btnShadowHidden = 'N'; 
else	$btnShadowHidden = 'Y'; 

if(isset($arCurrentValues['YANDEX_METRIKA_ID_MODE']) && $arCurrentValues['YANDEX_METRIKA_ID_MODE'] == 'Y')	$metrikaIdHidden = 'N'; 
else	$metrikaIdHidden = 'Y'; 
 


require $_SERVER['DOCUMENT_ROOT'].'/bitrix/components/niges/socmenu/templates/.default/.socmenulist.php';
$arSocNet = $arPosition + $arPositionOther;
unset($arSocNet['SIZE']);

$arProperty_UF = [];

foreach ($arSocNet as $key => $value) { 
	$arProperty_UF[$key] = GetMessage('Ssylki_btn_type_'.$key ); 
}

?>
 




<?

$arComponentParameters = array(
	'GROUPS' => array(

		'SRC_SETTINGS' => array(
			'NAME' => GetMessage('Nastrojki_spiska'),
			"SORT" => 10
		),		
		"DESIGN_SETTINGS" => array(
			"NAME" => GetMessage("Nastrojki_vneshnego_vida"),
			"SORT" => 1000
		),
		"URL_SETTINGS" => array(
			"NAME" => GetMessage("Dop_nastrojki"),
			"SORT" => 5000
		),

	),
	'PARAMETERS' => array(   



		'BTN_TYPE_1' => array( "NAME" => GetMessage('Ikonka_logo'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N', 'VALUES' => $arProperty_UF, ),
		"BTN_SRC_1" => array( "NAME" => GetMessage('Ssylka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "" ),
		"BTN_SORT_1" => array( "NAME" => GetMessage('Sortirovka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "500" ),
		'BTN_DISPLAY_1' => array( "NAME" => GetMessage('Otobrazhenie'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N',			'VALUES' => array( ''  => GetMessage("Ssylki_pokazyvat_vezde"), 'pc'  => GetMessage("Ssylki_pokazyvat_tolko_na_pc"), 'mob'  => GetMessage('Ssylki_pokazyvat_tolko_na_mob')	)		),

		'BTN_TYPE_2' => array( "NAME" => GetMessage('Ikonka_logo'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N', 'VALUES' => $arProperty_UF, ),
		"BTN_SRC_2" => array( "NAME" => GetMessage('Ssylka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "" ),
		"BTN_SORT_2" => array( "NAME" => GetMessage('Sortirovka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "500" ),
		'BTN_DISPLAY_2' => array( "NAME" => GetMessage('Otobrazhenie'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N',			'VALUES' => array( ''  => GetMessage("Ssylki_pokazyvat_vezde"), 'pc'  => GetMessage("Ssylki_pokazyvat_tolko_na_pc"), 'mob'  => GetMessage('Ssylki_pokazyvat_tolko_na_mob')	)		),

		'BTN_TYPE_3' => array( "NAME" => GetMessage('Ikonka_logo'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N', 'VALUES' => $arProperty_UF, ),
		"BTN_SRC_3" => array( "NAME" => GetMessage('Ssylka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "" ),
		"BTN_SORT_3" => array( "NAME" => GetMessage('Sortirovka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "500" ),
		'BTN_DISPLAY_3' => array( "NAME" => GetMessage('Otobrazhenie'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N',			'VALUES' => array( ''  => GetMessage("Ssylki_pokazyvat_vezde"), 'pc'  => GetMessage("Ssylki_pokazyvat_tolko_na_pc"), 'mob'  => GetMessage('Ssylki_pokazyvat_tolko_na_mob')	)		),

		'BTN_TYPE_4' => array( "NAME" => GetMessage('Ikonka_logo'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N', 'VALUES' => $arProperty_UF, ),
		"BTN_SRC_4" => array( "NAME" => GetMessage('Ssylka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "" ),
		"BTN_SORT_4" => array( "NAME" => GetMessage('Sortirovka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "500" ),
		'BTN_DISPLAY_4' => array( "NAME" => GetMessage('Otobrazhenie'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N',			'VALUES' => array( ''  => GetMessage("Ssylki_pokazyvat_vezde"), 'pc'  => GetMessage("Ssylki_pokazyvat_tolko_na_pc"), 'mob'  => GetMessage('Ssylki_pokazyvat_tolko_na_mob')	)		),

		'BTN_TYPE_5' => array( "NAME" => GetMessage('Ikonka_logo'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N', 'VALUES' => $arProperty_UF, ),
		"BTN_SRC_5" => array( "NAME" => GetMessage('Ssylka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "" ),
		"BTN_SORT_5" => array( "NAME" => GetMessage('Sortirovka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "500" ),
		'BTN_DISPLAY_5' => array( "NAME" => GetMessage('Otobrazhenie'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N',			'VALUES' => array( ''  => GetMessage("Ssylki_pokazyvat_vezde"), 'pc'  => GetMessage("Ssylki_pokazyvat_tolko_na_pc"), 'mob'  => GetMessage('Ssylki_pokazyvat_tolko_na_mob')	)		),

		'BTN_TYPE_6' => array( "NAME" => GetMessage('Ikonka_logo'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N', 'VALUES' => $arProperty_UF, ),
		"BTN_SRC_6" => array( "NAME" => GetMessage('Ssylka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "" ),
		"BTN_SORT_6" => array( "NAME" => GetMessage('Sortirovka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "500" ),
		'BTN_DISPLAY_6' => array( "NAME" => GetMessage('Otobrazhenie'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N',			'VALUES' => array( ''  => GetMessage("Ssylki_pokazyvat_vezde"), 'pc'  => GetMessage("Ssylki_pokazyvat_tolko_na_pc"), 'mob'  => GetMessage('Ssylki_pokazyvat_tolko_na_mob')	)		),

		'BTN_TYPE_7' => array( "NAME" => GetMessage('Ikonka_logo'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N', 'VALUES' => $arProperty_UF, ),
		"BTN_SRC_7" => array( "NAME" => GetMessage('Ssylka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "" ),
		"BTN_SORT_7" => array( "NAME" => GetMessage('Sortirovka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "500" ),
		'BTN_DISPLAY_7' => array( "NAME" => GetMessage('Otobrazhenie'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N',			'VALUES' => array( ''  => GetMessage("Ssylki_pokazyvat_vezde"), 'pc'  => GetMessage("Ssylki_pokazyvat_tolko_na_pc"), 'mob'  => GetMessage('Ssylki_pokazyvat_tolko_na_mob')	)	 ),

		'BTN_TYPE_8' => array( "NAME" => GetMessage('Ikonka_logo'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N', 'VALUES' => $arProperty_UF, ),
		"BTN_SRC_8" => array( "NAME" => GetMessage('Ssylka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "" ),
		"BTN_SORT_8" => array( "NAME" => GetMessage('Sortirovka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "500" ),
		'BTN_DISPLAY_8' => array( "NAME" => GetMessage('Otobrazhenie'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N',			'VALUES' => array( ''  => GetMessage("Ssylki_pokazyvat_vezde"), 'pc'  => GetMessage("Ssylki_pokazyvat_tolko_na_pc"), 'mob'  => GetMessage('Ssylki_pokazyvat_tolko_na_mob')	)	 ),

		'BTN_TYPE_9' => array( "NAME" => GetMessage('Ikonka_logo'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N', 'VALUES' => $arProperty_UF),
		"BTN_SRC_9" => array( "NAME" => GetMessage('Ssylka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => ""),
		"BTN_SORT_9" => array( "NAME" => GetMessage('Sortirovka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "500"),
		'BTN_DISPLAY_9' => array( "NAME" => GetMessage('Otobrazhenie'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N',			'VALUES' => array( ''  => GetMessage("Ssylki_pokazyvat_vezde"), 'pc'  => GetMessage("Ssylki_pokazyvat_tolko_na_pc"), 'mob'  => GetMessage('Ssylki_pokazyvat_tolko_na_mob')	)	 ),

		'BTN_TYPE_10' => array( "NAME" => GetMessage('Ikonka_logo'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N', 'VALUES' => $arProperty_UF),
		"BTN_SRC_10" => array( "NAME" => GetMessage('Ssylka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => ""),
		"BTN_SORT_10" => array( "NAME" => GetMessage('Sortirovka'), 'PARENT' => 'SRC_SETTINGS', "TYPE" => "STRING", "DEFAULT" => "500" ),
		'BTN_DISPLAY_10' => array( "NAME" => GetMessage('Otobrazhenie'), 'PARENT' => 'SRC_SETTINGS', 'TYPE' => 'LIST', 'MULTIPLE' => 'N',			'VALUES' => array( ''  => GetMessage("Ssylki_pokazyvat_vezde"), 'pc'  => GetMessage("Ssylki_pokazyvat_tolko_na_pc"), 'mob'  => GetMessage('Ssylki_pokazyvat_tolko_na_mob')	)	 ),


	 






		"SIZE" => array(
			'PARENT' => 'DESIGN_SETTINGS',
			"NAME" => GetMessage('Razmer'),
			"TYPE" => "STRING",
			"DEFAULT" => "46" 
		),
		"SIZE_MOBILE" => array(
			'PARENT' => 'DESIGN_SETTINGS',
			"NAME" => GetMessage('Razmer-mobile'),
			"TYPE" => "STRING",
			"DEFAULT" => "46" 
		),
		"FONT" => array(
			'PARENT' => 'DESIGN_SETTINGS',
			"NAME" => GetMessage('Font'),
			"TYPE" => "STRING",
			"DEFAULT" => "21" 
		),
		"FONT_MOBILE" => array(
			'PARENT' => 'DESIGN_SETTINGS',
			"NAME" => GetMessage('Font-mobile'),
			"TYPE" => "STRING",
			"DEFAULT" => "21" 
		),
		"RADIUS" => array(
			'PARENT' => 'DESIGN_SETTINGS',
			"NAME" => GetMessage('Skruglenie_kraev'),
			"TYPE" => "STRING",
			"DEFAULT" => "6" 
		),
		"RADIUS_MOBILE" => array(
			'PARENT' => 'DESIGN_SETTINGS',
			"NAME" => GetMessage('Skruglenie_kraev-mobile'),
			"TYPE" => "STRING",
			"DEFAULT" => "6" 
		),


		'SETSTYLE' => array(
			'PARENT' => 'DESIGN_SETTINGS',
			'NAME' => GetMessage('Style'),
			'TYPE' => 'LIST',
			'MULTIPLE' => 'N',
			'DEFAULT' => 'native',
			'VALUES' => array(
				'native'  => GetMessage("Nativny_cvet"),
				'custom'  => GetMessage("Proizvolny_cvet")
			),
			'REFRESH' => 'Y'
		),
		'BTNBG' => array(
			'NAME' => GetMessage('Btnbg'),
			'TYPE' => 'STRING',
			'DEFAULT' => '#68BEC1',
			'PARENT' => 'DESIGN_SETTINGS',
			"HIDDEN" => $customStyleHidden
		),
		'BTNBG_HOVER' => array(
			'NAME' => GetMessage('Btnbg_pri_navedenii'),
			'TYPE' => 'STRING',
			'DEFAULT' => '#44D3FF',
			'PARENT' => 'DESIGN_SETTINGS',
			"HIDDEN" => $customStyleHidden
		),
		'BTNCOLOR' => array(
			'NAME' => GetMessage('Btncolor'),
			'TYPE' => 'STRING',
			'DEFAULT' => '#FFFFFF',
			'PARENT' => 'DESIGN_SETTINGS',
			"HIDDEN" => $customStyleHidden
		),
		'BTNCOLOR_HOVER' => array(
			'NAME' => GetMessage('Btncolor_pri_navedenii'),
			'TYPE' => 'STRING',
			'DEFAULT' => '#EFFBFF',
			'PARENT' => 'DESIGN_SETTINGS',
			"HIDDEN" => $customStyleHidden
		),

		
		'ANIMATION' => array(
			'PARENT' => 'DESIGN_SETTINGS',
			'NAME' => GetMessage('Effekt_pri_navedenii'),
			'TYPE' => 'LIST',
			'MULTIPLE' => 'N',
			'DEFAULT' => 'none',
			'VALUES' => array(
				'none'  => GetMessage("Bez_animacii"),
				'shake'  => GetMessage("Podergivanie"), 
				'shift'  => GetMessage("Sdvig")
			),
			"HIDDEN" => "Y"
		),




		'BTNBORDER' => array(
			'NAME' => GetMessage('Ramka'),
			'TYPE' => 'STRING',
			'DEFAULT' => '0',
			'PARENT' => 'DESIGN_SETTINGS' 
		),
		'BTNBORDERCOLOR' => array(
			'NAME' => GetMessage('Cvet_ramki'),
			'TYPE' => 'STRING',
			'DEFAULT' => '#938D8D',
			'PARENT' => 'DESIGN_SETTINGS' 
		),
		'BTNBORDERCOLOR_HOVER' => array(
			'NAME' => GetMessage('Cvet_ramki_pri_navedenii'),
			'TYPE' => 'STRING',
			'DEFAULT' => '#8B98A8',
			'PARENT' => 'DESIGN_SETTINGS' 
		),


		'BTNOPACITY' => array(
			'NAME' => GetMessage('Prozrachnost'),
			'TYPE' => 'STRING',
			'DEFAULT' => '100',
			'PARENT' => 'DESIGN_SETTINGS' 
		),
		'BTNOPACITY_HOVER' => array(
			'NAME' => GetMessage('Prozrachnost_pri_navedenii'),
			'TYPE' => 'STRING',
			'DEFAULT' => '100',
			'PARENT' => 'DESIGN_SETTINGS' 
		),



		'BTNSHADOW' => array(
			'PARENT' => 'DESIGN_SETTINGS',
			'NAME' => GetMessage('Ten_knopok'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'Y',
			'REFRESH' => 'Y'
		),
		"BTNSHADOWCOLOR" => array(
			"PARENT" => "DESIGN_SETTINGS",
			"NAME" => GetMessage('Cvet_teni'),
			"TYPE" => "STRING",
			"DEFAULT" => "#A8A8A8",
			"HIDDEN" => $btnShadowHidden
		),
		"BTNSHADOWCOLOR_HOVER" => array(
			"PARENT" => "DESIGN_SETTINGS",
			"NAME" => GetMessage('Cvet_teni_pri_navedenii'),
			"TYPE" => "STRING",
			"DEFAULT" => "#C6BABA",
			"HIDDEN" => $btnShadowHidden
		),
		"BTNSHADOWSIZE" => array(
			"PARENT" => "DESIGN_SETTINGS",
			"NAME" => GetMessage('Razmer_teni'),
			"TYPE" => "STRING",
			"DEFAULT" => "4",
			"HIDDEN" => $btnShadowHidden
		),
		"BTNSHADOWSIZE_HOVER" => array(
			"PARENT" => "DESIGN_SETTINGS",
			"NAME" => GetMessage('Razmer_pri_navedenii'),
			"TYPE" => "STRING",
			"DEFAULT" => "13",
			"HIDDEN" => $btnShadowHidden
		),
		"BTNSHADOWVOFFSET" => array(
			"PARENT" => "DESIGN_SETTINGS",
			"NAME" => GetMessage('Sdvig_teni_po_vertikali'),
			"TYPE" => "STRING",
			"DEFAULT" => "3",
			"HIDDEN" => $btnShadowHidden
		),
		"BTNSHADOWVOFFSET_HOVER" => array(
			"PARENT" => "DESIGN_SETTINGS",
			"NAME" => GetMessage('Sdvig_teni_po_vertikali_pri_navedenii'),
			"TYPE" => "STRING",
			"DEFAULT" => "7",
			"HIDDEN" => $btnShadowHidden
		),
		"BTNSHADOWHOFFSET" => array(
			"PARENT" => "DESIGN_SETTINGS",
			"NAME" => GetMessage('Sdvig_teni_po_gorizontali'),
			"TYPE" => "STRING",
			"DEFAULT" => "0",
			"HIDDEN" => $btnShadowHidden
		),
		"BTNSHADOWHOFFSET_HOVER" => array(
			"PARENT" => "DESIGN_SETTINGS",
			"NAME" => GetMessage('Sdvig_teni_po_gorizontali_pri_navedenii'),
			"TYPE" => "STRING",
			"DEFAULT" => "0",
			"HIDDEN" => $btnShadowHidden
		),







		'VMARGIN' => array(
			'NAME' => GetMessage('Otstup_ikonok_sverhu_i_snizu'),
			'TYPE' => 'STRING',
			'DEFAULT' => '5',
			'PARENT' => 'DESIGN_SETTINGS' 
		),
		'HMARGIN' => array(
			'NAME' => GetMessage('Otstup_ikonok_sleva_i_sprava'),
			'TYPE' => 'STRING',
			'DEFAULT' => '5',
			'PARENT' => 'DESIGN_SETTINGS' 
		),
		'VMARGIN_MOBILE' => array(
			'NAME' => GetMessage('Otstup_ikonok_sverhu_i_snizu_mob'),
			'TYPE' => 'STRING',
			'DEFAULT' => '',
			'PARENT' => 'DESIGN_SETTINGS' 
		),
		'HMARGIN_MOBILE' => array(
			'NAME' => GetMessage('Otstup_ikonok_sleva_i_sprava_mob'),
			'TYPE' => 'STRING',
			'DEFAULT' => '',
			'PARENT' => 'DESIGN_SETTINGS' 
		),


		
		


		'BTNTRANSITION' => array(
			'PARENT' => 'DESIGN_SETTINGS',
			'NAME' => GetMessage('Effekt_pri_navedenii_CSS'),
			'TYPE' => 'LIST',
			'MULTIPLE' => 'N',
			'DEFAULT' => 'ease',
			'VALUES' => array(
				'none'  => GetMessage("Effekt_pri_navedenii_CSS_none"),
				'linear'  => GetMessage("Effekt_pri_navedenii_CSS_linear"), 
				'ease'  => GetMessage("Effekt_pri_navedenii_CSS_ease")
			) 
		),
		'BTNTRANSITION_TIME' => array(
			'NAME' => GetMessage('Vremya_na_effekt_pri_navedenii'),
			'TYPE' => 'STRING',
			'DEFAULT' => '300',
			'PARENT' => 'DESIGN_SETTINGS' 
		),







		'NOINDEX' => array(
			'NAME' => GetMessage('Atributy'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'Y',
			'PARENT' => 'URL_SETTINGS',
		),
		'TARGET' => array(
			'NAME' => GetMessage('Target'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'Y',
			'PARENT' => 'URL_SETTINGS',
		),
		'HIDE_MOBILE' => array(
			'NAME' => GetMessage('Skryvat_na_mobilnyx_ustrojstvax'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'N',
			'PARENT' => 'URL_SETTINGS',
		),
		'HIDE_PC' => array(
			'NAME' => GetMessage('Skryvat_na_pk'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'N',
			'PARENT' => 'URL_SETTINGS',
		),
		'ZINDEX' => array(
			'NAME' => GetMessage('Zindex'),
			'TYPE' => 'STRING',
			'DEFAULT' => '1',
			'PARENT' => 'URL_SETTINGS' 
		),
		'DIVDISPLAY' => array(
			'PARENT' => 'URL_SETTINGS',
			'NAME' => GetMessage('Display_konteinera'),
			'TYPE' => 'LIST',
			'MULTIPLE' => 'N',
			'DEFAULT' => 'block',
			'VALUES' => array(
				'block'  => "block",
				'inline-block'  =>  "inline-block",
				'inline'  =>  "inline"
			) 
		),

		'YANDEX_METRIKA_ID_MODE' => array(
			'PARENT' => 'URL_SETTINGS',
			'NAME' => GetMessage('Aidi_yandeks_metriki'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'N',
			'REFRESH' => 'Y'
		),
		"IDYAM" => array(
			"PARENT" => "URL_SETTINGS",
			"NAME" => GetMessage('Id_metriki'),
			"TYPE" => "STRING",
			"DEFAULT" => "",
			"HIDDEN" => $metrikaIdHidden
		),
		

		"INCID" => array(
			'PARENT' => 'URL_SETTINGS',
			"NAME" => "Include id",
			"TYPE" => "STRING",
			"DEFAULT" => date("YmdHis"),
			"HIDDEN" => "Y"
		),

	),
);
?>
