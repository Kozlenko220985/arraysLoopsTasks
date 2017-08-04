<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 18:58
 */
$arr = ['Mondey', 'Tuesday', 'Wednesday', 'Thursday', 'Frieday', 'Sunday', 'Saturday'];
foreach ($arr as $v){
    $day = date("l");
    if ($day == $v){
        echo "<i> $v </i> <br>";
    }else{
        echo "$v <br>";
    }
}