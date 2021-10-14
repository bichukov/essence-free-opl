<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
}
if ($arResult["ITEMS"][0]) {

	ob_start();
	?>
	<div id="ab-position-<?php echo $arResult["POSITION"]?>">
		<div id="ab-sidebar" class="ab-sidebar ab-animation-<?php echo $arResult["ANIMATION"]?> ab-position-<?php echo $arResult["POSITION"]?> ab-hidden-xs-<?php echo $arResult["HIDE_MOBILE"]?>">
			<?php if ($arResult["NOINDEX"] == "Y") :?><!--noindex--><?php endif; ?>
			<?php foreach ($arResult["ITEMS"] as $i => $arItem) :?>
				<?php if ($arItem["BG_POS"]) :?>
					<a
						href="<?php echo $arItem["LINK"]?>"
						class="ab-sidebar__link"
						<?php if (mb_strpos($arItem["LINK"], "http") !== false) :
							if ($arResult["NOINDEX"] == "Y") :?>
								rel="nofollow noopener noreferrer"
								target="blank"
							<?php else :?>
								rel="noopener noreferrer"
								target="blank"
							<?php endif; ?>
						<?php elseif ($arResult["NOINDEX"] == "Y") :?>
							rel="nofollow"
						<?php endif; ?>
						<?php if ($arResult["ANIMATION"] == "twitch") :?>
							onmouseover="twitchAnimation(this, event);" onmouseout="twitchAnimation(this, event);"
						<?php endif; ?>
					>
						<span id="ab-sidebar__ico-<?php echo $i?>" class="ab-sidebar__ico ab-sidebar__ico-<?php echo $arResult["THEMES"]?> ab-sidebar__ico-shadow"></span>
					</a>
				<?php endif;?>
			<?php endforeach;?>
			<?php if ($arResult["NOINDEX"] == "Y") :?><!--/noindex--><?php endif;?>
		</div>
	</div>
	<?php 
	$html = preg_replace("/\s+/", " ", ob_get_contents());
	ob_end_clean();

	$APPLICATION->AddHeadString('<script type="text/javascript">
		if (window == window.top) {
			document.addEventListener("DOMContentLoaded", function() {
			    var div = document.createElement("div");
			    div.innerHTML = \''.$html.'\';
				document.body.appendChild(div);
			});
		}
	</script>');

	ob_start();
	?>
	<style>
		<?php foreach ($arResult["ITEMS"] as $i => $arItem) :?>
		#ab-sidebar__ico-<?php echo $i?>{
			background-position: <?php echo $arItem["BG_POS"]?>;
		}

		@media screen and (max-width:767px) {
			#ab-sidebar__ico-<?php echo $i?>{
				background-position: <?php echo $arItem["BG_POS_MOBILE"]?>;
			}
		}
		<?php endforeach; ?>

		.ab-sidebar{
			top: <?php echo $arResult["TOP"]?>%;
			z-index: <?php echo $arResult["ZINDEX"]?>;
			margin: 0 <?php echo $arResult["MARGIN"]?>px;
		<?php if ($arResult["FIXED"] == "Y") :?>
			position: fixed;
		<?php else :?>
			position: absolute;
		<?php endif;?>
		}

		.ab-sidebar__ico {
			border-radius: <?php echo $arResult["RADIUS"]?>px;
			z-index: <?php echo $arResult["ZINDEX"]?>;
			margin-top: <?php echo $arResult["MARGIN"]?>px;
		<?php if ($arResult["SIZE"] > 0) :?>
			width: <?php echo $arResult["SIZE"]?>px;
			height: <?php echo $arResult["SIZE"]?>px;
			min-height: <?php echo $arResult["SIZE"]?>px;
			background-size: <?php echo ($arResult["SIZE"]*5)?>px <?php echo ($arResult["SIZE"]*11)?>px;
		<?php endif;?>
		}

		<?php if ($arResult["SIZE_MOBILE"] > 0) :?>
		@media screen and (max-width:767px) {
			.ab-sidebar__ico {
				width: <?php echo $arResult["SIZE_MOBILE"]?>px;
				height: <?php echo $arResult["SIZE_MOBILE"]?>px;
				min-height: <?php echo $arResult["SIZE_MOBILE"]?>px;
				background-size: <?php echo ($arResult["SIZE_MOBILE"]*5)?>px <?php echo ($arResult["SIZE_MOBILE"]*11)?>px;
			}
		}
		<?php endif;?>

	</style>
	<?php 
	$css = preg_replace("/\s+/", " ", ob_get_contents());
	ob_end_clean();

	$APPLICATION->AddHeadString($css);
}
?>