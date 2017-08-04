<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.08.2017
 * Time: 13:31
 * Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик
 */

$myArray = ['html', 'css', 'php', 'js', 'jq'];
foreach ($myArray as $v){
    echo "<pre>{$v}</pre>";
}