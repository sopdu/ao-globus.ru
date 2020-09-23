<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Localization\Loc;

$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
?>

<div class="about_title text-body mb-4 mt-3 mb-1">Личный кабинет</div>
<div class="bx_profile">
	<?
	ShowError($arResult["strProfileError"]);

	if ($arResult['DATA_SAVED'] == 'Y')
	{
		ShowNote(Loc::getMessage('PROFILE_DATA_SAVED'));
	}

	?>
	<form method="post" name="form1" action="<?=POST_FORM_ACTION_URI?>" enctype="multipart/form-data" role="form">
		<?=$arResult["BX_SESSION_CHECK"]?>
		<input type="hidden" name="lang" value="<?=LANG?>" />
		<input type="hidden" name="ID" value="<?=$arResult["ID"]?>" />
		<!-- <input type="hidden" name="LOGIN" value="<?//=$arResult["arUser"]["LOGIN"]?>" /> -->

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

			<div class="col">
				<div class="row">
					<div class="col-sm-6 col-12">
						<div class="accpage_style">
							<div>Название организации<span>*</span></div>
							<input type="text" value="<?=$arResult['arUser']['WORK_COMPANY']?>" name="WORK_COMPANY" class="footer_input">
							<div>ИНН<span>*</span></div>
							<input type="text" value="<?=$arResult['arUser']['UF_INN']?>" name="UF_INN" class="footer_input">
							<div>ОГРН<span>*</span></div>
							<input type="text" value="<?=$arResult['arUser']['UF_OGRN']?>" name="UF_OGRN" class="footer_input">
							<div>БИК<span>*</span></div>
							<input type="text" value="<?=$arResult['arUser']['UF_BIK']?>" name="UF_BIK" class="footer_input">
							<div>Расчетный счет<span>*</span></div>
							<input type="text" value="<?=$arResult['arUser']['UF_PA']?>" name="UF_PA" class="footer_input">
						</div>
					</div>

					<div class="col-sm-6 col-12 mb-4">
						<div class="accpage_style del_prof">
							<div>Имя менеджера</div>
							<input type="text" value="<?=$arResult['arUser']['NAME']?>" name="NAME" class="footer_input">
							<div>Фамилия менеджера</div>
							<input type="text" value="<?=$arResult['arUser']['LAST_NAME']?>" name="LAST_NAME" class="footer_input">
							<div>Отчество менеджера</div>
							<input type="text" value="<?=$arResult['arUser']['SECOND_NAME']?>" name="SECOND_NAME" class="footer_input">
							<div>Телефон менеджера</div>
							<input type="text" value="<?=$arResult['arUser']['WORK_PHONE']?>" name="WORK_PHONE" class="footer_input">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<input type="submit" class="private-btn basket_order_btn main-profile-submit" name="save" value="<?=(($arResult["ID"]>0) ? Loc::getMessage("MAIN_SAVE") : Loc::getMessage("MAIN_ADD"))?>">
						<!-- <input type="submit" class="btn btn-themes btn-link btn-md"  name="reset" value="<?//echo GetMessage("MAIN_RESET")?>"> -->
					</div>
				</div>
                <div class="manager-mobile">
                    <?$APPLICATION->IncludeComponent(
                        "sopdu:your_manager",
                        "",
                        Array()
                    );?>
                </div>
			</div>

			

		</div>

		

	</form>
	<?
	$disabledSocServices = isset($arParams['DISABLE_SOCSERV_AUTH']) && $arParams['DISABLE_SOCSERV_AUTH'] === 'Y';


	?>
	<div class="clearfix"></div>
	<script>
		BX.Sale.PrivateProfileComponent.init();
	</script>
</div>