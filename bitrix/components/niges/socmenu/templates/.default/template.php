<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
if (method_exists($this, 'setFrameMode')) {
	$this->setFrameMode(true);
	$nsmSettings=false;
}






//echo "<pre>"; print_r($arParams); echo "</pre>";
//echo "<pre>"; print_r($arResult["ITEMS"]); echo "</pre>";
?>



<?
if ($arResult["ITEMS"][0] || !empty($arResult["TELNO"]) ) {  
	
	if($arResult["YANDEX_METRIKA_ID_MODE"] == "N") $arResult["IDYAM"] = "";

	if($arResult["DIVDISPLAY"] == "block" || $arResult["DIVDISPLAY"] == "") $contStyle = ""; 
	else $contStyle = ' style="display:'.$arResult["DIVDISPLAY"].'"';

	ob_start();
?>
	<style> .nsm-bar-c<?=$arResult["INCID"]?> { -webkit-animation-name: nsmBtnsFadeIn; -webkit-animation-duration: 2s; animation-name: nsmBtnsFadeIn; animation-duration: 2s; }  @-webkit-keyframes nsmBtnsFadeIn { 0% {opacity: 0;} 25% {opacity: 0;} 50% {opacity:0;} 75% {opacity:0.9;} 100% {opacity:1;} }  @keyframes nsmBtnsFadeIn { 0% {opacity: 0;} 25% {opacity: 0;} 50% {opacity:0;} 75% {opacity:0.9;} 100% {opacity:1;}  } 	</style>
	<div<?=$contStyle?> class="nsm-bar-c<?=$arResult["INCID"]?>"> 
	
		<div id="nsm-bar-c<?=$arResult["INCID"]?>" class="nsm-bar-c nsm-style-<?=$arResult["SETSTYLE"]?> 
		nsm-animation-<?=$arResult["ANIMATION"]?> 
		  nsm-position-component 
		<?if ($arResult["HIDE_MOBILE"] == "Y") :?>nsm-hidden-mobile<? endif; ?> 
		<?if ($arResult["HIDE_PC"] == "Y") :?>nsm-hidden-pc<? endif; ?> 
			">
			<?if ($arResult["NOINDEX"] == "Y") :?><noindex><? endif; ?>
			<? foreach ($arResult["ITEMS"] as $i => $arItem) :?>
				<? if ($arItem["CSS_ICON"]) :?>
					<a	<? if ($arResult["IDYAM"] != "") :?>
						<?=(substr($arItem["CSS_ICON"], 0, 2)=='br') ? 'data-off-': '';?>onClick="ym(<?=trim($arResult["IDYAM"])?>,\'reachGoal\',\'nsm_btn_<?=$arItem["CSS_ICON"]?>\')" 
						<? endif; ?>
						<?=(substr($arItem["CSS_ICON"], 0, 2)=='br') ? 'data-off-': '';?>href="<?=$arItem["LINK"]?>"
						class="nsm-bar-c-btn nsm-fab nsm-fa-<?=$arItem["CSS_ICON"]?> <?=$arItem["DISPLAY"]?>" 
						<? if ($arResult["NOINDEX"] == "Y") :?>
							rel="nofollow"
						<? endif; ?>
						<? if ($arResult["TARGET"] == "Y") :?>
							target="_blank" 
						<? endif; ?>
						<? if ($arResult["ANIMATION"] == "shake") :?>
							onmouseover="shakeAnimation(this, event);" onmouseout="shakeAnimation(this, event);"
						<? endif; ?>
					></a>
				<?endif;?>
			<?endforeach;?>

			<?if ($arResult["TELNO"] != "") :?>
				<a href="<?=$arResult["TELNO"]?>" class="nsm-bar-c-btn nsm-fab nsm-fa-tel-<?=$arResult["TELNOICON"]?> <?if ($arResult["TELNOMOBONLY"] == "Y") :?>nsm-hidden-pc<? endif; ?> "
					<? if ($arResult["IDYAM"] != "") :?>
						onClick="ym(<?=trim($arResult["IDYAM"])?>,\'reachGoal\',\'nsm_btn_call\')" 
					<? endif; ?>					
					<? if ($arResult["NOINDEX"] == "Y") :?>
						rel="nofollow"
					<? endif; ?>
					<? if ($arResult["TARGET"] == "Y") :?>
					 	target="_blank" 
					<? endif; ?>
					<? if ($arResult["ANIMATION"] == "shake") :?>
						onmouseover="shakeAnimation(this, event);" onmouseout="shakeAnimation(this, event);"
					<? endif; ?>
					></a>
			<?endif;?>

			<?if ($arResult["NOINDEX"] == "Y") :?></noindex><?endif;?>

			<? if ($nsmSettings==true) :?>
				<? require $_SERVER['DOCUMENT_ROOT'].'/bitrix/components/niges/socmenu/templates/.default/.settingsbar.php'; ?>
			<? endif; ?>

		</div>
	</div>
	<?
	$html = preg_replace("/\s+/", " ", ob_get_contents());
	
	ob_end_clean();
	

echo $html; 


	ob_start();

	if($arResult["TOPTYPE"] == "") $arResult["TOPTYPE"] = "top";
	if($arResult["TOPMEASURE"] == "") $arResult["TOPMEASURE"] = "%";

	?>
	
	<style>
	.nsm-bar-c<?=$arResult["INCID"]?> .nsm-bar-c {
		<?=$arResult["TOPTYPE"]?>: <?=$arResult["TOP"]?><?=$arResult["TOPMEASURE"]?>;
		top: unset;
		bottom: unset;
		z-index: <?=$arResult["ZINDEX"]?>;
		position: relative;
	}
	.nsm-bar-c<?=$arResult["INCID"]?> .nsm-bar-c a,
	.nsm-bar-c<?=$arResult["INCID"]?> .nsm-bar-c a:visited,
	.nsm-bar-c<?=$arResult["INCID"]?> .nsm-bar-c a:active {
		display: inline-block;
		box-sizing: content-box;
		text-align: center;
		text-decoration: none !important;
		font-weight: normal !important;
		background: <?=$arResult["BTNBG"]?> !important;
		color: <?=$arResult["BTNCOLOR"]?> !important;
		width: <?=$arResult["SIZE"]?>px;
		height: <?=$arResult["SIZE"]?>px;
		line-height: <?=$arResult["SIZE"]?>px;
		font-size: <?=$arResult["FONT"]?>px;
		border-radius: <?=$arResult["RADIUS"]?>px;
		border:<?=$arResult["BTNBORDER"]?>px solid <?=$arResult["BTNBORDERCOLOR"]?>;
		margin-left: <?=$arResult["HMARGIN"]?>px;
		margin-right: <?=$arResult["HMARGIN"]?>px;
		margin-top: <?=$arResult["VMARGIN"]?>px;
		margin-bottom: <?=$arResult["VMARGIN"]?>px;
		opacity: <?=$arResult["BTNOPACITY"]/100?>;
		<?if ($arResult["BTNSHADOW"] == "Y") :?>
		box-shadow: <?=$arResult["BTNSHADOWHOFFSET"]?>px <?=$arResult["BTNSHADOWVOFFSET"]?>px <?=$arResult["BTNSHADOWSIZE"]?>px <?=$arResult["BTNSHADOWCOLOR"]?>;
		<?endif;?>
		<?if ($arResult["BTNTRANSITION"] != "none") :?>
		transition: all <?=$arResult["BTNTRANSITION_TIME"]?>ms <?=$arResult["BTNTRANSITION"]?>;
		<?endif;?>
	}
	.nsm-bar-c<?=$arResult["INCID"]?> .nsm-bar-c a:hover,
	.nsm-bar-c<?=$arResult["INCID"]?> .nsm-bar-c a:focus{
		<?if ($arResult["SETSTYLE"] != "native") :?>
		background: <?=$arResult["BTNBG_HOVER"]?> !important;
		color: <?=$arResult["BTNCOLOR_HOVER"]?> !important;
		<?endif;?>
		text-decoration: none !important;
		border-color: <?=$arResult["BTNBORDERCOLOR_HOVER"]?> !important;
		opacity: <?=$arResult["BTNOPACITY_HOVER"]/100?>;
		<?if ($arResult["BTNSHADOW"] == "Y") :?>
		box-shadow: <?=$arResult["BTNSHADOWHOFFSET_HOVER"]?>px <?=$arResult["BTNSHADOWVOFFSET_HOVER"]?>px <?=$arResult["BTNSHADOWSIZE_HOVER"]?>px <?=$arResult["BTNSHADOWCOLOR_HOVER"]?>;
		<?endif;?>
	}
	@media screen and (min-width:767.01px) {
		.nsm-bar-c<?=$arResult["INCID"]?> .nsm-bar-c-btn.mob {display:none !important}
	}	
	@media screen and (max-width:767px) {
		.nsm-bar-c<?=$arResult["INCID"]?> .nsm-bar-c {
			<?if ($arResult["TOPTYPE_MOBILE"] != "" && $arResult["TOP_MOBILE"] != "") :?>
				top:unset; bottom:unset;
			<?=$arResult["TOPTYPE_MOBILE"]?>: <?=$arResult["TOP_MOBILE"]?><?=$arResult["TOPMEASURE_MOBILE"]?>;
			<?endif;?>
		}
		.nsm-bar-c<?=$arResult["INCID"]?> .nsm-bar-c a,
		.nsm-bar-c<?=$arResult["INCID"]?> .nsm-bar-c a:visited,
		.nsm-bar-c<?=$arResult["INCID"]?> .nsm-bar-c a:active {	
			width: <?=$arResult["SIZE_MOBILE"]?>px ;
			height: <?=$arResult["SIZE_MOBILE"]?>px ;
			line-height: <?=$arResult["SIZE_MOBILE"]?>px ;
			font-size: <?=$arResult["FONT_MOBILE"]?>px ;
			border-radius: <?=$arResult["RADIUS_MOBILE"]?>px ;

			<?if ($arResult["HMARGIN_MOBILE"] != "") :?>
			margin-left: <?=$arResult["HMARGIN_MOBILE"]?>px;
			margin-right: <?=$arResult["HMARGIN_MOBILE"]?>px;
			<?endif;?>
			<?if ($arResult["VMARGIN_MOBILE"] != "") :?>
			margin-top: <?=$arResult["VMARGIN_MOBILE"]?>px;
			margin-bottom: <?=$arResult["VMARGIN_MOBILE"]?>px;
			<?endif;?>
		}
		.nsm-bar-c<?=$arResult["INCID"]?> .nsm-bar-c-btn.pc {display:none !important}
	}
	</style>
	<span id="nsm-new-styles-"></span>
	<span id="fit_new_css-"></span>

	<?
	$css = preg_replace("/\s+/", " ", ob_get_contents());
	ob_end_clean();


	

	$APPLICATION->AddHeadString($css);
}
?>