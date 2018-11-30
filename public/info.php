<?php
$connect = mysqli_connect('127.0.0.1', 'root', '','test');
if (mysqli_connect_errno()){
    printf("Подключения нет");
}

if(!$connect){
    echo "Невозможно установить соединение";
}
echo "MySQL GRANDED ACCESS" . PHP_EOL;





mysqli_close($connect);