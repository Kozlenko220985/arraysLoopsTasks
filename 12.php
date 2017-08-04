<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 16:26
 */
$num = 0;
for ($n=1000; $n >= 50; $n /= 2){
    $num++;
    $summ = $n;
}
$num -= 1;
echo "Количество итераций :  $num  <br>";
echo "Число : $summ";
