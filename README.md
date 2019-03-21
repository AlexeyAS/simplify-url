# Задание 2
## Основной функционал:
## Главная страница: 
### •Поле ввода оригинальной ссылки
### •Поле ввода пользовательской ссылки
### •Кнопка сгенерировать
#### При нажатии на кнопку пользователю отдается сокращенная ссылка.
#### Переход по ссылке редиректит на оригинальный URI
##### (именно URI, игнорируйте слово URL в комментариях кода)
## Рабочий результат:
### Предоставлен в виде таблицы "links" БД "database\test2db.sql"
##### id:1 тестовая строка(youtube.com)
##### id:10-20 генерация ссылки 1-м способом
##### id:21-25 генерация ссылки 2-м способом

###### Таблица link
<table><tbody><tr align="center">
<td>id -<br>Идентификатор строки</td> 
<td>url -<br>Оригинальный URI</td>
<td>code -<br>Код-ссылка</td>
<td>created -<br>Дата добавления строки</td>
</tr></tbody></table>

###### Список выполненных команд mysql
```
mysql
use test2db
show tables;
create table links
  (id int not null primary key auto_increment, url varchar(255), code varchar(12), created datetime);
describe links;
insert into links(url, code, created) values('https://www.youtube.com', 'ytub0', now());
select * from links;
alter table links auto_increment = 10;
```

##### Код выполнен в соответствии PSR-1/2, PHP 5.6 
##### Стороние библиотеки, фреймворки не используются