<?php

namespace Test2\Php;

/*Автозагрузка через composer*/
require_once '../../vendor/autoload.php'; //каталог vendor, composer.phar в корне проекта

use Test2;
use Test2\Php\Classes\Short;

session_start();
$shorten = new Short;

/*Вывод URL в окно формы*/
if (isset($_POST['url'])) {
    $url = $_POST['url'];
    $text = $_POST['text'];

    if ($code = $shorten->makeCode($url, $text)) {
        $_SESSION['feedback'] = "Готово! Ваша ссылка: <a href=\"http://localhost/test2/{$code}\">http://localhost/test2/{$code}</a>";
        echo $code;
    } else {
        $_SESSION['feedback'] = "Invalid URL!!!";
    }
}

header('Location: ../../index.php'); //Перенаправление браузера