<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 14:14
 * Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
русские — в массив $ru.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой')
 */

$arr = [
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой'
];

$en = [];
$ru = [];
foreach ($arr as $k => $v){
    $en[] = $k;
    $ru[] = $v;
}
echo '<pre>';
var_dump($en);
echo '</pre>';

echo '<pre>';
var_dump($ru);
echo '</pre>';