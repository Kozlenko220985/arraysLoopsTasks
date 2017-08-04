<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 17:41
 * Вывести таблицу умножения
 */

for ($i = 1; $i <= 10; $i++){
    for ($e = 1; $e <= 10; $e++){
        $mult = $i * $e;
        echo "<pre> $i * $e = $mult </pre>";
    }
}