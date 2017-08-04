<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 18:51
 * Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным
 */
$arr = ['Mondey', 'Tuesday', 'Wednesday', 'Thursday', 'Frieday', 'Sunday', 'Saturday'];
foreach ($arr as $v){
    if ($v == 'Sunday' || $v == 'Saturday'){
        echo "<b> $v </b> <br>";
    }else{
        echo $v.'<br>';
    }
}