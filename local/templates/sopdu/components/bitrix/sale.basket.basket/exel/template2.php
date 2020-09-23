<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;

\Bitrix\Main\UI\Extension::load("ui.fonts.ruble");

/**
 * @var array $arParams
 * @var array $arResult
 * @var string $templateFolder
 * @var string $templateName
 * @var CMain $APPLICATION
 * @var CBitrixBasketComponent $component
 * @var CBitrixComponentTemplate $this
 * @var array $giftParameters
 */

if (!isset($arParams['DISPLAY_MODE']) || !in_array($arParams['DISPLAY_MODE'], array('extended', 'compact')))
{
	$arParams['DISPLAY_MODE'] = 'extended';
}

$arParams['USE_DYNAMIC_SCROLL'] = isset($arParams['USE_DYNAMIC_SCROLL']) && $arParams['USE_DYNAMIC_SCROLL'] === 'N' ? 'N' : 'Y';
$arParams['SHOW_FILTER'] = isset($arParams['SHOW_FILTER']) && $arParams['SHOW_FILTER'] === 'N' ? 'N' : 'Y';

$arParams['PRICE_DISPLAY_MODE'] = isset($arParams['PRICE_DISPLAY_MODE']) && $arParams['PRICE_DISPLAY_MODE'] === 'N' ? 'N' : 'Y';

if (!isset($arParams['TOTAL_BLOCK_DISPLAY']) || !is_array($arParams['TOTAL_BLOCK_DISPLAY']))
{
	$arParams['TOTAL_BLOCK_DISPLAY'] = array('top');
}

if (empty($arParams['PRODUCT_BLOCKS_ORDER']))
{
	$arParams['PRODUCT_BLOCKS_ORDER'] = 'props,sku,columns';
}

if (is_string($arParams['PRODUCT_BLOCKS_ORDER']))
{
	$arParams['PRODUCT_BLOCKS_ORDER'] = explode(',', $arParams['PRODUCT_BLOCKS_ORDER']);
}

$arParams['USE_PRICE_ANIMATION'] = isset($arParams['USE_PRICE_ANIMATION']) && $arParams['USE_PRICE_ANIMATION'] === 'N' ? 'N' : 'Y';
$arParams['EMPTY_BASKET_HINT_PATH'] = isset($arParams['EMPTY_BASKET_HINT_PATH']) ? (string)$arParams['EMPTY_BASKET_HINT_PATH'] : '/';
$arParams['USE_ENHANCED_ECOMMERCE'] = isset($arParams['USE_ENHANCED_ECOMMERCE']) && $arParams['USE_ENHANCED_ECOMMERCE'] === 'Y' ? 'Y' : 'N';
$arParams['DATA_LAYER_NAME'] = isset($arParams['DATA_LAYER_NAME']) ? trim($arParams['DATA_LAYER_NAME']) : 'dataLayer';
$arParams['BRAND_PROPERTY'] = isset($arParams['BRAND_PROPERTY']) ? trim($arParams['BRAND_PROPERTY']) : '';

