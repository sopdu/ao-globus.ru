<?php
/**
 * Created by PhpStorm.
 * User: akorolev
 * Date: 01.10.2018
 * Time: 11:59
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
global $APPLICATION;

use Bitrix\Main\Localization\Loc;

/**
 * $arResult=[
 *   PRODUCT_ID => int
 *   user => [NAME,PHONE, EMAIL]
 *
 *
 * ];
 */
$data = [
    "PRODUCT_ID" => $arResult['PRODUCT_ID']
];
$data = json_encode($data);

CUtil::InitJSCore(array('interlabs_oneclick_popup'));

$rsUser = CUser::GetByID($USER->GetID());
$arUser = $rsUser->Fetch();
if ($arUser['WORK_PHONE']) {
    $phone = $arUser['WORK_PHONE'];
}

else{
    $phone = $arUser['PERSONAL_PHONE'];
}
?>




        <div class="errors">
            <?php if ($arResult['PRODUCT_ID'] == $_REQUEST['PRODUCT_ID'] && isset($arResult['validateErrors']) && count($arResult['validateErrors']) > 0) {
                foreach ($arResult['validateErrors'] as $error) {?>
                	<script>
                		window.location.replace('/thanks');
                	</script>
               <? } ?>
            <?php } ?>
        </div>
        <?php if ($arResult['success'] === null) { ?>
        <?php } else { ?>
            <?php if($arResult['PRODUCT_ID'] == $_REQUEST['PRODUCT_ID'] ){?>
                <div class="interlabs-oneclick__result"
                     id="interlabs-oneclick__result-<?php echo $arResult['PRODUCT_ID']; ?>">
                    <?php
                    if (isset($arResult['success']['message'])) {
                        // echo $arResult['success']['message'];
                        ?>
                        <script type="text/javascript">
                            window.location.replace('/thanks');
                        </script>
                        <?
                        //LocalRedirect('/thanks');
                    }
                    if (isset($arResult['success']['html'])) {
                        ?>
                        <script type="text/javascript">
                            window.location.replace('/thanks');
                        </script>
                        <?
                        // echo $arResult['success']['html'];
                        //LocalRedirect('/thanks');
                    }
                    ?>
                </div>
            <?php }?>

        <?php } ?>
        <form method="post" enctype="multipart/form-data" action="">
            <?= bitrix_sessid_post() ?>
            <input name="interlabs__oneclick" value="Y" type="hidden"/>
            <input name="PRODUCT_ID" value="<?php echo $arResult['PRODUCT_ID']; ?>" type="hidden"/>

            <button class="col basket_order_btn"
                    href="javascript:void(0);"
                    type="submit">
                Оформить заказ
            </button>
        </form>
 
