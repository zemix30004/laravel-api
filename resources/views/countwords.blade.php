<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Count Words</title>
</head>
<body>
<?php
    // $in = 'Лондон Париж Лондон Москва Париж Лондон Киев Париж Лондон Киев';
    $in = 'Войдите в панель управления phpMyAdmin.
Выберите нужную SQL базу данных из общего списка по названию.
Авторизуйтесь в выбранной БД.
После авторизации в левой колонке будет сама база данных и служебная информация, которая к ней относится. Теперь вам нужно повторно выбрать вашу БД.
Перейдите во вкладку "Экспорт", после чего включите некоторые настройки';

$words = explode(' ', $in);
$out = [];
foreach($words as $word){
    isset($out[$word])?$out[$word]++:$out[$word]=1;
}

arsort($out);

print_r($out);
?>
</body>
</html>