if ($arParams['USE_GIFTS'] === 'Y')
{
	$arParams['GIFTS_BLOCK_TITLE'] = isset($arParams['GIFTS_BLOCK_TITLE']) ? trim((string)$arParams['GIFTS_BLOCK_TITLE']) : Loc::getMessage('SBB_GIFTS_BLOCK_TITLE');

	CBitrixComponent::includeComponentClass('bitrix:sale.products.gift.basket');

	$giftParameters = array(
		'SHOW_PRICE_COUNT' => 1,
		'PRODUCT_SUBSCRIPTION' => 'N',
		'PRODUCT_ID_VARIABLE' => 'id',
		'USE_PRODUCT_QUANTITY' => 'N',
		'ACTION_VARIABLE' => 'actionGift',
		'ADD_PROPERTIES_TO_BASKET' => 'Y',
		'PARTIAL_PRODUCT_PROPERTIES' => 'Y',

		'BASKET_URL' => $APPLICATION->GetCurPage(),
		'APPLIED_DISCOUNT_LIST' => $arResult['APPLIED_DISCOUNT_LIST'],
		'FULL_DISCOUNT_LIST' => $arResult['FULL_DISCOUNT_LIST'],

		'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
		'PRICE_VAT_INCLUDE' => $arParams['PRICE_VAT_SHOW_VALUE'],
		'CACHE_GROUPS' => $arParams['CACHE_GROUPS'],

		'BLOCK_TITLE' => $arParams['GIFTS_BLOCK_TITLE'],
		'HIDE_BLOCK_TITLE' => $arParams['GIFTS_HIDE_BLOCK_TITLE'],
		'TEXT_LABEL_GIFT' => $arParams['GIFTS_TEXT_LABEL_GIFT'],

		'DETAIL_URL' => isset($arParams['GIFTS_DETAIL_URL']) ? $arParams['GIFTS_DETAIL_URL'] : null,
		'PRODUCT_QUANTITY_VARIABLE' => $arParams['GIFTS_PRODUCT_QUANTITY_VARIABLE'],
		'PRODUCT_PROPS_VARIABLE' => $arParams['GIFTS_PRODUCT_PROPS_VARIABLE'],
		'SHOW_OLD_PRICE' => $arParams['GIFTS_SHOW_OLD_PRICE'],
		'SHOW_DISCOUNT_PERCENT' => $arParams['GIFTS_SHOW_DISCOUNT_PERCENT'],
		'DISCOUNT_PERCENT_POSITION' => $arParams['DISCOUNT_PERCENT_POSITION'],
		'MESS_BTN_BUY' => $arParams['GIFTS_MESS_BTN_BUY'],
		'MESS_BTN_DETAIL' => $arParams['GIFTS_MESS_BTN_DETAIL'],
		'CONVERT_CURRENCY' => $arParams['GIFTS_CONVERT_CURRENCY'],
		'HIDE_NOT_AVAILABLE' => $arParams['GIFTS_HIDE_NOT_AVAILABLE'],

		'PRODUCT_ROW_VARIANTS' => '',
		'PAGE_ELEMENT_COUNT' => 0,
		'DEFERRED_PRODUCT_ROW_VARIANTS' => \Bitrix\Main\Web\Json::encode(
			SaleProductsGiftBasketComponent::predictRowVariants(
				$arParams['GIFTS_PAGE_ELEMENT_COUNT'],
				$arParams['GIFTS_PAGE_ELEMENT_COUNT']
			)
		),
		'DEFERRED_PAGE_ELEMENT_COUNT' => $arParams['GIFTS_PAGE_ELEMENT_COUNT'],

		'ADD_TO_BASKET_ACTION' => 'BUY',
		'PRODUCT_DISPLAY_MODE' => 'Y',
		'PRODUCT_BLOCKS_ORDER' => isset($arParams['GIFTS_PRODUCT_BLOCKS_ORDER']) ? $arParams['GIFTS_PRODUCT_BLOCKS_ORDER'] : '',
		'SHOW_SLIDER' => isset($arParams['GIFTS_SHOW_SLIDER']) ? $arParams['GIFTS_SHOW_SLIDER'] : '',
		'SLIDER_INTERVAL' => isset($arParams['GIFTS_SLIDER_INTERVAL']) ? $arParams['GIFTS_SLIDER_INTERVAL'] : '',
		'SLIDER_PROGRESS' => isset($arParams['GIFTS_SLIDER_PROGRESS']) ? $arParams['GIFTS_SLIDER_PROGRESS'] : '',
		'LABEL_PROP_POSITION' => $arParams['LABEL_PROP_POSITION'],

		'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
		'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
		'BRAND_PROPERTY' => $arParams['BRAND_PROPERTY']
	);
}

\CJSCore::Init(array('fx', 'popup', 'ajax'));

//$this->addExternalCss($templateFolder.'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css');

$this->addExternalJs($templateFolder.'/js/mustache.js');
$this->addExternalJs($templateFolder.'/js/action-pool.js');
$this->addExternalJs($templateFolder.'/js/filter.js');
$this->addExternalJs($templateFolder.'/js/component.js');

$mobileColumns = isset($arParams['COLUMNS_LIST_MOBILE'])
	? $arParams['COLUMNS_LIST_MOBILE']
	: $arParams['COLUMNS_LIST'];
$mobileColumns = array_fill_keys($mobileColumns, true);

$jsTemplates = new Main\IO\Directory(Main\Application::getDocumentRoot().$templateFolder.'/js-templates');
/** @var Main\IO\File $jsTemplate */
foreach ($jsTemplates->getChildren() as $jsTemplate)
{
	include($jsTemplate->getPath());
}

$displayModeClass = $arParams['DISPLAY_MODE'] === 'compact' ? ' basket-items-list-wrapper-compact' : '';

