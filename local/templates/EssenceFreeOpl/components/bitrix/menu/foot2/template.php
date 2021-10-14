<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div id="copyright">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="site-info float-left">
        <p>Crafted by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
    </div>
    <div class="float-right">
    <ul class="nav nav-inline">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
    <li <?if($arItem["SELECTED"]):
        ?>class="nav-item" <?endif
    ?>>
        <a class="nav-link"  href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
    </li>

	
<?endforeach?>

    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
<?endif?>