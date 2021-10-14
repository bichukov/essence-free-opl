<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if($arResult["ITEMS"]):?>
<?if (!empty($arResult)):?>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
    <div class="widget">
    <h3 class="block-title">Instagram</h3>
    <ul class="instagram-footer">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>

    <li <?if($arItem["SELECTED"]):
        ?><?endif
    ?>><a href="<?=$arItem["LINK"]?>"><img src="<?= SITE_TEMPLATE_PATH ?>/img/instagram/insta6.jpg" alt=""></a></li>



	<?if($arItem["SELECTED"]):?>
		<li><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>

<?endforeach?>

</ul>
<?endif?><?endif?>