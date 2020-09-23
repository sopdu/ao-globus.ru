<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
$this->addExternalCss('/bitrix/css/main/bootstrap.css');

$templateLibrary = array('popup', 'fx');
$currencyList = '';

if (!empty($arResult['CURRENCIES']))
{
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}

$templateData = array(
	'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
	'TEMPLATE_LIBRARY' => $templateLibrary,
	'CURRENCIES' => $currencyList,
	'ITEM' => array(
		'ID' => $arResult['ID'],
		'IBLOCK_ID' => $arResult['IBLOCK_ID'],
		'OFFERS_SELECTED' => $arResult['OFFERS_SELECTED'],
		'JS_OFFERS' => $arResult['JS_OFFERS']
	)
);
unset($currencyList, $templateLibrary);

$mainId = $this->GetEditAreaId($arResult['ID']);
$itemIds = array(
	'ID' => $mainId,
	'DISCOUNT_PERCENT_ID' => $mainId.'_dsc_pict',
	'STICKER_ID' => $mainId.'_sticker',
	'BIG_SLIDER_ID' => $mainId.'_big_slider',
	'BIG_IMG_CONT_ID' => $mainId.'_bigimg_cont',
	'SLIDER_CONT_ID' => $mainId.'_slider_cont',
	'OLD_PRICE_ID' => $mainId.'_old_price',
	'PRICE_ID' => $mainId.'_price',
	'DISCOUNT_PRICE_ID' => $mainId.'_price_discount',
	'PRICE_TOTAL' => $mainId.'_price_total',
	'SLIDER_CONT_OF_ID' => $mainId.'_slider_cont_',
	'QUANTITY_ID' => $mainId.'_quantity',
	'QUANTITY_DOWN_ID' => $mainId.'_quant_down',
	'QUANTITY_UP_ID' => $mainId.'_quant_up',
	'QUANTITY_MEASURE' => $mainId.'_quant_measure',
	'QUANTITY_LIMIT' => $mainId.'_quant_limit',
	'BUY_LINK' => $mainId.'_buy_link',
	'ADD_BASKET_LINK' => $mainId.'_add_basket_link',
	'BASKET_ACTIONS_ID' => $mainId.'_basket_actions',
	'NOT_AVAILABLE_MESS' => $mainId.'_not_avail',
	'COMPARE_LINK' => $mainId.'_compare_link',
	'TREE_ID' => $mainId.'_skudiv',
	'DISPLAY_PROP_DIV' => $mainId.'_sku_prop',
	'DISPLAY_MAIN_PROP_DIV' => $mainId.'_main_sku_prop',
	'OFFER_GROUP' => $mainId.'_set_group_',
	'BASKET_PROP_DIV' => $mainId.'_basket_prop',
	'SUBSCRIBE_LINK' => $mainId.'_subscribe',
	'TABS_ID' => $mainId.'_tabs',
	'TAB_CONTAINERS_ID' => $mainId.'_tab_containers',
	'SMALL_CARD_PANEL_ID' => $mainId.'_small_card_panel',
	'TABS_PANEL_ID' => $mainId.'_tabs_panel'
);
$obName = $templateData['JS_OBJ'] = 'ob'.preg_replace('/[^a-zA-Z0-9_]/', 'x', $mainId);
$name = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
	: $arResult['NAME'];
$title = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE']
	: $arResult['NAME'];
$alt = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']
	: $arResult['NAME'];

$haveOffers = !empty($arResult['OFFERS']);
if ($haveOffers)
{
	$actualItem = isset($arResult['OFFERS'][$arResult['OFFERS_SELECTED']])
		? $arResult['OFFERS'][$arResult['OFFERS_SELECTED']]
		: reset($arResult['OFFERS']);
	$showSliderControls = false;

	foreach ($arResult['OFFERS'] as $offer)
	{
		if ($offer['MORE_PHOTO_COUNT'] > 1)
		{
			$showSliderControls = true;
			break;
		}
	}
}
else
{
	$actualItem = $arResult;
	$showSliderControls = $arResult['MORE_PHOTO_COUNT'] > 1;
}

