<?php

class Short
{
    protected $db; //БД

    public function __construct() //Вводим параметры БД на нашем сервере
    {
        $this->db = new mysqli('localhost', 'root', '', 'test2db');
    }

    protected function generateCode($rand, $text) //Генерация кода-ссылки
    {
        /*Генерация ссылки на основе конвертации числового типа инкремента id
        $rand+=10000; //для наглядности примера id+=10000
        $rand = base_convert($rand, 10, 36);
        Так же добавляем пользовательскую ссылку, если она есть
        if($text != NULL){
            $rand .= "/$text";
        }
        return $rand;
        */
        /*Генерация ссылки на основе инкремента id строки + рандома символов*/
        $symb = "qwertyuiopasdfghjklzxcvbnm";
        $rand .= substr(str_shuffle($symb), 0, 3);
        if($text != NULL){
            $rand .= "/$text";
        }
        return $rand;

    }

    public function makeCode($url, $text) //Вывод-запись кода-ссылки
    {
        $url = trim($url); //Стираем пробелы, возможные при копировании ссылки пользователем
        /*Валидация URL*/
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            return '';
        }
        /*Сравнение строки URL-адреса в таблице links с уже существующими*/
        $url = $this->db->escape_string($url);
        $exists = $this->db->query("SELECT code FROM links WHERE url = '{$url}'");
        /*Вывод кода-ссылки существующего адреса, либо запись url в таблицу и вывод кода-ссылки*/
        if ($exists->num_rows) {
            return $exists->fetch_object()->code;
        } else {
            $this->db->query("INSERT INTO links (url, created) VALUES ('{$url}', NOW())");
            $code = $this->generateCode($this->db->insert_id, $text);
            $this->db->query("UPDATE links SET code = '{$code}' WHERE url = '{$url}'");
            return $code;
        }
    }

    public function getUrl($code) //Получение URL ссылки из кода-ссылки
    {
        $code = $this->db->escape_string($code);
        $code = $this->db->query("SELECT url FROM links WHERE code = '$code'");
        if ($code->num_rows) {
            return $code->fetch_object()->url;
        }
        return '';
    }
}