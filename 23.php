<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="23.php" method="post">
    <input type="text" name="value"><br>
    <input type="submit" name="sub" value="add">
</form>
<?php
/*
вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6*/


if (isset($_POST['sub'])){
    $char = $_POST['value'];
}
$char = (str_split($char));
$res = 0;
for ($i=0; $i <count($char); $i++){
    $res += $char[$i];
}
echo $res;

?>

</body>
</html>