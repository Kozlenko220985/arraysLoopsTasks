<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 18:01
 */

$arr = [4, 2, 5, 19, 13, 0, 10];
    foreach ($arr as $v){
        if ($v ==2 || $v == 3 || $v == 4){
            echo 'Есть';
            break;
        }else{
            echo 'Нет';
        }
    }