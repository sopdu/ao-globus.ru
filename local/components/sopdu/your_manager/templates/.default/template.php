<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<div class="your_manager mt-4">
    <div class="row">
        <div class="col-4 pr-0">
            <?if(!empty($arResult["photo"])):?>
                <img class="mt-5" src="<?=$arResult["photo"]?>" />
            <?endif;?>
        </div>
        <div class="col-8 info">
            <div class="title mt-3 mb-3"><?=GetMessage("YourManagerTitle")?></div>
            <div class="name mb-3"><?=$arResult["lastName"]?> <?=$arResult["name"]?> <?=$arResult["secondName"]?></div>
            <?if(!empty($arResult["email"])):?>
            <div class="d-flex">
                <span>
                    <img class="mr-2 " src="/upload/img/mail.svg" />
                </span>
                <span class="mb-2">
                    <a href="mailto:<?=$arResult["email"]?>"><?=$arResult["email"]?></a>
                </span>
            </div>
                <br />
            <?endif;?>
            <?if(!empty($arResult["phone"])):?>
            <div class="d-flex">
                <span>
                    <img class="mr-2" src="/upload/img/phone.svg" />
                </span>
                <span>
                    <a href="tel:<?=$arResult["phone"]?>"><?=$arResult["phone"]?></a>
                </span>
            </div>
            <?endif;?>
        </div>
    </div>
</div>