<?
	if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
		die();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/png" href="Ellipse9.png"/>
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle();?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/slick/slick.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/slick/slick-theme.css">
	<script
			src="https://code.jquery.com/jquery-3.5.1.js"
			integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			crossorigin="anonymous">
	</script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.bundle.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/slick/slick.min.js"></script>
	<?
		use Bitrix\Main\Page\Asset;
		#Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/bootstrap.bundle.js");
		#Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/bootstrap.js");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/normalize.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/bootstrap.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/bootstrap-grid.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/bootstrap-reboot.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/main.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/media2.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/slick/slick.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/slick/slick-theme.css");
	?>
</head>
<body>
	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>
	<header class="adaptation_none_header">
		<div class="topheader_bg">
			<div class="container d-flex justify-content-between h-100 align-items-center">
				<?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
					"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
					"DELAY" => "N",	// Откладывать выполнение шаблона меню
					"MAX_LEVEL" => "1",	// Уровень вложенности меню
					"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
						0 => "",
					),
					"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"MENU_CACHE_TYPE" => "N",	// Тип кеширования
					"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
					"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
					"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
				),
					false
				);?>
				<ul class="row flex-nowrap" style="margin:0; padding: 0; ">
					<li class="mailbefore">
						<a href="mailto:<?=file_get_contents($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/include/email.php')?>">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_TEMPLATE_PATH.'/include/email.php',
									"EDIT_TEMPLATE" => "standard.php"
								),
								false
							);?>
						</a>
					</li>
					<?#='<pre>'; print_r($sopdu->phone($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/include/phone.php')); '</pre>';?>
					<li class="ml-5 phonebefore">
						<a href="<?=$sopdu->phone($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/include/phone.php')?>">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_TEMPLATE_PATH.'/include/phone.php',
									"EDIT_TEMPLATE" => "standard.php"
								),
								false
							);?>
						</a>
					</li>
					<li class="mt-1"><a class="ml-3 mr-2 lang activelang" href="#">RU</a>
						<a class="lang" href="#">EN</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="container mt-4">
			<div class="centerheader row flex-nowrap">
				<div class="col-9 row">
					<a href="/" class="col-4">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" />
					</a>
                    <?$APPLICATION->IncludeComponent("bitrix:search.title", "header_search", Array(
                        "COMPONENT_TEMPLATE" => "bootstrap_v4",
                        "NUM_CATEGORIES" => "1",	// Количество категорий поиска
                        "TOP_COUNT" => "5",	// Количество результатов в каждой категории
                        "ORDER" => "date",	// Сортировка результатов
                        "USE_LANGUAGE_GUESS" => "Y",	// Включить автоопределение раскладки клавиатуры
                        "CHECK_DATES" => "N",	// Искать только в активных по дате документах
                        "SHOW_OTHERS" => "N",	// Показывать категорию "прочее"
                        "PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                        "SHOW_INPUT" => "Y",	// Показывать форму ввода поискового запроса
                        "INPUT_ID" => "title-search-input",	// ID строки ввода поискового запроса
                        "CONTAINER_ID" => "title-search",	// ID контейнера, по ширине которого будут выводиться результаты
                        "CATEGORY_0_TITLE" => "Каталог",	// Название категории
                        "CATEGORY_0" => array(	// Ограничение области поиска
                            0 => "iblock_catalog",
                        ),
                        "CATEGORY_0_iblock_catalog" => array(	// Искать в информационных блоках типа "iblock_catalog"
                            0 => "2",
                        ),
                        "TEMPLATE_THEME" => "blue",	// Цветовая тема
                        "PRICE_CODE" => array(	// Тип цены
                            0 => "BASE",
                        ),
                        "PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
                        "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода
                        "SHOW_PREVIEW" => "Y",	// Показать картинку
                        "CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
                        "PREVIEW_WIDTH" => "75",	// Ширина картинки
                        "PREVIEW_HEIGHT" => "75",	// Высота картинки
                    ),
                        false
                    );?>
				</div>
				<div class="col-auto ml-auto row flex-nowrap mt-2 d-flex" style="justify-content: flex-end;">
                    <?global $USER;?>
                    <?if($USER->IsAuthorized()):?>
                        <button style="border:none; background: #fff;" type="button">
                            <a href="/personal/private/" class="user adaptation_none_header">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/user.svg" alt="">
                            </a>
                        </button>
                    <?else:?>
                        <button style="border:none; background: #fff;" type="button" data-toggle="modal" data-target="#exampleModal">
                            <a href="javascript:void(0);" class="user adaptation_none_header">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/user.svg" alt="">
                            </a>
                        </button>
                    <?endif;?>
                    <?if($USER->IsAuthorized()):?>
                        <?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							".default",
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"AREA_FILE_SHOW" => "file",
								"PATH" => '/include/cart.php',
								"EDIT_TEMPLATE" => "standard.php"
							),
							false
						);?>
                    <?endif?>
				</div>
			</div>
		</div>
		<hr class="mt-3">
		<?$APPLICATION->IncludeComponent("bitrix:menu", "top_catalog", Array(
			"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
			"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
			"DELAY" => "N",	// Откладывать выполнение шаблона меню
			"MAX_LEVEL" => "1",	// Уровень вложенности меню
			"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
			"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
			"MENU_CACHE_TYPE" => "N",	// Тип кеширования
			"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
			"MENU_THEME" => "site",
			"ROOT_MENU_TYPE" => "catalog",	// Тип меню для первого уровня
			"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
			"COMPONENT_TEMPLATE" => "horizontal_multilevel"
		),
			false
		);?>
        <?// if ($APPLICATION->GetCurPage(false) == '/'): ?>
            <hr class="fixhrhead" />
        <?//endif;?>
       
	</header>

	
