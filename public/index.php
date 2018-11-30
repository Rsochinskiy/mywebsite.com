<!-- TODO Заменить папку views на свою -->
<!-- TODO Пoдключить через папку bootstrap + заменить index.php на перенаправление на бек часть в папку bootstrap -->
<!-- TODO Разбить обычный индексный файл index.html на части и подключать их файлово(NAV, header, footer...) -->
<!-- TODO Сделать свою маршрутизацию + Создать все страницы, а лучше их генерацию из частей разбитых в предыдущем пункте. -->
<!-- TODO Добавить на стринцу "Контакты" форму связи.  на примерах это страница Guestbook(guest)  -->
<!-- TODO Создать в папке Views страницу 404 она понадобится часто....  -->
<!-- TODO СОздать свою папку Shared в ней есть файлы-части обычной страницы -->

<?php 
require_once realpath('../config/app.php');
require_once ROOT.'/bootstrap/bootstrap'.EXT;

// $connect = mysqli_connect('127.0.0.1', 'root', '', 'alcoshop');
// if (mysqli_connect_errno()){
//     printf("Подключения нет");
// }

// if(!$connect){
//     echo "Невозможно установить соединение";
// }
// else {
// echo "Соединение с MySQL установлено!" . PHP_EOL;
// }
// mysqli_close($connect);



