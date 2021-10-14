<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>




<?if(!empty($arResult["INSTAGRAM"])){?>
    <? if(isset($arResult["BACKGROUND_COLOR"]) && !empty($arResult["BACKGROUND_COLOR"]))
        $bgcolor='#'.$arResult["BACKGROUND_COLOR"];
    ?>
    <style>
       .block_wrap_instagram  .instagrm-item::after {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 5;
            background: linear-gradient(to bottom, rgba(61, 75, 82, 0.5) 50%, <?=$bgcolor?> 100%);
            content: '';
            position: absolute;
            opacity: 0;
            visibility: hidden;
        }
        .icon-instagram{
            color:<?="#".$arResult["ICON_COLOR"]?>;
        }
    </style>
    <script>
        window.onload = function () {
            resize_screen();
        };
        document.addEventListener("DOMContentLoaded", function () {
            window.onresize = function () {
                resize_screen();
            };
        });

        $(function() {
            resize_screen();
        });

        function resize_screen() {

            var block_wrap_width = document.getElementById('block_wrap').offsetWidth,
                query_item = document.getElementsByClassName("instagrm-item"),
                count_item = query_item.length,
                item_lenght= block_wrap_width/count_item,
                item_lenght_percent = item_lenght * 100 / block_wrap_width;

            setItemLenght(count_item, item_lenght_percent + "%", item_lenght );
            if (block_wrap_width < 968 && block_wrap_width>361){
			    if(count_item<8)
				    setItemLenght(count_item, item_lenght_percent + "%", block_wrap_width/count_item);
				else
				    setItemLenght(count_item, 25 + "%", block_wrap_width*(0.25), item_lenght);
			}
            if(block_wrap_width<361){
                setItemLenght(count_item, 50 + "%", block_wrap_width/2);
            }
        }

        function setItemLenght(item_count, len_perc, height_item) {

            document.getElementById("icon-instagram").style.fontSize=height_item*0.63+"px";

            for (var i = 0; i < item_count; i++) {
                document.getElementById("instagrm-item-" + i).style.width = len_perc;
                document.getElementById("instagrm-item-" + i).style.height = height_item+"px";             
            }
        }
    </script>

    <div id="block_wrap" class="block_wrap_instagram ">
        <div id="instagrm-item-0" class="instagrm-item"  style="background:<?=$bgcolor?>;text-aling: jusitify; ">
            <div id="icon-instagram" class="icon-instagram"  >
                <div  class="iconin-instagram"  ></div>
            </div>
           <a target="blank" href="https://www.instagram.com/<?=$arResult["INSTAGRAM"]["NAME"]?>" class="instagram-link"></a>
        </div>
        <? $count = 1;
        foreach ( $arResult["INSTAGRAM"] as $element) {?>
           
                <div id="instagrm-item-<?= $count ?>" class="instagrm-item mt" >
                    <img src="<?= $element["IMAGE"] ?>" alt="">
                    <a target="blank" href="<?= $element["LINK"] ?>" class="instagram-link"></a>
                </div>
            <? 
            $count++;
        } ?>
    </div>
<?}?>
