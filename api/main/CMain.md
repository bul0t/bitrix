# CMain
CMain - главный класс страницы. При создании каждой страницы создаётся глобальный объект этого класса с именем `$APPLICATION`.

Очень много частоиспользуемых методов: https://dev.1c-bitrix.ru/api_help/main/reference/cmain/index.php  
При создании каждой страницы создаётся глобальный объект этого класса с именем $APPLICATION.

`$APPLICATION` - объект класса CMain (глобальный).

## Заголовки
- `$APPLICATION->ShowTitle()` - показать заголовок страницы (покажет title, если установлен SetPageProperty("title"))
- `$APPLICATION->GetTitle()` - возвратить заголовок страницы (возвратит h1)
- `$APPLICATION->SetTitle("Page title")` - установить заголовок страницы (h1)

## Мета-теги
- `$APPLICATION->SetPageProperty("description", "описание страницы (description)")` - установит
- `$APPLICATION->SetPageProperty("keywords", "ключевые слова (keywords)")` - установит
- `$APPLICATION->SetPageProperty("title", "Название страницы (TITLE)")` - установит

## CSS
- `$APPLICATION->ShowCSS()` - выводит `<link>` на все файлы CSS
- `$APPLICATION->GetCSS()` - возвращает все файлы CSS (не работает)
- `$APPLICATION->SetTemplateCSS("form/form.css")` - устанавливает CSS для компонента
- `$APPLICATION->SetAdditionalCSS("/bitrix/templates/demo/additional.css")` - устанавливает CSS для страницы

## JavaScript, head
- AddHeadScript - подключает JavaScript в шаблоне сайта и в шаблоне компонентов
- AddHeadString - метод добавляет строку в секцию head сайта
- ShowHead - метод предназначен для вывода в шаблоне в head, заданных стилей и скриптов
- ShowHeadStrings - отображает специальные стили, JavaScript либо произвольный html-код

## Свойства страниц и разделов
- `ShowProperty` - отображает свойство страницы, учитывая свойства раздела
- `GetProperty` - возвращает свойство страницы, учитывая свойства раздела
- и другие

## Текущий адрес страницы
- `GetCurUri` - возвращает адрес текущей страницы с параметрами
- `GetCurPage` - возвращает адрес текущей страницы без параметров
- `GetCurPageParam` - возвращает URL текущей страницы c добавленными новыми и(или) удаленными параметрами
- `GetCurDir` - возвращает раздел текущей страницы
- `SetCurPage` - устанавливает адрес текущей страницы

## Компоненты
- `IncludeFile` - подключает произвольные файлы и компоненты
- `GetTemplatePath` - возвращает полный путь к файлу следуя алгоритму подключения компонент
- `IncludeComponent` - метод подключает компонент
