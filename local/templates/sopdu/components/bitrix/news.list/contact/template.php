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
<div class="d-flex adaptation_block fixjcsb">
    <div class="row justify-content-between">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="contact_cols col-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="cont_title"><?=$arItem["NAME"]?></div>
                <div class="mb-2">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/mail.svg" class="mr-2" />
                    <span><a href="mailto:<?=$arItem["PROPERTIES"]["email"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["email"]["VALUE"]?></a></span>
                </div>
                <img src="<?=SITE_TEMPLATE_PATH?>/img/phone.svg" class="mr-2" />
                <span><a href="tel:<?=$arItem["PROPERTIES"]["phone"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["phone"]["VALUE"]?></a></span>
            </div>
        <?endforeach;?>
    </div>
</div>