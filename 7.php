<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 14:19
 */

$arr = [2, 5, 9, 15, 0, 4];
foreach ($arr as $v){
    if ($v > 3 && $v < 10){
        echo "<pre>$v</pre>";
    }
}