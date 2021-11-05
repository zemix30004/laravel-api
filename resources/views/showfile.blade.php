<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show File</title>
</head>
<body>
<table border="1px">
        <tr>
        <th>Name</th>
        <th>Description</th>
        <th>View</th>
        <th>Download</th>
        <th>Count Typical Words</th>
    </tr>
    @foreach ($data as $data )
    <tr>
        <td>{{ $data->name }}</td>
        <td>{{ $data->description }}</td>

        <td><a href="{{ url('/viewfile', $data->id) }}">View</a></td>
        <td><a href="{{ url('/download', $data->file) }}">Download</a></td>
        <td>{{ $data->file }}</td>
    </tr>

    @endforeach
</table>
</body>
</html>
<?PHP
$file = fopen("f.txt", "r");
if (!$file){
echo "Файл не найден.";
exit;
}
echo "<b>Содержимое файла:</b><br>";
while (!feof($file)){
$string = fgets($file, 100);
echo $string."<br>";
}
fclose($file);
$txt = file_get_contents("f.txt");
echo "Слово xxx встречается ".substr_count($txt,"xxx")." раз<br>";
// echo "Слово yyy встречается ".substr_count($txt,"yyy")." раз";
?>

Код (PHP):
$text="Текст какой-нибудь";
$ar= preg_split("/[\s,]+/", $text);


    $res=array();
    foreach($ar as $val)
    $res[$val]++;
    $i=0;
    while (count($ar)>$i) {

        print ($stemmer->stem_word($ar[$i]))." — ".$res[$ar[$i]]."<br/>";
        $i++;

    }

    
    $text="какой-нибудь текст";
        $ar= preg_split("/[\s-,^()]+/ ",$text);



    $res=array();
    foreach($ar as $val)
    $res[$val]++;
    $i=0;
    while (count($ar)>$i) {


        print ($stemmer->stem_word($ar[$i]))." — ".$res[$ar[$i]]."<br/>";

                $i++;

    }



        //Ищем самое часто встречаемое слово и заносим в массив $result

$result=array_count_values($ar);

//ищем максимум в массиве $result
$max_num=0;
$min_num=0;
$word="";
foreach($result as $key=>$value)
{

if($value>$max_num)
{
$max_num=$value;
$word=$key;
}
}
echo "Слово <b>".$word."</b> встретилос чаще всех <b>".$max_num."</b> раз<br>";



$text = 'This is a test is do do do do kk kk ddd ddd ttt ttt ppp ppp ';

function rec($text) {
    $ex = explode(' ', $text);
    $str_count = array();
    for ($i = 0; $i < count($ex); $i++) {
        $str_count[$ex[$i]]['count'] = 0;
        for ($j = 0; $j < count($ex); $j++) {
            if ($ex[$i] == $ex[$j]) {
                $str_count[$ex[$i]]['count'] ++;
            }
        }
    }
    arsort($str_count); //сортируем
    // по совету Ganzal срезаем массив
    //оставляем нужное количество
    $str_count = array_slice($str_count, 0, 10);
    return $str_count; //возвращаем результат
}

echo "<pre>";
var_dump(rec($text));
