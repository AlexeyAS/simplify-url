<?php
header('Content-Type: text/html; charset=utf-8');
/*Выбираем символы, из которых будет состоять наша рандомная ссылка.*/
$symb = "QqWwAaSsDdFfGgHhJjKkLlZzEeRrTtYyUuIiOoPpXxCcVvBbNnMm1234567890";
/*Создаём рандом. Цифра 4 обозначает длину.*/
$rand = substr(str_shuffle($symb), 0, 4);
/*Адрес вашего сайта.*/
$site = "links/"; //Слэш обязателен!
$url = $_POST['url'];

function submit($site, $rand, $url)
{
    if ($_POST['submit']) {
        /*Вывод ссылки пользователю*/
        echo "<a href='$site$rand.php' target = '_blank'> Адрес сайта/$rand</a>";
        /*Создаём файл с именем рандомной ссылки в каталоге links*/
        $fLink = fopen("links/$rand.php", "w");
        /*Записываем в код редиректа, с ссылкой которую ввёл пользователь*/
        fwrite($fLink, "<?php header('Location: $url') ?>");
        /*Закрываем файл в папке links*/
        fclose($fLink);
        /*Открываем файл .htaccess с дозаписью на последний байт*/
        $fHt = fopen(".htaccess", "a");
        /*Записываем ссылку на файл в каталоге links и её сокращённый вариант, который был дан пользователю.*/
        //!ВНИМАНИЕ! Перенос сделан специально, иначе всё будет писаться в плотную и вызовет 500 ошибку!
        fwrite($fHt, "
    RewriteRule ^$rand$ /links/$rand.php");
        /*Закрываем файл*/
        fclose($fHt);
    }
}

if (isset($_POST['submit'])) {
    submit($site, $rand, $url);
}
