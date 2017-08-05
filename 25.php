<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04.08.2017
 * Time: 12:34
 * Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами
 */

for ($i=0; $i <= 10; $i++){
    $arr[$i] = rand(1,10);
}

echo '<pre>';
var_dump($arr);
echo '</pre>';

$min = (min($arr));
$max = (max($arr));

$arr = array_reverse($arr);

echo '<pre>';
var_dump($arr);
echo '</pre>';
