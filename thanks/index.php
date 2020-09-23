<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Спасибо за заказ");
?>
<?
$res = CSaleOrder::GetList(Array("DATE_INSERT"=>"DESC"),Array("USER_ID" => $USER->GetID()),false,false,array('PRICE'),array());
if($ar_sales = $res->Fetch()){
	$price = $ar_sales['PRICE'];
}
if(!empty($_POST["8d51ce293f5debde37d848d29a735342"])) {
    $arFilter = ["USER_ID" => $USER->GetID()];
    $db_sales = CSaleOrder::GetList([], $arFilter);
    $ids = [];
    while ($ar_sales = $db_sales->Fetch()) {
        $ids[] = $ar_sales['ID']; // сохраняем все id
    }
    $orderId = $ids[count($ids) - 1];
    CSaleOrder::Update($orderId, ["USER_DESCRIPTION" => $_POST["8d51ce293f5debde37d848d29a735342"]["message"]]);
}
?>
			<div id="adapt_none_head">
		<div class="ultralowcontainer text-center">
			<img src="/upload/img/smile.svg" class="mt-5 mb-3">
			<div class="bigthx">Спасибо за заказ</div>
			<div class="mt-4 priceofthx">Стоимость заказа</div>
			<div class="mb-2 pricethx"><?=number_format($price, 0, ',', ' ' );?>₽</div>
            <form method="post">
                <div class="contpage_order mt-5 mbfix_order">
                    <div class="cont_title text-center">Оставите комментарий к заказу?</div>
                    <div class="d-flex justify-content-between adaptation_block">
                        <input class="mt-2" type="messege" name="8d51ce293f5debde37d848d29a735342[message]" placeholder="Комментарий">
                    </div>
                    <button class="mt-4" type="submit">Отправить</button>
                </div>
            </form>
			<?$APPLICATION->IncludeComponent(
                "sopdu:your_manager",
                "",
                Array()
            );?>
		</div>
	</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>