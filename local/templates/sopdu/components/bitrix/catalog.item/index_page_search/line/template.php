<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */

\CJSCore::Init(array('fx', 'popup', 'ajax'));

//$this->addExternalCss($templateFolder.'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css');
$this->addExternalJs($templateFolder.'/js/mustache.js');
$this->addExternalJs($templateFolder.'/js/action-pool.js');
$this->addExternalJs($templateFolder.'/js/filter.js');
$this->addExternalJs($templateFolder.'/js/component.js');


// IBLOCK_SECTION_ID



?>
<?//='<pre>'; print_r($item); '</pre>';?>

<div class="<?= (!$USER->IsAuthorized()) ? 'non-autorised' : '' ?> prod_item_list row">
	<img class="mr-3 mt-2 zoomhover" src="<?=$item["DETAIL_PICTURE"]["SRC"]?>" width="77px" height="77px">	
	<!-- <div id="hoveropen" class="hoveropen"><img src="/upload/img/zoom.png" width="30"></div> -->
	<div id="zoomimage" class="zoomimage" style="display: none;"><img src="<?=$item["DETAIL_PICTURE"]["SRC"]?>" width="200">
		<img class="closezoom" src="/upload/img/close.svg">
	</div>									
	<div class="col-4 nameandstatus">
		<div class="simprod_item_status d-flex justify-content-betwee p-0 m-0 mt-2 mb-1">
			 <?if($item["PROPERTIES"]["HIT"]["VALUE_XML_ID"] == 'Y'):?>
	            <div class="simprod_item_hit ">Хит</div>
	        <?endif;?>

	        <?if($item["PROPERTIES"]["NEW"]["VALUE_XML_ID"] == 'Y'):?>
	            <div class="simprod_item_new">Новинка</div>
	        <?endif;?>
		</div>
        <?#='<pre>'; print_r($item); '</pre>';?>

		<?/*<a href="<?=$item['DETAIL_PAGE_URL']?>"><div class="prod_item_list_name"><?=$item["NAME"]?></div></a>*/?>
		<a href="/catalog/<?=CIBlockSection::GetByID($item["IBLOCK_SECTION_ID"])->Fetch()["CODE"]?>/<?=$item["CODE"]?>/"><div class="prod_item_list_name"><?=$item["NAME"]?></div></a>
	</div>

	<div class="col-2">
        <?if ($USER->IsAuthorized()):?>
		<div class=" simprod_item_price text-center mt-4"><?=$item["MIN_PRICE"]["VALUE"]?>₽/ед.</div>
        <?endif;?>
		<?if(!empty($item["PROPERTIES"]["PACKAGE"]["VALUE"])):?>
	        <div class="samprod_kol">В упаковке <?=$item["PROPERTIES"]["PACKAGE"]["VALUE"]?>шт.</div>
	    <?endif;?>
	</div>

	<div class="col-4 cart_inner mt-4 fixcatalogbtnscart">
        <?if ($USER->IsAuthorized()):?>
		<div class="m-0 d-flex justify-content-center">
			<div class="d-flex justify-content-between counter-bg">
				<div class="subtract col-2 ">-</div>
	               <?/* <input type="number" min="1" value="1" class="amount col-2">*/?>
	            <input type="number" min="0" value="<?=$item["PROPERTIES"]["PACKAGE"]["VALUE"]?>" step="<?=$item["PROPERTIES"]["PACKAGE"]["VALUE"]?>" class="amount col-2">
	            <div class="add col-2 ">+</div>
	        </div>
            <?if(sopdu::inCard($item["ID"]) == 'N'):?>
                <div class="to-cart col-6" data-value="<?= $item['ADD_URL'];?>">
                    В корзину
                </div>
            <?else:?>
                <a id="ajaxaction=delete&ajaxdeleteid=<?=sopdu::inCard($item["ID"])?>" class="to-cart col-6" href="?drop_item=<?=sopdu::inCard($item["ID"])?>" style="background: #f2f2f2; color: #0A2752">
                    Удалить
                </a>
            <?endif;?>
		</div>
        <?endif;?>
	</div>
</div>
<?#='<pre>'; print_r($item); '</pre>';?>
<?#='<pre>'; print_r(sopdu::inCard($item["ID"])); '</pre>';?>
