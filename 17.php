<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 18:36
 * Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
месяц выведите жирным. Текущий месяц должен храниться в переменной $month
 */

$arr = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

foreach ($arr as $v){
    $month = date("F");
    if ($v == $month){
        echo "<b> {$v} </b> <br>";
    }else{
        echo $v.'<br>';
    }
}