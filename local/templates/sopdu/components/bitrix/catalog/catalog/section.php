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
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

$this->setFrameMode(true);
$this->addExternalCss("/bitrix/css/main/bootstrap.css");

if (!isset($arParams['FILTER_VIEW_MODE']) || (string)$arParams['FILTER_VIEW_MODE'] == '')
	$arParams['FILTER_VIEW_MODE'] = 'VERTICAL';
$arParams['USE_FILTER'] = (isset($arParams['USE_FILTER']) && $arParams['USE_FILTER'] == 'Y' ? 'Y' : 'N');

$isVerticalFilter = ('Y' == $arParams['USE_FILTER'] && $arParams["FILTER_VIEW_MODE"] == "VERTICAL");
$isSidebar = ($arParams["SIDEBAR_SECTION_SHOW"] == "Y" && isset($arParams["SIDEBAR_PATH"]) && !empty($arParams["SIDEBAR_PATH"]));
$isFilter = ($arParams['USE_FILTER'] == 'Y');

if ($isFilter)
{
	$arFilter = array(
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ACTIVE" => "Y",
		"GLOBAL_ACTIVE" => "Y",
	);
	if (0 < intval($arResult["VARIABLES"]["SECTION_ID"]))
		$arFilter["ID"] = $arResult["VARIABLES"]["SECTION_ID"];
	elseif ('' != $arResult["VARIABLES"]["SECTION_CODE"])
		$arFilter["=CODE"] = $arResult["VARIABLES"]["SECTION_CODE"];

	$obCache = new CPHPCache();
	if ($obCache->InitCache(36000, serialize($arFilter), "/iblock/catalog"))
	{
		$arCurSection = $obCache->GetVars();
	}
	elseif ($obCache->StartDataCache())
	{
		$arCurSection = array();
		if (Loader::includeModule("iblock"))
		{
			$dbRes = CIBlockSection::GetList(array(), $arFilter, false, array("ID"));

			if(defined("BX_COMP_MANAGED_CACHE"))
			{
				global $CACHE_MANAGER;
				$CACHE_MANAGER->StartTagCache("/iblock/catalog");

				if ($arCurSection = $dbRes->Fetch())
					$CACHE_MANAGER->RegisterTag("iblock_id_".$arParams["IBLOCK_ID"]);

				$CACHE_MANAGER->EndTagCache();
			}
			else
			{
				if(!$arCurSection = $dbRes->Fetch())
					$arCurSection = array();
			}
		}
		$obCache->EndDataCache($arCurSection);
	}
	if (!isset($arCurSection))
		$arCurSection = array();
}

$zaprosSectionName = CIBlockSection::GetList(
    [],
    [
        "IBLOCK_ID" =>  2,
        "CODE"      =>  $arResult["VARIABLES"]["SECTION_CODE"]
    ],
    false,
    []
);
$resSection = $zaprosSectionName->Fetch();
session_start();
if(empty($_SESSION["sopdu"]["catalog"]["view"])){
    $_SESSION["sopdu"]["catalog"]["view"] = 'tile';
}
if(!empty($_GET["view"])){
    $_SESSION["sopdu"]["catalog"]["view"] = $_GET["view"];
}
?>
<div class="container" id="adapt_none_head">
    <div class="d-flex justify-content-between">
        <div class="about_title text-body mb-5"><?=$resSection["NAME"]?></div>
        <div class="d-flex justify-content-between">
            <a href="?view=list">
                <img class="mr-2 adaptation_none listpick gridactive1" src="<?=SITE_TEMPLATE_PATH?>/img/list_active.svg">
            </a>
            <a href="?view=tile">
                <img class="adaptation_none gridpick gridactive2" src="<?=SITE_TEMPLATE_PATH?>/img/grid_active.svg" >
            </a>
        </div>
    </div>
    <div class="adaptation_flex filtpicker mb-3" style="display: none;">
        <div id="opencatalog">
            <span><img src="<?=SITE_TEMPLATE_PATH?>/img/catalog/list_a.svg"></span>Каталог<span></span>
        </div> 
        <div id="openfilters">
            <span><img src="<?=SITE_TEMPLATE_PATH?>/img/catalog/filter_a.svg"></span>Фильтры<span></span>
        </div>
    </div>



     <div class="catalog_mobile">
        	<div class="catalog-mobile-header">
        		<span class="header-text">Каталог</span>
        		<span class="catalog-close">Закрыть</span>
        	</div>
			<?$APPLICATION->IncludeComponent(
			    "sopdu:section.filter",
			    "",
			Array()
			);?>
		</div>
    <?include($_SERVER["DOCUMENT_ROOT"]."/".$this->GetFolder()."/section_vertical.php");?>
</div>