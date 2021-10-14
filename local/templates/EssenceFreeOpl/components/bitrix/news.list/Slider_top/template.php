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
<?//if($arResult["ITEMS"]):?>
<!---->
<!---->
<?//if($arParams["DISPLAY_TOP_PAGER"]):?>
<!--	--><?//=$arResult["NAV_STRING"]?><!--<br />-->
<?//endif;?>

<div id="carousel-area">
    <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>
    <div class="carousel-inner" role="listbox">

    <?foreach($arResult["ITEMS"] as $cell=> $arItem):?>

        <div class="carousel-item <?if(!$cell):?>active <?endif;?>">
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
            <div class="carousel-caption <?if(!$cell):?>text-left <?else:?>text-center <?endif;?>">
                <h3 class="wow fadeInRight" data-wow-delay="0.2s"><?echo $arItem["NAME"]?></h3>
                <h2 class="wow fadeInRight" data-wow-delay="0.4s"><?echo $arItem["NAME"]?></h2>
<!--                --><?//if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
<!--                    --><?//echo $arItem["PREVIEW_TEXT"];?>
<!--                --><?//endif;?>
                <h4 class="wow fadeInRight" data-wow-delay="0.6s"><?echo $arItem["NAME"]?></h4>
                <?if($arItem["PROPERTIES"]["NB1"]["VALUE"] != ""):?><a href="<?echo $arItem["PROPERTIES"]["URL1"]["VALUE"];?>" class="btn btn-lg btn-common btn-effect wow fadeInRight" data-wow-delay="0.9s"><?echo $arItem["PROPERTIES"]["NB1"]["VALUE"];?></a><?endif;?>
                <?if($arItem["PROPERTIES"]["NB2"]["VALUE"] != ""):?><a href="<?echo $arItem["PROPERTIES"]["URL2"]["VALUE"];?>" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s"><?echo $arItem["PROPERTIES"]["NB2"]["VALUE"];?></a><?endif;?>
            </div>
        </div>
<!--	<p class="news-item" id="--><?//=$this->GetEditAreaId($arItem['ID']);?><!--">-->
<!--        --><?//if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
<!--            --><?//if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
<!--                <a href="--><?//=$arItem["DETAIL_PAGE_URL"]?><!--"><img-->
<!--                        class="preview_picture"-->
<!--                        border="0"-->
<!--                        src="--><?//=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
<!--                        width="--><?//=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
<!--                        height="--><?//=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
<!--                        alt="--><?//=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
<!--                        title="--><?//=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
<!--                        style="float:left"-->
<!--                    /></a>-->
<!--            --><?//else:?>
<!--                <img-->
<!--                    class="preview_picture"-->
<!--                    border="0"-->
<!--                    src="--><?//=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
<!--                    width="--><?//=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
<!--                    height="--><?//=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
<!--                    alt="--><?//=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
<!--                    title="--><?//=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
<!--                    style="float:left"-->
<!--                />-->
<!--            --><?//endif;?>
<!--        --><?//endif?>
<!--        --><?//if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
<!--            <span class="news-date-time">--><?//echo $arItem["DISPLAY_ACTIVE_FROM"]?><!--</span>-->
<!--        --><?//endif?>
<!--        --><?//if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
<!--            --><?//if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
<!--                <a href="--><?//echo $arItem["DETAIL_PAGE_URL"]?><!--"><b>--><?//echo $arItem["NAME"]?><!--</b></a><br />-->
<!--            --><?//else:?>
<!--                <b>--><?//echo $arItem["NAME"]?><!--</b><br />-->
<!--            --><?//endif;?>
<!--        --><?//endif;?>
<!--        --><?//if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
<!--            --><?//echo $arItem["PREVIEW_TEXT"];?>
<!--        --><?//endif;?>
<!--        --><?//if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
<!--            <div style="clear:both"></div>-->
<!--        --><?//endif?>
<!--        --><?//foreach($arItem["FIELDS"] as $code=>$value):?>
<!--            <small>-->
<!--                --><?//=GetMessage("IBLOCK_FIELD_".$code)?><!--:&nbsp;--><?//=$value;?>
<!--            </small><br />-->
<!--        --><?//endforeach;?>
<!--        --><?//foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
<!--            <small>-->
<!--                --><?//=$arProperty["NAME"]?><!--:&nbsp;-->
<!--                --><?//if(is_array($arProperty["DISPLAY_VALUE"])):?>
<!--                    --><?//=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
<!--                --><?//else:?>
<!--                    --><?//=$arProperty["DISPLAY_VALUE"];?>
<!--                --><?//endif?>
<!--            </small><br />-->
<!--        --><?//endforeach;?>
<!--        </p>-->
<?endforeach;?>

    <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<?endif;?>