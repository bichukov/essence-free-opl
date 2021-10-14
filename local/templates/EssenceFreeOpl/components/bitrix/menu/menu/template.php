<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
    <div class="container">

    <a class="navbar-brand" href="index.php"><span class="lni-bulb"></span>ESSENCE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="lni-menu"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto w-100 justify-content-end">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
    <li 	<?if($arItem["SELECTED"]):
    ?> class="nav-item"	<?endif
    ?>>
        <a class="nav-link page-scroll" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
    </li>

	
<?endforeach?>

</ul>
    </div>
    </div>
    </nav>
<?endif?>