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
<div class="about_title text-body mt-3 mb-4"><?=$arResult['NAME']?></div>
<div class="row news_wrapper news_wrapper_newspage">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news_item col-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" />
            <div class="news_title"><?=$arItem["NAME"]?></div>
            <div class="news_date"><?=explode(' ', $arItem["TIMESTAMP_X"])[0]?></div>
        </a>
    <?endforeach;?>
</div>


        <?=$arResult['NAV_STRING']?>
