<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 14:07
 */

$arr = [
    'Kolya'=> 200,
    'Vasya'=> 300,
    'Petya'=> 400
];

foreach ($arr as $k => $v){
    echo "<pre> {$k} - зарплата {$v} долларов </pre>";
}