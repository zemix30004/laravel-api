<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View File</title>
</head>
<body>
    {{ $data->name }}
    {{ $data->description}}
    <iframe height="600px" width="600px" src="/assets/{{ $data->file }}"></iframe>
</body>
</html>

$in = 'Лондон Париж Лондон Москва Париж Лондон Киев Париж Лондон Киев';

$words = explode(' ', $in);
$out = [];
foreach($words as $word){
    isset($out[$word])?$out[$word]++:$out[$word]=1;
}

arsort($out);

print_r($out);



header('Content-Type: text/html; charset=utf-8');
$str = 'Лондон Париж Лондон Москва Париж Лондон Киев Париж Лондон Киев';
// разбиваем на слова, модификатор u используется для юникод строки
$words = preg_split("/([^[:alnum:]]|['-])+/us", $str);

// оставляем только уникальные слова
$words = array_unique($words);
$arr = array();
// считаем какие из слов сколько встречаются раз
foreach($words as $word)
{
    $arr[$word] = substr_count($str, $word);
}
// сортируем, оставляя ключи массива
arsort($arr);
// выводим
foreach ($arr as $city => $count)
{
    echo $city.' - '.$count.'<br>';
}
