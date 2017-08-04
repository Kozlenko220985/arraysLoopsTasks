<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 14:02
 */

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach ($arr as $k => $v){
    echo "<pre>Key: {$k} </pre>";
}
foreach ($arr as $k => $v){
    echo "<pre>value: {$v}</pre>";
}