if (empty($arResult['ERROR_MESSAGE']))
{
	if ($arParams['USE_GIFTS'] === 'Y' && $arParams['GIFTS_PLACE'] === 'TOP')
	{
		?>
		<div data-entity="parent-container">
			<div class="catalog-block-header"
					data-entity="header"
					data-showed="false"
					style="display: none; opacity: 0;">
				<?=$arParams['GIFTS_BLOCK_TITLE']?>
			</div>
			<?
			$APPLICATION->IncludeComponent(
				'bitrix:sale.products.gift.basket',
				'bootstrap_v4',
				$giftParameters,
				$component
			);
			?>
		</div>
		<?
	}

	if ($arResult['BASKET_ITEM_MAX_COUNT_EXCEEDED'])
	{
		?>
		<div id="basket-item-message">
			<?=Loc::getMessage('SBB_BASKET_ITEM_MAX_COUNT_EXCEEDED', array('#PATH#' => $arParams['PATH_TO_BASKET']))?>
		</div>
		<?
	}
	?>
<?
    //  [PRODUCT_ID] => 122
    function getSection($prodictID){
        $sectionID = CIBlockElement::GetByID($prodictID)->Fetch()["IBLOCK_SECTION_ID"];
        $section = CIBlockSection::GetByID($sectionID)->Fetch();
        return [
            "ID"    =>  $section["ID"],
            "NAME"  =>  $section["NAME"],
        ];
    }
    foreach ($arResult["GRID"]["ROWS"] as $key => $rows){
        $castomItem[getSection($rows["PRODUCT_ID"])["ID"]] = getSection($rows["PRODUCT_ID"]);
        $castomItem[getSection($rows["PRODUCT_ID"])["ID"]]["ITEM"][$key] = $rows;
        $castomItem[getSection($rows["PRODUCT_ID"])["ID"]]["ITEM"][$key]["SECTION"] = getSection($rows["PRODUCT_ID"]);
    }
    $arPriceResult = explode(' ', $arResult["allSum_FORMATED"]);
    array_pop($arPriceResult);
?>
<?#='<pre>'; print_r($castomItem); '</pre>';?>
<?#='<pre>'; print_r(getSection(122)); '</pre>';?>
<div class="container" id="adapt_none_head">
    <div class="row">
        <div class="col-9 colfix">
            <div class="about_title text-body mb-4">Корзина</div>
            <?foreach ($castomItem as $cItem):?>
                <div class="basket_container_title mb-3"><?=$cItem["NAME"]?></div>
                <div class="basket_container">
                    <div class="basket_item row">
                        <?#='<pre>'; print_r($cItem); '</pre>';?>
                        <?foreach ($cItem["ITEM"] as $item):?>
                            <div class="col-6 basket_item_name"><?=$item["NAME"]?></div>
                            <div class="col-2 basket_item_price"><?=explode(' ', $item["SUM"])[0]?>₽/ед</div>
                            <div class="col-4 adaptation_flex d-flex justify-content-around">
                                <!-- <div class="basket_item_cart colfix50">
                                    <span>-</span>
                                    <span>100</span>
                                    <span>+</span>
                                </div> -->
                                <td class="basket-items-list-item-amount">
	                                <div class="basket-item-block-amount" data-entity="basket-item-quantity-block">
										<span class="basket-item-amount-btn-minus" data-entity="basket-item-quantity-minus"></span>
										<div class="basket-item-amount-filed-block">
											<input type="text" class="basket-item-amount-filed" value="<?=$item['QUANTITY']?>"
												data-value="<?=$item['QUANTITY']?>" data-entity="basket-item-quantity-field"
												id="basket-item-quantity-<?=$item['ID']?>">
										</div>
										<span class="basket-item-amount-btn-plus" data-entity="basket-item-quantity-plus"></span>
									</div>
								</td>
                                <div class="basket_item_delete"><img src="<?=SITE_TEMPLATE_PATH?>/img/delete.svg" alt=""></div>
                            </div>
                        <?endforeach;?>
                    </div>
                </div>
            <?endforeach;?>

            <div class="basket_order row mt-4 mb-5 w-100 ml-0">
                <div class="col ml-4 basket_order_btn">Оформить заказ</div>
                <div class="col text-center basket_order_cost ml-5">Стоимость</div>
                <div class="col text-center basket_order_price"><?foreach ($arPriceResult as $priceResult) { echo $priceResult.' '; }?>₽</div>
                <div class="col dwnld_prnt">
                    <span class="text-center mr-2">Скачать в Excel</span><span><img src="img/exel.svg" alt=""></span><br>
                    <span class="text-center mr-2 ml-4">Печать</span><span><img src="img/printer.svg" alt=""></span>
                </div>
            </div>

            <div class="basket_order_a m0auto container mt-3 mb-4 p-4 adaptation_block">
                <div class="d-flex justify-content-center">
                    <div class="mr-5">
                        <span>Стоимость</span><br>
                        <span>Вес</span><br>
                        <span>Объем</span>
                    </div>

                    <div>
                        <span class="basket_order_a_price"><?foreach ($arPriceResult as $priceResult) { echo $priceResult.' '; }?>₽</span><br>
                        <span class="float-right"><?=$arResult["allWeight_FORMATED"]?></span><br>
                        <span class="float-right mt-3">1.5м2</span>
                    </div>
                </div>
                <div class="m0auto text-center mt-4 w-100 basket_order_btn_a">Оформить заказ</div>

                <div class="text-center mt-2 dwnld_after">Скачать в Excel</div>
                <div class="text-center print_after">Печать</div>
            </div>
        </div>

        <div class="col-3 adaptation_none_flex sticky-block" id="fixed">
                <div class="result_r pl-3 pr-3 inner">
                    <div class="row">
                        <div class="col mt-4 mb-2">Стоимость</div>
                        <div class="col mt-4 mb-2 text-right price_col"><?foreach ($arPriceResult as $priceResult) { echo $priceResult.' '; }?>₽</div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">Вес</div>
                        <div class="col mb-3"><span class="text-right w-75"><?=$arResult["allWeight_FORMATED"]?></span></div>
                    </div>
                    <div class="row">
                        <div class="col mb-2">Объем</div>
                        <div class="col mb-2"><span class="text-right w-75">1.5м2</span></div>
                    </div>
                    <div class="col text-center pl-5 mt-4 mb-2 basket_order_btn">Оформить заказ</div>
                    <span class="text-center dwnld_res">Скачать в Excel</span><span class="ml-2"><img src="img/exel.svg">
					</span><br>
                    <span class="text-center dwnld_resplus">Печать</span><span class="ml-2"><img src="img/printer.svg">
					</span>
                </div>
                <div class="your_manager mt-4">
                    <div class="row">
                        <div class="col-4"><img class="mt-5 ml-3" src="img/face.png"></div>
                        <div class="col-8 info">
                            <div class="title mt-3 mb-3">Ваш менеджер</div>
                            <div class="name mb-3">Шилова Наталья Натальевна</div>
                            <span><img class="mr-2 " src="img/mail.svg"></span><span class=" mb-2">info@ao-globus.ru</span><br>
                            <span><img class="mr-2" src="img/phone.svg"></span><span>8 800 555-55-55</span>
                        </div>
                    </div>
                </div>
            </div>




    </div>
</div>
<?php/*
    <script type="text/javascript">
        $(window).scroll(function() {
            var sb_m = -11; /* отступ сверху и снизу *//*
            var mb = 250; /* высота подвала с запасом *//*
            var st = $(window).scrollTop();
            var sb = $(".sticky-block");
            var sbi = $(".sticky-block .inner");
            var sb_ot = sb.offset().top;
            var sbi_ot = sbi.offset().top;
            var sb_h = sb.height();

            if(sb_h + $(document).scrollTop() + sb_m + mb < $(document).height()) {
                if(st > sb_ot) {
                    var h = Math.round(st - sb_ot) + sb_m;
                    sb.css({"paddingTop" : h});
                }
                else {
                    sb.css({"paddingTop" : 0});
                }
            }
        });
    </script>
*/?>
    <?//='<pre>'; print_r($arResult); '</pre>';?>

	<div id="basket-root" class="bx-basket bx-<?=$arParams['TEMPLATE_THEME']?> bx-step-opacity" style="opacity: 0;">
		<?
		if (
			$arParams['BASKET_WITH_ORDER_INTEGRATION'] !== 'Y'
			&& in_array('top', $arParams['TOTAL_BLOCK_DISPLAY'])
		)
		{
			?>
			<div class="row">
				<div class="col" data-entity="basket-total-block"></div>
			</div>
			<?
		}
		?>

		<div class="row">
			<div class="col">
				<div class="alert alert-warning alert-dismissable" id="basket-warning" style="display: none;">
					<span class="close" data-entity="basket-items-warning-notification-close">&times;</span>
					<div data-entity="basket-general-warnings"></div>
					<div data-entity="basket-item-warnings">
						<?=Loc::getMessage('SBB_BASKET_ITEM_WARNING')?>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="mb-3 basket-items-list-wrapper basket-items-list-wrapper-height-fixed basket-items-list-wrapper-light<?=$displayModeClass?>"
					id="basket-items-list-wrapper">
					<div class="basket-items-list-header" data-entity="basket-items-list-header">
						<div class="basket-items-search-field" data-entity="basket-filter">
							<div class="form input-group">
								<input type="text" class="form-control" placeholder="<?=Loc::getMessage('SBB_BASKET_FILTER')?>" data-entity="basket-filter-input">
							</div>
							<button class="basket-items-search-clear-btn" type="button" data-entity="basket-filter-clear-btn">&times;</button>
						</div>

						<div class="basket-items-list-header-filter">
							<a href="javascript:void(0)" class="basket-items-list-header-filter-item active" data-entity="basket-items-count" data-filter="all" style="display: none;"></a>
							<a href="javascript:void(0)" class="basket-items-list-header-filter-item" data-entity="basket-items-count" data-filter="similar" style="display: none;"></a>
							<a href="javascript:void(0)" class="basket-items-list-header-filter-item" data-entity="basket-items-count" data-filter="warning" style="display: none;"></a>
							<a href="javascript:void(0)" class="basket-items-list-header-filter-item" data-entity="basket-items-count" data-filter="delayed" style="display: none;"></a>
							<a href="javascript:void(0)" class="basket-items-list-header-filter-item" data-entity="basket-items-count" data-filter="not-available" style="display: none;"></a>
						</div>
					</div>
					<div class="basket-items-list-container" id="basket-items-list-container">
						<div class="basket-items-list-overlay" id="basket-items-list-overlay" style="display: none;"></div>
						<div class="basket-items-list" id="basket-item-list">
							<div class="basket-search-not-found" id="basket-item-list-empty-result" style="display: none;">
								<div class="basket-search-not-found-icon"></div>
								<div class="basket-search-not-found-text"><?=Loc::getMessage('SBB_FILTER_EMPTY_RESULT')?></div>
							</div>
							<table class="basket-items-list-table" id="basket-item-table"></table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?
		if (
			$arParams['BASKET_WITH_ORDER_INTEGRATION'] !== 'Y'
			&& in_array('bottom', $arParams['TOTAL_BLOCK_DISPLAY'])
		)
		{
			?>
			<div class="row">
				<div class="col" data-entity="basket-total-block"></div>
			</div>
			<?
		}
		?>
	</div>
	<?
	if (!empty($arResult['CURRENCIES']) && Main\Loader::includeModule('currency'))
	{
		CJSCore::Init('currency');

		?>
		<script>
			BX.Currency.setCurrencies(<?=CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true)?>);
		</script>
		<?
	}

	$signer = new \Bitrix\Main\Security\Sign\Signer;
	$signedTemplate = $signer->sign($templateName, 'sale.basket.basket');
	$signedParams = $signer->sign(base64_encode(serialize($arParams)), 'sale.basket.basket');
	$messages = Loc::loadLanguageFile(__FILE__);
	?>
	<script>
		BX.message(<?=CUtil::PhpToJSObject($messages)?>);
		BX.Sale.BasketComponent.init({
			result: <?=CUtil::PhpToJSObject($arResult, false, false, true)?>,
			params: <?=CUtil::PhpToJSObject($arParams)?>,
			template: '<?=CUtil::JSEscape($signedTemplate)?>',
			signedParamsString: '<?=CUtil::JSEscape($signedParams)?>',
			siteId: '<?=CUtil::JSEscape($component->getSiteId())?>',
			siteTemplateId: '<?=CUtil::JSEscape($component->getSiteTemplateId())?>',
			templateFolder: '<?=CUtil::JSEscape($templateFolder)?>'
		});
	</script>
	<?
	if ($arParams['USE_GIFTS'] === 'Y' && $arParams['GIFTS_PLACE'] === 'BOTTOM')
	{
		?>
		<div data-entity="parent-container">
			<div class="catalog-block-header"
					data-entity="header"
					data-showed="false"
					style="display: none; opacity: 0;">
				<?=$arParams['GIFTS_BLOCK_TITLE']?>
			</div>
			<?
			$APPLICATION->IncludeComponent(
				'bitrix:sale.products.gift.basket',
				'bootstrap_v4',
				$giftParameters,
				$component
			);
			?>
		</div>
		<?
	}
}
elseif ($arResult['EMPTY_BASKET'])
{
	include(Main\Application::getDocumentRoot().$templateFolder.'/empty.php');
}
else
{
	ShowError($arResult['ERROR_MESSAGE']);
}