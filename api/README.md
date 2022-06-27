# API
В Битрикс есть два ядра, старое и новое (D7).  
Документация по старому ядру: https://dev.1c-bitrix.ru/api_help/ (сверху имеется конструктор API)

## Термины
- Модуль
    - Компонент

- Компонент
    - Класс
    - Метод
    - Параметр
    - Событие

## Классы
CMain  

## Константы PHP
Магические константы (PHP): https://www.php.net/manual/ru/language.constants.magic.php  

$_SERVER: https://www.php.net/manual/ru/reserved.variables.server.php  

- `$_SERVER["SERVER_NAME"]` - имя сайта
- `$_SERVER["PHP_SELF"]` - путь от корня до текущего файла
- `DOCUMENT_ROOT` - полный путь от корня до папки текущего файла
- `SCRIPT_FILENAME` - полный путь от корня до папки текущего файла
- `SCRIPT_NAME` - путь от корня до папки текущего файла
- `REQUEST_URI` - URI
- `__FILE__` - полный путь от корня до текущего файла
- `__DIR__` - полный путь от корня до папки текущего файла

## Что возвращают запросы
CDBResult  

## Разное
- D7 - пока доступны не все функции, используемые в старом ядре.
- Полное описание всех API:
    - https://dev.1c-bitrix.ru/learning/course/index.php?COURSE_ID=43&LESSON_ID=2534
    - https://bxapi.ru
