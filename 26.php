<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04.08.2017
 * Time: 12:52
 */

for ($i=1; $i <= 100; $i++){
    $arr[$i] = rand(1,100);
}

foreach ($arr as $k => $v){
    if ($k % 2 == 0 && $v > 0){
        $result = $arr[$v] * $arr[$v];
        echo "<pre> {$k} парный и {$v} больше 0 </pre>";

    }elseif ($k % 2 == 1 && $v > 0){
        echo "<pre> {$k} не парный и {$v} больше 0 </pre>";
    }
}

echo "Произведение элементов которые больше 0 и у которых парные индексы = {$result}<br>";