<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 13:34
 * Дан массив с элементами 1, 20, 15, 17, 24, 35.
 * С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result
 */

$summ = 0;
$myArr = [1, 20, 15, 17, 24, 35];
foreach ($myArr as $v){
    $summ += $v;
}
echo $summ;