<!-- доделать -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body" id="modal-body">
                    <ul class="tabs row" style="margin-left: -70px">
                        <li class="col-6 text-center tab">
                            <span class="signin" id="signin_h">Вход</span>
                            <div class="tab-content modalcont1">
                                <?$APPLICATION->IncludeComponent("bitrix:main.auth.form", "auth", Array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AUTH_FORGOT_PASSWORD_URL" => "/personal/recovery_password.php",	// Страница для восстановления пароля
                                    "AUTH_REGISTER_URL" => "/",	// Страница для регистрации
                                    "AUTH_SUCCESS_URL" => "/",	// Страница после успешной авторизации
                                ),
                                    false
                                );?>
                            </div>
                        </li>
                        <li class="col-6 text-center tab">
                            <span class="signup" id="signup_h">Регистрация</span>
                            <div class="tab-content modalcont2">
                                <?$APPLICATION->IncludeComponent(
                                    "sopdu:register",
                                    "",
                                    Array()
                                );?>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>





    <div class="modal fade" id="thanks-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">                
                <div class="modal-body w-100 text-center h5">
                    <img src="/upload/img/smile2.svg"/>
                    <div class="modal-header-text tac">Спасибо за регистрацию</div>
                    <div class="modal-grey">Мы свяжемся с вами в <br/> ближайшее время для <br/> подтверждения</div>
                    <a class="modal-link" href="/"><button type="button" class="thanks-modal-btn btn btn-secondary basket_order_btn w-100" data-dismiss="modal">Перейти на главную</button></a>
                </div>

                                       

            </div>
        </div>
    </div>





	<div class="header_adapt adaptation_block">
		<div class="h50fix"></div>
		<div class="container d-flex justify-content-between colotheadfix">
			<a href="/"><img class="ml-3 pt-2" src="/upload/img/logo.svg" width="130px"></a>
			<div class="d-flex fixmarginhead">
				<a id="phoneheader" href="tel:88005555555"><img src="/upload/img/phone.svg"></a>
				<span id="headerlangs" class="" style="display: none;"><span style="color: #0A2752 !important;">RU</span><span class="ml-2">EN</span></span>
				<a id="openbmenu" href="#"><img src="/upload/img/menu.svg" class="ml-3 mr-3"></a>
				<a id="closebmenu" href="#" style="display: none;"><img src="/upload/img/close.svg" class="ml-3 mr-3"></a>
			</div>
		</div>
		<div class="container" id="adaptview" style="display: none;">
			<nav class="navbar navbar-light amber lighten-4 mb-4 adaptation_flex_header">
				<div class=" navbar-collapse" id="navbarSupportedContent20">
					<ul class="navbar-nav mr-auto" style="font-family: Intro Book">
						<hr class="pt-3 bgfixhead">
						<li class="nav-item burger-top mb-1">
							<!-- <img class="col-3 mt-1" src="/upload/img/basket.svg" height="26">
							<a class="col-8 basket_bm mt-1" href="#">20 020 070₽</a> -->
							<?if($USER->IsAuthorized()):?>
							<hr>
		                        <?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									".default",
									array(
										"COMPONENT_TEMPLATE" => ".default",
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_TEMPLATE_PATH.'/include/cart.php',
										"EDIT_TEMPLATE" => "standard.php"
									),
									false
								);?>
		                    <?endif?>
						</li>



						<hr>
						<li class="nav-item burger-top">
							<img class="user-img mt-1" src="/upload/img/user.svg" height="26">

							<span <?=(!$USER->IsAuthorized()) ? 'data-toggle="modal" data-target="#exampleModal"' : ''?>>
								<a href="<?=($USER->IsAuthorized()) ? '/personal/private/' : '#'?>">Личный кабинет</a>
							</span>
						</li>
						<hr>
						<li class="nav-item container p-4 d-flex justify-content-between w-100">
							<a class="mt-3 mb-3 pl-4 mailbefore" href="info@ao-globus.ru">info@ao-globus.ru</a>
							<a class="mt-3 mb-3 mr-3 phonebefore" href="88005555555">8 800 555-55-55</a>
						</li>
						<hr>
						<?$APPLICATION->IncludeComponent(
			                "sopdu:section.filter",
			                "",
			            Array()
			            );?>
						<li class="nav-item">
							<div class="row pl-3 pt-2 btmfooter_a">
								<div class="col">
									<a href="/about.php">О компании</a><br>
									<a href="/news/">Новости</a><br>
									<a href="/technologies/">Технологии</a>
								</div>
								<div class="col">
									<a href="/partners/">Партнеры</a><br>
									<a href="/contact.php">Контакты</a>
								</div>
							</div>
						</li>


					</ul>
				</div>
			</nav>
		</div>
	</div>

<!-- доделать -->
<? if ($APPLICATION->GetCurPage(false) !== '/'): ?>
    <div id="adapt_none_head">
        <div class="l_tegs mt-3 mb-4 container" style="white-space: nowrap;">
            <?/*
            <span class="adaptation_cont"><</span>
            <span class="adaptation_cont">Главная</span>
            <span class="adaptation_cont_forfull">Главная</span>
            <span class="adaptation_cont_forfull">></span>
            <span class="adaptation_cont_forfull">Новости</span>

 $APPLICATION->GetCurPage(false) != '/personal/orders/'
*/?>
           <?#='<pre>'; print_r($_SERVER); '</pre>';?>

            <?#if($_SERVER["REDIRECT_URL"] !== '/personal/private/' || $_SERVER["REDIRECT_URL"] !== '/personal/orders/'):?>
            <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"START_FROM" => "1",
		"PATH" => "/",
		"SITE_ID" => "s1",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
<?#endif;?>
        </div>
        <div class="container">
            <?$APPLICATION->AddChainItem($APPLICATION->GetTitle());?>
<?endif;?>
