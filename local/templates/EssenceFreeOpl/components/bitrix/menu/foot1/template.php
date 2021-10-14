<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
    <div class="widget">
    <h3 class="block-title">Short Link</h3>
    <ul class="menu">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
    <li	<?if($arItem["SELECTED"]):
    ?>><?endif?> <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>


<?endforeach?>
        </ul>

    </div>
    </div>
<?endif?>