# Различные скрипты

Если текущий пользователь администратор (CUser - класс для работы с пользователями. При запуске каждой страницы, автоматически создаётся объект этого класса $USER - данные о текущем пользователе):

    // Вывод данных массива через print_r()
    function print_r_pre($arr, $st="") {
        global $USER;
        if ($USER->IsAdmin()) {
            echo '<pre style="' . $st . '">';
            print_r($arr);
            echo '</pre>';
        }
    }

Работаем с модулем под админом

    if (CModule::IncludeModule("iblock")) {
        global $USER;
        if ($USER->IsAdmin()) {
            echo '<pre style="' . $st . '">';
            print_r($arr);
            echo '</pre>';
        }
    }

Если текущий раздел равен `/ru/catalog/phone/`:

    $APPLICATION->GetCurDir()=="/ru/catalog/phone/"

Если свойство раздела `phone` равно `Y`:

    $APPLICATION->GetDirProperty("phone")=="Y"

Подключение пролога/эпилога на странице без использования шаблона:

    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
        /* Наш код */
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
