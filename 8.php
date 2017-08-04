<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 14:24
 * Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
'­1­2­3­4­5­6­7­8­9
 */

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $v){
        $str .= $v;
}
var_dump($str);

