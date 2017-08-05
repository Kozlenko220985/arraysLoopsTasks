<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 13:48
 * Дан массив с элементами 26, 17, 136, 12, 79, 15.
 * С помощью цикла foreach найдите сумму квадратов элементов этого массива.
 * Результат запишите переменную $result
 */
$summ = 0;
$myArr = [26, 17, 136, 12, 79, 15];
foreach ($myArr as $v){
    $summ += ($v * $v);
}
echo $summ;
