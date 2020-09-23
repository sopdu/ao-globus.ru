<?

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main,
	Bitrix\Main\Localization\Loc,
	Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs("/bitrix/components/bitrix/sale.order.payment.change/templates/bootstrap_v4/script.js");
Asset::getInstance()->addCss("/bitrix/components/bitrix/sale.order.payment.change/templates/bootstrap_v4/style.css");
CJSCore::Init(array('clipboard', 'fx'));

$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];

 

if (!empty($arResult['ERRORS']['FATAL']))
{
	foreach($arResult['ERRORS']['FATAL'] as $code => $error)
	{
		if ($code !== $component::E_NOT_AUTHORIZED)
			ShowError($error);
	}
	$component = $this->__component;
	if ($arParams['AUTH_FORM_IN_TEMPLATE'] && isset($arResult['ERRORS']['FATAL'][$component::E_NOT_AUTHORIZED]))
	{
		?>
		<div class="row">
			<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
				<div class="alert alert-danger"><?=$arResult['ERRORS']['FATAL'][$component::E_NOT_AUTHORIZED]?></div>
			</div>
			<? $authListGetParams = array(); ?>
			<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
				<?$APPLICATION->AuthForm('', false, false, 'N', false);?>
			</div>
		</div>
		<?
	}

}
else
{
	if (!empty($arResult['ERRORS']['NONFATAL']))
	{
		foreach($arResult['ERRORS']['NONFATAL'] as $error)
		{
			ShowError($error);
		}
	}
	if (!count($arResult['ORDERS']))
	{
		if ($_REQUEST["filter_history"] == 'Y')
		{
			if ($_REQUEST["show_canceled"] == 'Y')
			{
				?>
				<h3><?= Loc::getMessage('SPOL_TPL_EMPTY_CANCELED_ORDER')?></h3>
				<?
			}
			else
			{
				?>
				<h3><?= Loc::getMessage('SPOL_TPL_EMPTY_HISTORY_ORDER_LIST')?></h3>
				<?
			}
		}
		else
		{
			?>
			<h3><?= Loc::getMessage('SPOL_TPL_EMPTY_ORDER_LIST')?></h3>
			<?
		}
	}
	?>

	















				
		<div class="about_title text-body mb-4 mt-3 mb-1">Личный кабинет</div>
		<div class="row accpageblock">
			<div class="col-3 fixpickaccorhist">
				<div class="pickaccorhist">
					<a href="/personal/private/"><div id="active_acc" class="<?=($url == '/personal/private/') ? 'active_paoh' : '' ?> pick_acc">Профиль организации</div></a>
					<a href="/personal/orders/"><div id="active_history" class="<?=($url == '/personal/orders/') ? 'active_paoh' : '' ?> pick_history">История заказов</div></a>
				</div>

				<?$APPLICATION->IncludeComponent(
                "sopdu:your_manager",
                "",
                Array()
            );?>
			</div>

			<div class="historyblock">
				<div class="col-12">
					<?foreach ($arResult['ORDERS'] as $key => $order):?>
					<pre><?// print_r($order) ?></pre>
						<div class="d-flex justify-content-between order_inf">
							<div class="mt-2 mb-3 gren_send">Заказ <?=$order['ORDER']['DATE_INSERT_FORMATED']?> - <span><?=($order['ORDER']['STATUS_ID'] == 'N') ? 'В обработке' : 'Доставлен'?></span></div>
							<div>
								<a class="excel-link" href="/personal/cart/exel.php">
			                        <span class="text-center dwnld_res">Скачать в Excel</span><span class="ml-2"><img src="/upload/img/exel.svg"></span>
			                    </a>
							</div>
						</div>

						<?foreach ($order['BASKET_ITEMS'] as $key => $item): 
							$arSelect = Array("PREVIEW_PICTURE");
							$arFilter = Array("IBLOCK_ID"=> "2", "ID" => $item['PRODUCT_ID']);
							$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
							while($ob = $res->GetNextElement()){
								$arFields = $ob->GetFields();
								$img =CFile::getPath($arFields['PREVIEW_PICTURE']);
							}
						?>
						

							<div class="history_items">
								<div class="history_item row adaptation_flex_invers">
									<img class="personal-good-img " src="<?=$img?>" width="77px">
									<span class="history_item_title col-6"><?=$item['NAME']?></span>
									<span class="history_item_colvo col-2"><?=$item['QUANTITY'].' '.$item['MEASURE_TEXT']?> </span>
									<span class="history_item_price col-2"><?=number_format($item['BASE_PRICE'], 0, '', ' ' )?>₽/уп</span>
								</div>
							</div>
						<?endforeach?>
						<a href="<?=htmlspecialcharsbx($order["ORDER"]["URL_TO_COPY"])?>"><div class="order_again m0auto mt-3 mb-5">Заказать повторно</div></a>
					<?endforeach?>

				</div>
			</div>

		</div>


		

		<div style="display: none;" class="adaptation_block">
		<?$APPLICATION->IncludeComponent(
                "sopdu:your_manager",
                "",
                Array()
            );?>
        </div>



<?

	echo $arResult["NAV_STRING"];

	if ($_REQUEST["filter_history"] !== 'Y')
	{
		$javascriptParams = array(
			"url" => CUtil::JSEscape($this->__component->GetPath().'/ajax.php'),
			"templateFolder" => CUtil::JSEscape($templateFolder),
			"templateName" => $this->__component->GetTemplateName(),
			"paymentList" => $paymentChangeData,
			"returnUrl" => CUtil::JSEscape($arResult["RETURN_URL"]),
		);
		$javascriptParams = CUtil::PhpToJSObject($javascriptParams);
		?>
		<script>
			BX.Sale.PersonalOrderComponent.PersonalOrderList.init(<?=$javascriptParams?>);
		</script>
		<?
	}
}
?>
