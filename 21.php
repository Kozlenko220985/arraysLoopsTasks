<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04.08.2017
 * Time: 12:06
 */

$i = 0;
while ($i <= 9){
    $k = 1;
    while ($i >= $k){
        $k++;
        echo $i;
    }
    $i++;
    echo '<br>';
}