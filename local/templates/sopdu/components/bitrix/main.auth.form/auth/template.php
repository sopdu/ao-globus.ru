<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

\Bitrix\Main\Page\Asset::getInstance()->addCss(
	'/bitrix/css/main/system.auth/flat/style.css'
);

if ($arResult['AUTHORIZED'])
{
	echo Loc::getMessage('MAIN_AUTH_FORM_SUCCESS');
	return;
}
?>
<?if ($arResult['AUTH_SERVICES']):?>
    <?$APPLICATION->IncludeComponent('bitrix:socserv.auth.form',
        'flat',
        array(
            'AUTH_SERVICES' => $arResult['AUTH_SERVICES'],
            'AUTH_URL' => $arResult['CURR_URI']
        ),
        $component,
        array('HIDE_ICONS' => 'Y')
    );
    ?>
    <hr class="bxe-light">
<?endif?>


<?if ($arResult['ERRORS']):?>
	<div class="alert alert-danger">
		<? foreach ($arResult['ERRORS'] as $error)
		{
			echo $error;
		}
		?>
	</div>
<?endif;?>
<form name="<?= $arResult['FORM_ID'];?>" method="post" target="_top" action="<?= POST_FORM_ACTION_URI;?>">
    <span>
        <input class="mt-4" type="text" id="email" placeholder="E-mail" maxlength="255" name="<?= $arResult['FIELDS']['login'];?>" value="<?= \htmlspecialcharsbx($arResult['LAST_LOGIN']);?>" />
    </span>
    <br />
    <?if ($arResult['SECURE_AUTH']):?>
        <div class="bx-authform-psw-protected" id="bx_auth_secure" style="display:none">
            <div class="bx-authform-psw-protected-desc"><span></span>
                <?= Loc::getMessage('MAIN_AUTH_FORM_SECURE_NOTE');?>
            </div>
        </div>
        <script type="text/javascript">
            document.getElementById('bx_auth_secure').style.display = '';
        </script>
    <?endif?>
    <span>
        <input type="password" name="<?= $arResult['FIELDS']['password'];?>" class="mt-4" placeholder="Пароль" autocomplete="off" />
    </span>
    <br />
    <button class="mt-5 mb-2" type="signin" name="<?= $arResult['FIELDS']['action'];?>">Войти</button>
    <br />
<?/*
            <div class="bx-authform-formgroup-container">
                <input type="submit" class="btn btn-primary" name="<?= $arResult['FIELDS']['action'];?>" value="<?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_SUBMIT');?>" />
            </div>
*/?>
    <a href="<?= $arResult['AUTH_FORGOT_PASSWORD_URL'];?>" rel="nofollow">Забыли пароль?</a>

            <?/*if ($arResult['AUTH_FORGOT_PASSWORD_URL'] || $arResult['AUTH_REGISTER_URL']):?>
                <hr class="bxe-light">
                <noindex>
                <?if ($arResult['AUTH_FORGOT_PASSWORD_URL']):?>
                    <div class="bx-authform-link-container">
                        <a href="<?= $arResult['AUTH_FORGOT_PASSWORD_URL'];?>" rel="nofollow">
                            <?= Loc::getMessage('MAIN_AUTH_FORM_URL_FORGOT_PASSWORD');?>
                        </a>
                    </div>
                <?endif;?>
                <?if ($arResult['AUTH_REGISTER_URL']):?>
                    <div class="bx-authform-link-container">
                        <a href="<?= $arResult['AUTH_REGISTER_URL'];?>" rel="nofollow">
                            <?= Loc::getMessage('MAIN_AUTH_FORM_URL_REGISTER_URL');?>
                        </a>
                    </div>
                <?endif;?>
                </noindex>
            <?endif;*/?>

	</form>


<script type="text/javascript">
	<?if ($arResult['LAST_LOGIN'] != ''):?>
	try{document.<?= $arResult['FORM_ID'];?>.USER_PASSWORD.focus();}catch(e){}
	<?else:?>
	try{document.<?= $arResult['FORM_ID'];?>.USER_LOGIN.focus();}catch(e){}
	<?endif?>
</script>