<?php
namespace test2\php;
use test2;
use test2\php\classes\Short;
//include '../../vendor/autoload.php';
require_once 'classes/Short.php';
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