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
<div class="container d-flex justify-content-between p-0 adaptation_block">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
        <?if(!empty($arItem["PROPERTIES"]["LINK"]["VALUE"])):?>
            <a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="previewbox" id="<?=$this->GetEditAreaId($arItem['ID']);?>"  style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);">
        <?else:?>
		    <div class="previewbox" id="<?=$this->GetEditAreaId($arItem['ID']);?>"  style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);">
        <?endif;?>
			<div class="previewbox_inside">
				<div class="previewbox_title w-75 mb-4"><?=$arItem["NAME"]?></div>
				<?if(!empty($arItem["PROPERTIES"]["LINK"]["VALUE"])):?>
					<div class="previewbox_btnn d-flex align-items-center">
						<div href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>">
							<?=GetMessage("MORE")?>
						</div>
					</div>
				<?endif;?>
			</div>
        <?if(!empty($arItem["PROPERTIES"]["LINK"]["VALUE"])):?>
            </a>
        <?else:?>
		    </div>
        <?endif;?>
	<?endforeach;?>
</div>