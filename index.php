﻿<a href="clear_page.php">1 page</a>
</br>
<?php
//Вводим переменные
$number = 8;
$float = -3.2;
$integer = 1;
$string = "Привет мир";
$bool = true;
//Выводим переменные
echo "Переменная number = $number";
echo "</br>";
echo "Переменная float = $float";
echo "</br>";
echo "Переменная integer = $integer";
echo "</br>";
echo "Переменная string = $string";
echo "</br>";
echo "Переменная bool = $bool";
echo "</br>";
//Объявляем константу
define("BIG", 2);
//Тут же её и выводим
echo "Константа BIG = ";
echo BIG;
echo "</br>";//отступ строки
//Урок №7 - Арифметические операции
$x = 6;
$y = 13;
$z = 43;
$summ = $x + $y;
$diff = $y - $x;
$multiply = $x * $y;
$devide = $y / $x;
$residue = $z % $y;
echo "Выводим сумму $x и $y равную $summ </br>";
echo "Выводим разницу $y и $x равную $diff </br>";
echo "Выводим производную $x и $y равную $multiply </br>";
echo "Выводим частное $y и $x равную $devide </br>";
echo "Выводим остаток деления $z и $y равный $residue </br>";
$q = 400;
echo "Пока, что переменная q должна быть равна $q</br>";
$q = $q + 10;
echo "Переменная q была равна 400, а стала $q</br>";
$q ++;
echo "Переменная q была увеличенна на 1 и сейчас равна $q </br>";
$q += 39;
echo "Переменная q была увеличенна на 39 и сейчас равна $q </br>";
//Урок №8 - Строковые операции
$str_1 = "<b>Первая строка</b>";//первая строка в жирном шрифте, вторая в курсиве
$str_2 = "<i>Вторая строка</i>";//тут мы видим вторую строку в курсиве
echo $str_1. $str_2."</br>";//Вывели через точку две строки и тег br
echo $str_1. " ". $str_2. "</br>";//Тут мы добавили пробел, через строковый оператор "."
echo '"'. "</br>";//мы использовали одинарные кавычки для вывода двойной кавычки
echo " \" ". "</br>";//через back slesh вывели кавычки в кавычках
echo " \\ ". "</br>";//выводим back slesh с новой строки
//Изучаем PHP | Урок №9 - Логические операции
$x_one = 12;
$y_one = 34;
$z_one = 4.25;
$bool_1 = $x_one == $z_one;// проверяем на равенство значение переменных и записываем их в boolen переменную
//$bool_1 = $x_one != $z_one;// если х не равно z то в boolen прописывается true 
echo $bool_1;
$bool_2 = $x_one > $y_one;
























?>

