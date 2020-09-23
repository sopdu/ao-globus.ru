<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Контакты");
$APPLICATION->SetTitle("Контакты");
?>
<div class="lowcontainer" id="adapt_none_head">
    <div class="about_title text-body mt-3 mb-4">
       Контакты
   </div>
   <?$APPLICATION->IncludeComponent("bitrix:news.list", "contact", Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
            "DISPLAY_DATE" => "N",	// Выводить дату элемента
            "DISPLAY_NAME" => "N",	// Выводить название элемента
            "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "FIELD_CODE" => array(	// Поля
                0 => "NAME",
                1 => "",
            ),
            "FILTER_NAME" => "",	// Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "9",	// Код информационного блока
            "IBLOCK_TYPE" => "information",	// Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "20",	// Количество новостей на странице
            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
            "PAGER_TITLE" => "Новости",	// Название категорий
            "PARENT_SECTION" => "",	// ID раздела
            "PARENT_SECTION_CODE" => "",	// Код раздела
            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
            "PROPERTY_CODE" => array(	// Свойства
                0 => "phone",
                1 => "email",
                2 => "",
            ),
            "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
            "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",	// Устанавливать статус 404
            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
            "SHOW_404" => "N",	// Показ специальной страницы
            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
            "COMPONENT_TEMPLATE" => ".default"
        ),
   false
);?>
<div class="contpage_req mb-5">
    <div class="cont_title adaptation_none">Реквизиты</div>
    <div class="colsspan">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "page",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "standard.php"
            )
        );?>
    </div>
    <span><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" width="153"></span>
</div>

<?$APPLICATION->IncludeComponent(
    "sopdu:request",
    "",
    Array()
);?>
</div>
</div>
<div class="mapsfix" id="mapdelete">
    <?$APPLICATION->IncludeComponent(
       "bitrix:map.yandex.view", 
       ".default", 
       array(
          "COMPONENT_TEMPLATE" => ".default",
          "INIT_MAP_TYPE" => "MAP",
          "MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:51.56570119387424;s:10:\"yandex_lon\";d:34.6736336029424;s:12:\"yandex_scale\";i:17;s:10:\"PLACEMARKS\";a:2:{i:0;a:3:{s:3:\"LON\";d:34.674642113532;s:3:\"LAT\";d:51.5656844773892;s:4:\"TEXT\";s:0:\"\";}i:1;a:3:{s:3:\"LON\";d:34.674642113532;s:3:\"LAT\";d:51.5656844773892;s:4:\"TEXT\";s:100:\"Россия, 307370, Курская обл., г. Рыльск, ул. Володарского, 136.\";}}}",
          "MAP_WIDTH" => "100%",
          "MAP_HEIGHT" => "440",
          "CONTROLS" => array(
             0 => "ZOOM",
             1 => "MINIMAP",
             2 => "TYPECONTROL",
             3 => "SCALELINE",
         ),
          "OPTIONS" => array(
             0 => "ENABLE_SCROLL_ZOOM",
             1 => "ENABLE_DBLCLICK_ZOOM",
             2 => "ENABLE_DRAGGING",
         ),
          "MAP_ID" => "",
          "API_KEY" => ""
      ),
       false
   );?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>