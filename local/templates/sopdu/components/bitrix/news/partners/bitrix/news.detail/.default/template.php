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
$APPLICATION->SetPageProperty("TITLE", $arResult["NAME"]);
$APPLICATION->SetTitle($arResult["NAME"]);
?>
<div class="about_title text-body mt-3 mb-1"><?=$arResult["NAME"]?></div>
<?/*<div class="news_date text-left mb-2"><?=explode(' ', $arResult["TIMESTAMP_X"])[0]?></div>*/?>
<div class="d-flex justify-content-between mb-4 img_newsitem">
    <img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arResult["NAME"]?>" />
</div>
<?=$arResult["PREVIEW_TEXT"]?>