$skuProps = array();
$price = $actualItem['ITEM_PRICES'][$actualItem['ITEM_PRICE_SELECTED']];
$measureRatio = $actualItem['ITEM_MEASURE_RATIOS'][$actualItem['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'];
$showDiscount = $price['PERCENT'] > 0;

$showDescription = !empty($arResult['PREVIEW_TEXT']) || !empty($arResult['DETAIL_TEXT']);
$showBuyBtn = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION']);
$buyButtonClassName = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showAddBtn = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION']);
$showButtonClassName = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showSubscribe = $arParams['PRODUCT_SUBSCRIPTION'] === 'Y' && ($arResult['PRODUCT']['SUBSCRIBE'] === 'Y' || $haveOffers);

$arParams['MESS_BTN_BUY'] = $arParams['MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCE_CATALOG_BUY');
$arParams['MESS_BTN_ADD_TO_BASKET'] = $arParams['MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCE_CATALOG_ADD');
$arParams['MESS_NOT_AVAILABLE'] = $arParams['MESS_NOT_AVAILABLE'] ?: Loc::getMessage('CT_BCE_CATALOG_NOT_AVAILABLE');
$arParams['MESS_BTN_COMPARE'] = $arParams['MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCE_CATALOG_COMPARE');
$arParams['MESS_PRICE_RANGES_TITLE'] = $arParams['MESS_PRICE_RANGES_TITLE'] ?: Loc::getMessage('CT_BCE_CATALOG_PRICE_RANGES_TITLE');
$arParams['MESS_DESCRIPTION_TAB'] = $arParams['MESS_DESCRIPTION_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_DESCRIPTION_TAB');
$arParams['MESS_PROPERTIES_TAB'] = $arParams['MESS_PROPERTIES_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_PROPERTIES_TAB');
$arParams['MESS_COMMENTS_TAB'] = $arParams['MESS_COMMENTS_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_COMMENTS_TAB');
$arParams['MESS_SHOW_MAX_QUANTITY'] = $arParams['MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCE_CATALOG_SHOW_MAX_QUANTITY');
$arParams['MESS_RELATIVE_QUANTITY_MANY'] = $arParams['MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_MANY');
$arParams['MESS_RELATIVE_QUANTITY_FEW'] = $arParams['MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_FEW');

$positionClassMap = array(
	'left' => 'product-item-label-left',
	'center' => 'product-item-label-center',
	'right' => 'product-item-label-right',
	'bottom' => 'product-item-label-bottom',
	'middle' => 'product-item-label-middle',
	'top' => 'product-item-label-top'
);

$discountPositionClass = 'product-item-label-big';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
{
	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
	{
		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$labelPositionClass = 'product-item-label-big';
if (!empty($arParams['LABEL_PROP_POSITION']))
{
	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
	{
		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}
?>



<div class="about_title text-body mt-3 mb-3"><?=$arResult["NAME"]?></div>
<div class="d-flex justify-content-between">
    <div class="productpage_preview">
        <div class="simprod_item_status d-flex justify-content-betwee">
            <?if(!empty($arResult["PROPERTIES"]["HIT"]["VALUE"])):?>
                <div class="simprod_item_hit ">Хит</div>
            <?endif;?>
            <?if(!empty($arResult["PROPERTIES"]["NEW"]["VALUE"])):?>
                <div class="simprod_item_new ">Новинка</div>
            <?endif?>
        </div>
        <div class="slider-wrapper">
            <div class="slider-for">
                <div><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"></div>
                <?if(!empty($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"])):?>
                    <?foreach ($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $morePhoto):?>
                        <div><img src="<?=CFile::GetPath($morePhoto)?>"></div>
                    <?endforeach;?>
                <?endif;?>
            </div>
            <?if(!empty($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"])):?>
                <div class="slider-nav">
                    <div><img class="w-75" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"></div>
                    <?foreach ($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $morePhoto):?>
                        <div><img class="w-75" src="<?=CFile::GetPath($morePhoto)?>"></div>
                    <?endforeach;?>
                </div>
            <?endif;?>
        </div>
        <?/*
            <div class="adaptation_block">
                <?/*<div class="price_productp text-center mt-4 mb-5">320₽/уп</div>*//*?>
                <?if ($USER->IsAdmin()):?>
                    <div class="price_productp text-center mt-4 mb-5"><?=explode(' ', $price['PRINT_RATIO_PRICE'])[0]?>₽/уп</div>
                    <div class="cart_price_productp d-flex justify-content-center">
                        <div class="row cart_price_productp_inp mr-5">
                            <div class="col-4 price_productp_subtract .subtract">
                                -
                            </div>
                            <input type="number">
                            <div class="col-4 price_productp_add .add">
                                +
                            </div>
                        </div>

                        <div class="price_productp_to_cart">
                            В корзину
                        </div>
                    </div>
                <?endif;?>
                <div class="productpage_specs m0auto row d-flex justify-content-between p-2 flex-nowrap text-nowrap" >
                    <div>
                        <span class="specsmover">Характеристики:</span><br>
                        <span>Длина</span><br>
                        <span>Ширина</span><br>
                        <span>Толщина</span><br>
                        <span>Форма</span><br>
                        <span>Покрытие</span><br>
                        <span>Кол-во в упак.</span><br>
                    </div>
                    <div>
                        <br>
                        <span>22 мм</span><br>
                        <span>7 мм</span><br>
                        <span>0,8 мм</span><br>
                        <span>круглая</span><br>
                        <span>без покрытия</span><br>
                        <span>100 шт.</span><br>
                    </div>
                </div>
            </div>
        */?>
        <div id="description_description">
            <div class="descript_picker d-flex justify-content-betwee mt60 mb-4">
                <?if(!empty($arResult["DETAIL_TEXT"])):?>
                    <a><div id="p_descr" class="descript_picker_description_title text-center active_product">Описание</div></a>
                <?endif;?>
                <?if(!empty($arResult["PROPERTIES"]["VIDEO"]["VALUE"])):?>
                    <a  id="p_video"><div class="descript_picker_video pl-4">Видео</div></a>
                <?endif;?>
            </div>
            <?if(!empty($arResult["DETAIL_TEXT"])):?>
                <div class="descript_picker_description" style="animation: simprod_item_anim 0.6s;">
                    <p><?=$arResult["DETAIL_TEXT"]?></p>
                </div>
            <?endif;?>
            <?if(!empty($arResult["PROPERTIES"]["VIDEO"]["VALUE"])):?>
                <div class="descript_picker_video_con" style="display: none; animation: simprod_item_anim 0.6s;">
                    <iframe width="100%" height="424" src="<?=$arResult["PROPERTIES"]["VIDEO"]["VALUE"]?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            <?endif;?>
        </div>
        <script>
            document.querySelector('#p_descr').addEventListener('click', function(){
                document.querySelector('.descript_picker_description').style.display = "block";
                document.querySelector('.descript_picker_video_con').style.display = "none";
            });

            document.querySelector('#p_video').addEventListener('click', function(){
                document.querySelector('.descript_picker_description').style.display = "none";
                document.querySelector('.descript_picker_video_con').style.display = "block";
            });
            document.getElementById('p_video').onclick = function() {
                document.getElementById('p_video').classList.add('active_product');
                document.getElementById('p_descr').classList.remove('active_product');
            }
            document.getElementById('p_descr').onclick = function() {
                document.getElementById('p_descr').classList.add('active_product');
                document.getElementById('p_video').classList.remove('active_product');
            }

        </script>
    </div>
        <div class="">
            <div class="stickyfor" id="fixed">
                <?if($USER->IsAuthorized()):?>
                <div class="price_productp mb-4 adaptation_none"><?=explode(' ', $price['PRINT_RATIO_PRICE'])[0]?>₽/уп</div>
                <div class="cart_price_productp d-flex justify-content-center adaptation_none">
                    <div class="row cart_price_productp_inp mr-3">
                        <div class="col-4 price_productp_subtract">
                            -
                        </div>
                        <div class="col-4 price_productp_amount">
                            1
                        </div>
                        <div class="col-4 price_productp_add">
                            +
                        </div>
                    </div>

                    <div class="price_productp_to_cart">
                        В корзину
                    </div>
                </div>
                <?endif?>
                <div class="productpage_specs adaptation_none row d-flex justify-content-between p-2 flex-nowrap text-nowrap ">
                    <div class="w-100">
                        <span class="specsmover">Характеристики:</span><br>
                        <?foreach ($arResult["DISPLAY_PROPERTIES"] as $disProp):?>
                            <?if(!empty($disProp["VALUE"])):?>
                                <div class="d-flex justify-content-between w-100">
                                    <div><?=$disProp["NAME"]?></div>
                                    <div><?=$disProp["VALUE"]?></div>
                                </div>
                            <?endif;?>
                        <?endforeach;?>
                        <?/*
                        <span class="specsmover">Характеристики:</span><br>
                        <div class="d-flex justify-content-between w-100">
                            <div>Длина</div><div>22 мм</div>
                        </div>
                        <div class="d-flex justify-content-between w-100">
                            <div>Ширина</div><div>7 мм</div>
                        </div>
                        <div class="d-flex justify-content-between w-100">
                            <div>Толщина</div><div>0,8 мм</div>
                        </div>
                        <div class="d-flex justify-content-between w-100">
                            <div>Форма</div><div>круглая</div>
                        </div>
                        <div class="d-flex justify-content-between w-100">
                            <div>Покрытие</div><div>без покрытия</div>
                        </div>
                        <div class="d-flex justify-content-between w-100">
                            <div>Кол-во в упак.</div><div>100 шт.</div>
                        </div>
                        */?>
                    </div>
                </div>
            </div><?#='<pre>'; print_r($arResult["DISPLAY_PROPERTIES"]); '</pre>';?>
        </div>
    </div>
</div>






    <script type="text/javascript">
        $(document).ready(function () {
            var offset = $('#fixed').offset();
            var topPadding = 0;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
                    $('#fixed').stop().animate({marginTop: 890});
                }
                else {
                    $('#fixed').stop().animate({marginTop: 0});
                }
            });
        });
    </script>





<script>
	BX.message({
		ECONOMY_INFO_MESSAGE: '<?=GetMessageJS('CT_BCE_CATALOG_ECONOMY_INFO2')?>',
		TITLE_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_ERROR')?>',
		TITLE_BASKET_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_BASKET_PROPS')?>',
		BASKET_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_BASKET_UNKNOWN_ERROR')?>',
		BTN_SEND_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_SEND_PROPS')?>',
		BTN_MESSAGE_BASKET_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_BASKET_REDIRECT')?>',
		BTN_MESSAGE_CLOSE: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE')?>',
		BTN_MESSAGE_CLOSE_POPUP: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE_POPUP')?>',
		TITLE_SUCCESSFUL: '<?=GetMessageJS('CT_BCE_CATALOG_ADD_TO_BASKET_OK')?>',
		COMPARE_MESSAGE_OK: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_OK')?>',
		COMPARE_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_UNKNOWN_ERROR')?>',
		COMPARE_TITLE: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_TITLE')?>',
		BTN_MESSAGE_COMPARE_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT')?>',
		PRODUCT_GIFT_LABEL: '<?=GetMessageJS('CT_BCE_CATALOG_PRODUCT_GIFT_LABEL')?>',
		PRICE_TOTAL_PREFIX: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_PRICE_TOTAL_PREFIX')?>',
		RELATIVE_QUANTITY_MANY: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_MANY'])?>',
		RELATIVE_QUANTITY_FEW: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_FEW'])?>',
		SITE_ID: '<?=CUtil::JSEscape($component->getSiteId())?>'
	});

	var <?=$obName?> = new JCCatalogElement(<?=CUtil::PhpToJSObject($jsParams, false, true)?>);
</script>
<?
unset($actualItem, $itemIds, $jsParams);