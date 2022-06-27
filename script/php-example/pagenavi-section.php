<!--
    Расположение: local/templates/psk/components/bitrix/catalog/product-new/section.php
    Строка: 319
-->
<?php
/**
 * Постраничная навигация для разделов:
 * - выясняем в каком разделе находимся
 * - находим id родительского раздела
 * - создаём список подразделов
 * - выясняем на какой позиции в массиве находится текущий раздел
 * - делаем ссылки на следующий и предыдущий разделы
 */

function print_r_pre($arr, $st="") {
    echo '<pre style="' . $st . '">';
    print_r($arr);
    echo '</pre>';
}

if (CModule::IncludeModule("iblock")) {
    global $USER;
    if ($USER->IsAdmin()) {
        // переменные
        $iblock_id = $arResult["SECTION"]["IBLOCK_ID"]; // id текущего инфоблока;
        $iblock_section_id = $arResult["SECTION"]["IBLOCK_SECTION_ID"]; // id родительского раздела;
        $id = $arResult["SECTION"]["ID"]; // id текущего раздела;

        // получаем список разделов, добавляем их в массив
        $items = GetIBlockSectionList($iblock_id, $iblock_section_id, Array("sort"=>"asc"));
        $sect_arr = array();
        while($arItem = $items->GetNext()) {
            // print_r_pre($arItem);
            $sect_arr[] = $arItem["SECTION_PAGE_URL"];
        }

        // print_r_pre($sect_arr);

        // Получаем адрес текущего раздела и на основе его получаем индекс текущего раздела
        $key = $APPLICATION->GetCurPage();
        $key = array_search($key, $sect_arr);

        $prev = $sect_arr[$key - 1];
        $next = $sect_arr[$key + 1];

        // echo $prev . "<br />";
        // echo $next . "<br />";

        echo '<div class="page-navigation__wrap" style="display: flex;">';
            if (($key - 1) >= 0) echo '<a href="' . $prev . '">Предыдущая конструкция</a>';
            if (($key + 1) < count($sect_arr)) echo '<a href="' . $next . '" style="margin-left: auto;">Следующая конструкция</a>';
        echo '</div>';
    }
}
