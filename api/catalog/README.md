# Торговый каталог `catalog`
Модуль торгового каталога.

## Начало работы
Начинаем работать с торговым каталогом.

Проверяем присутствует ли модуль торгового каталога на сайте:

    if (CModule::IncludeModule("catalog")) {
        echo "Да модуль торгового каталога подключен!";
    }

Проверяем является ли инфоблок с данным `id` торговым каталогом:

    if (CCatalog::GetByID(8)) {
        echo "Инфоблок с id=8, является торговым каталогом.";
    }

Объединяем две проверки выше:

    if (CModule::IncludeModule("catalog") && CCatalog::GetByID(8)) {
        echo "Да модуль торгового каталога подключен! <br />";
        echo "Инфоблок с id=8, является торговым каталогом.";
    }
