<?php

/** 1) Доступ по ссылке */

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:

$order = &$very_bad_unclear_name;//Объявила новую переменную $order как ссылку на переменную $very_bad_unclear_name
$order.= " are very tasty";//С помощью оператора конкатенации добавила к переменной $order строку.

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

/** 2) Числа */

$int1 = 7; //присвоила переменной целочисленное значение
echo $int1;

$int2 = 8; //создала ещё одну переменную и присвоила ей другое целочисленное значение
echo "\n $int2";

$float = 2.5; //создала переменную и присвоила ей значение с плавающей запятой
echo "\n $float";

echo "\n", 7+5;//напечатала число 12 с помощью сложения


$last_month = 1187.23; //потрачено в прошлом месяце
$this_month = 1089.98; //потрачено в этом месяце

echo "\n", $last_month - $this_month; //разница между расходами в прошлом месяце и в этом месяце

/** 11) Умножение и деление*/

$num_languages = 4; //количество языков программирования, которые Мэг выучила
$months = 11;//количество месяцев, которые она потратила на обучение кодированию
$days = $months * 16; //дни, которые она провела за учёбой
$days_per_language = $days / $num_languages; //сколько дней в среднем у нее ушло на изучение каждого языка

echo "\n", $days_per_language;

