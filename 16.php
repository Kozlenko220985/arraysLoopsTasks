<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 18:19
 */

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $v){
    if ($v % 3 == 0){
        echo $v.'<br>';
    }else{
        echo $v.' , ';
    }
}