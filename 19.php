<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 18:58
 * Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day
 */
$arr = ['Mondey', 'Tuesday', 'Wednesday', 'Thursday', 'Frieday', 'Sunday', 'Saturday'];
$day = date("l");
foreach ($arr as $v){
    if ($day == $v){
        echo "<i> $v </i> <br>";
    }else{
        echo "$v <br>";
    }
}