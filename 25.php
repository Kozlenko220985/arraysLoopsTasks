<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04.08.2017
 * Time: 12:34
 */

for ($i=0; $i <= 10; $i++){
    $arr[$i] = rand(1,10);
}

var_dump($arr);

$min = (min($arr));
$max = (max($arr));

$max = $max + $min;
$min = $max - $min;
$max = $max - $min;

echo $max.'<br>';
echo $min;
