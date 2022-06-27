# GetIBlockSectionList
GetIBlockSectionList - работаем с разделами инфоблока.

Получаем подразделы из раздела `id=237`, инфоблока `id=8`:

    if (CModule::IncludeModule("iblock")) {
        $items = GetIBlockSectionList(8, 237, Array("sort"=>"asc"));
        while($arItem = $items->GetNext()) {
            print_r_pre($arItem);
        }
    }
