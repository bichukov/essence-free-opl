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
$this->setFrameMode(true);
?>


<?if($arResult["ITEMS"]):?>

    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
        <div class="widget">
            <h3 class="block-title">Instagram</h3>
            <ul class="instagram-footer">

                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <li <?if($arItem["SELECTED"]):
                        ?><?endif
                    ?><a href="<?=$arItem["LINK"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"

                                                          alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                                          title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"></a></li>
                    <!--<pre>--><?//print_r ($arItem);?><!--</pre>-->

                    <!--	<p class="news-item" id="--><?//=$this->GetEditAreaId($arItem['ID']);?><!--">-->
                    <!--		--><?//if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                    <!--			--><?//if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <!--				<a href="--><?//=$arItem["DETAIL_PAGE_URL"]?><!--"><img-->
                    <!--						class="preview_picture"-->
                    <!--						border="0"-->
                    <!--						src="--><?//=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
                    <!--						width="--><?//=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
                    <!--						height="--><?//=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
                    <!--						alt="--><?//=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
                    <!--						title="--><?//=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
                    <!--						style="float:left"-->
                    <!--						/></a>-->
                    <!--			--><?//else:?>
                    <!--				<img-->
                    <!--					class="preview_picture"-->
                    <!--					border="0"-->
                    <!--					src="--><?//=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
                    <!--					width="--><?//=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
                    <!--					height="--><?//=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
                    <!--					alt="--><?//=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
                    <!--					title="--><?//=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
                    <!--					style="float:left"-->
                    <!--					/>-->
                    <!--			--><?//endif;?>
                    <!--		--><?//endif?>
                    <!--		--><?//if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                    <!--			<span class="news-date-time">--><?//echo $arItem["DISPLAY_ACTIVE_FROM"]?><!--</span>-->
                    <!--		--><?//endif?>
                    <!--		--><?//if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                    <!--			--><?//if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <!--				<a href="--><?//echo $arItem["DETAIL_PAGE_URL"]?><!--"><b>--><?//echo $arItem["NAME"]?><!--</b></a><br />-->
                    <!--			--><?//else:?>
                    <!--				<b>--><?//echo $arItem["NAME"]?><!--</b><br />-->
                    <!--			--><?//endif;?>
                    <!--		--><?//endif;?>
                    <!--		--><?//if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                    <!--			--><?//echo $arItem["PREVIEW_TEXT"];?>
                    <!--		--><?//endif;?>
                    <!--		--><?//if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                    <!--			<div style="clear:both"></div>-->
                    <!--		--><?//endif?>
                    <!--		--><?//foreach($arItem["FIELDS"] as $code=>$value):?>
                    <!--			<small>-->
                    <!--			--><?//=GetMessage("IBLOCK_FIELD_".$code)?><!--:&nbsp;--><?//=$value;?>
                    <!--			</small><br />-->
                    <!--		--><?//endforeach;?>
                    <!--		--><?//foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                    <!--			<small>-->
                    <!--			--><?//=$arProperty["NAME"]?><!--:&nbsp;-->
                    <!--			--><?//if(is_array($arProperty["DISPLAY_VALUE"])):?>
                    <!--				--><?//=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
                    <!--			--><?//else:?>
                    <!--				--><?//=$arProperty["DISPLAY_VALUE"];?>
                    <!--			--><?//endif?>
                    <!--			</small><br />-->
                    <!--		--><?//endforeach;?>
                    <!--	</p>-->
                <?endforeach;?>        </ul>

        </div>
    </div>
    </div>
<?endif;?>

</div>