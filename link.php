<?php
header('Content-Type: text/html; charset=utf-8');

$h = "QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm1234567890"; //Выбираем символы, из которых будет состоять наш рандом
$rand = substr(str_shuffle($h), 0, 5); //создаём ранд. Цифра 5 обозначает длину ранда
$site = "links/"; //Адрес вашего сайта. Слэш обязателен!
$url = $_POST['url'];

function submit($site, $rand, $url){
    if ($_POST['submit']) {
        echo "<a href='$site$rand.php' target='_blank'> Адрес сайта/$rand</a>"; //выводим пользователю ссылку, в виде ссылки
        $fLink = fopen("links/$rand.php", "w"); //Создаём файл с именем ранда. Я решил скидывать файлы в каталог a, поэтому не забудьте его создать!
        fwrite($fLink, "<?php header('Location: $url') ?>"); //И записываем в код редиректа, с ссылкой которую ввёл пользователь
        fclose($fLink); //Закрываем файл
        $fHt = fopen(".htaccess", "a"); //Открываем файл .htaccess с дозаписью на последний байт
        fwrite($fHt, "
    RewriteRule ^$rand$ /links/$rand.php"); //Записываем ссылку на файл в каталоге links и её сокращённый вариант, который был дан пользователю. !ВНИМАНИЕ! Перенос сделан специально, иначе всё будет писаться в плотную и вызовет 500 ошибку!
        fclose($fHt); //Закрываем файл
    }
}
if(isset($_POST['submit'])){
    submit($site, $rand, $url);
}