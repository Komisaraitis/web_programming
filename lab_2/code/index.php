<?php

/** 1) Доступ по ссылке */

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:

$order = &$very_bad_unclear_name;//Объявила новую переменную $order как ссылку на переменную $very_bad_unclear_name
$order.= " are very tasty";//С помощью оператора конкатенации добавила к переменной $order строку.

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";




