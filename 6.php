<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 14:14
 */

$arr = [
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой'
];

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