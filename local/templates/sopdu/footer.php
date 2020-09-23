<?
	if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
		die();
?>
<? if ($APPLICATION->GetCurPage(false) !== '/'): ?>
    </div>
    </div>

<?endif;?>
<footer>
	<div class="footer_inner">
		<div class="wm_wrapper position-absolute">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/footer_wm.svg" class="adaptation_none">
		</div>
		<div class="container">
			<div class="row">
				<div class="foot_item col fixmorefooter">
					<div class="footitem_title"><?=GetMessage("sopduFoorerStill")?></div>
					<?$APPLICATION->IncludeComponent("bitrix:menu", "footer", Array(
						"COMPONENT_TEMPLATE" => ".default",
						"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
						"MENU_CACHE_TYPE" => "N",	// Тип кеширования
						"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
						"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
						"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
						"MAX_LEVEL" => "1",	// Уровень вложенности меню
						"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
						"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						"DELAY" => "N",	// Откладывать выполнение шаблона меню
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					),
						false
					);?>
				</div>
				<div class="foot_item col">
					<div class="footitem_title"><?=GetMessage("sopduFooterCatalog")?></div>
					<?$APPLICATION->IncludeComponent("bitrix:menu", "catalog", Array(
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
						"ROOT_MENU_TYPE" => "catalog",	// Тип меню для первого уровня
						"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
					),
						false
					);?>
				</div>
				<div class="foot_item_search col">
					<div class="footitem_title"><?=GetMessage("sopduFooterLookingForAProduct")?></div>
                    <?$APPLICATION->IncludeComponent("bitrix:search.form", "footer_search", Array(
                        "COMPONENT_TEMPLATE" => "flat",
                        "PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                        "USE_SUGGEST" => "Y",	// Показывать подсказку с поисковыми фразами
                    ),
                        false
                    );?>
                    <?/*
					<form class="footer_search" action="#">
						<input type="text" placeholder="Поиск" name="search" class="footer_input">
						<button type="submit" class="footer_btn">Найти</button>
					</form>
*/?>
					<br>
					<div class="footitem_title mt-2"><?=GetMessage("sopduFooterSocialNetwork")?></div>
					<?$APPLICATION->IncludeComponent(
						"sopdu:solocal.links",
						".default",
						array(
							"COMPONENT_TEMPLATE" => ".default",
							"instagram" => "Instagram",
							"youtube" => "Instagram",
							"vk" => "Instagram",
							"facebook" => "Instagram",
							"whatapp" => "Instagram"
						),
						false
					);?>
				</div>
				<div class="foot_item col adapt_our">
					<div class="footitem_title"><?=GetMessage("sopduFooterOurContact")?></div>
					<div class="our_cont">
						<div class="mailphone">
							<div class="footitem_text mail">
								<span class="fixfootericon mr-2">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/mail_footer.svg">
								</span>
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
							</div>
							<div class="footitem_text phone">
								<span class="fixfootericon mr-2">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/phone_footer.svg">
								</span>
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
							</div>
						</div>
						<span class="d-flex">
							<span class="fixfootericon mr-2"><img src="<?=SITE_TEMPLATE_PATH?>/img/mappin.svg"></span>
							<div class="footitem_text footitem_text_sp footer_fixloc">
								<a href="https://yandex.ru/maps/10707/rilsk/house/ulitsa_volodarskogo_136/Z00YcABkTUcFQFtrfXl3dHpnZg==/?ll=34.674422%2C51.565643&source=wizgeo&utm_medium=maps-desktop&utm_source=serp&z=16" target="_blank">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										".default",
										array(
											"COMPONENT_TEMPLATE" => ".default",
											"AREA_FILE_SHOW" => "file",
											"PATH" => SITE_TEMPLATE_PATH.'/include/address.php',
											"EDIT_TEMPLATE" => "standard.php"
										),
										false
									);?>
								</a>
							</div>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- <hr class="container mt65 w-100" style="border: none; max-width: 1100px !important;"> -->
		<div class="footer-line"></div>
		<div class="container pt-2">
			<div class="bottomfooter d-flex justify-content-between">
				<div class="bottomfootertext">
					<?$APPLICATION->IncludeComponent(
						"sopdu:copyright",
						".default",
						array(
							"COMPONENT_TEMPLATE" => ".default",
							"ChoiceYeare" => "2010",
							"ChoiceText" => "Все права защищены ОАО Глобус"
						),
						false
					);?>
				</div>
			</div>
		</div>
	</div>
</footer>


</div>
</div>
<script>
    document.querySelector('#openbmenu').addEventListener('click', function(){
        document.querySelector('#openbmenu').style.display = "none";
        document.querySelector('#phoneheader').style.display = "none";
        document.querySelector('#closebmenu').style.display = "block";
        document.querySelector('#headerlangs').style.display = "block";
        document.querySelector('#adaptview').style.display = "block";
        document.querySelector('#adapt_none_head').style.display = "none";
        document.querySelector('#adapt_none_header_news').style.display = "none";

    });
    document.querySelector('#closebmenu').addEventListener('click', function(){
        document.querySelector('#closebmenu').style.display = "none";
        document.querySelector('#headerlangs').style.display = "none";
        document.querySelector('#openbmenu').style.display = "block";
        document.querySelector('#phoneheader').style.display = "block";
        document.querySelector('#adaptview').style.display = "none";
        document.querySelector('#adapt_none_head').style.display = "block";
        document.querySelector('#adapt_none_header_news').style.display = "block";
    });
</script>

<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
<script>
    $('.slider-for').slick({
        slidesToShow: 10,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        focusOnSelect: true
    });
</script>
</div>
</body>
</html>