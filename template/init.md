# init.php
init.php - содержит пользовательские функции и обработчики событий. Срабатывает в прологе.  
Располагается в:
- /bitrix/php_interface/init.php
- /bitrix/php_interface/ID сайта/init.php
- /local/php_interface/ID сайта/init.php `(рекомендуется)`

Рекомендуется в файле init.php подключать файлы с функциями и использовать автолоад:

    session_start();
    CModule::AddAutoloadClasses(
            '', // не указываем имя модуля
            array(
            // ключ - имя класса, значение - путь относительно корня сайта к файлу с классом
                'CMyClassName1' => '/path/cmyclassname1file.php',
                'CMyClassName2' => '/path/cmyclassname2file.php',
            )
    );
