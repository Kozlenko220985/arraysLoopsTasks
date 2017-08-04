<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04.08.2017
 * Time: 12:09
 * Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>
 */

for ($i = 0; $i <= 5; $i++){
    for ($k = 1; $k <= $i; $k++){
        echo 'xx';
    }
    echo '<br>';
}