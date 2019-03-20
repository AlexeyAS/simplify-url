<?php
session_start();
require_once 'classes/Short.php';
$sh = new Short;

/*Вывод URL в окно формы*/
if (isset($_POST['url'])) {
    $url = $_POST['url'];

    if ($code = $sh->makeCode($url)) {
        $_SESSION['feedback'] = "Generated! Ваша ссылка: <a href=\"http://localhost/test2/{$code}\">http://localhost/test2/{$code}</a>";
        echo $code;
    } else {
        $_SESSION['feedback'] = "Invalid URL!!!";
    }
}

header('Location: index.php'); //Перенаправление браузера