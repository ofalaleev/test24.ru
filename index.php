<a href="clear_page.php">1 page</a>
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
//Арифметические операции
$x = 6;
$y = 13;
$z = 43;
$summ = $x + $y;
$diff = $y - $x;
$multiply = $x * $y;
$devide = $y / $x;
echo "Выводим сумму $x и $y равную $summ </br>";
echo "Выводим разницу $y и $x равную $diff </br>"
?>

