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

/** 12) Степень*/

echo "\n", 8**2; // возведение в квардрат

/** 13) Степень*/

$my_num = 19;
$answer = $my_num;
$answer+=2;//оператор присваивания сложения
$answer*=2;//оператор присваивания умножения
$answer-=2;//оператор присваивания вычитания
$answer/=2;//оператор присваивания деления
$answer -= $my_num;

echo "\n", $answer;

/** 14)Математические функции*/

//Работа с %

$a=10;
$b=3;

echo "\n", $a % $b;// остаток от деления $a на $b

$a = 20;
$b = 4;

if($a % $b == 0)
    echo "\nДелится. Результат деления: ", $a / $b;
else
    echo "\nДелится с остатком. Остаток от деления: ", $a % $b;

//Работа со степенью и корнем

$st = pow(2, 10);//возведение в степень
echo "\n", $st;

$sq = sqrt(245); // корень
echo "\n", $sq;

$array = [4, 2, 5, 19, 13, 0, 10];//массив

$sum = 0;

foreach ($array as $value)
    $sum+=pow($value,2);

$sqSum = sqrt($sum);

echo "/n. Корень из суммы квадратов элементов массива: ", $sqSum;

//Работа с функциями округления

$a = 379;
$sqA = sqrt(379);

$round = round($sqA); //округление до единиц
$round1 = round($sqA, 1); //округление до десятков
$round2 = round($sqA, 2); //округление до сотен

echo "\n", $round, "\n", $round1, "\n", $round2;

$b = 587;
$sqB = sqrt($b);

$res = ['floor' => floor($sqB), 'ceil' => ceil($sqB)];//ассоциативный массив

echo "\n";
print_r($res);

//Работа с min и max

$num = [ 4, -2, 5, 19, -130, 0, 10];
$min = min($num);//минимальное число
$max = max($num);//максимальное число

echo "\n", $min, "\n", $max;

//Работа с рандомом

$random = rand(1, 100);//случайное число от 1 до 100
echo "\n", $random;

$rand = [];
//заполняю массив 10-ю случайными числами
for($i = 0; $i < 10; $i++)
    $rand[$i] = rand();

print_r($rand);

//Работа с модулем

$a = 18;
$b = 19;

echo "\n", abs($a - $b);//модуль разности $a и $b

$arr =  [1, 2, -1, -2, 3, -3];
$new_arr = [];
//делаю новый массив так, чтобы отрицательные числа стали положительными
for($i = 0; $i < count($arr); $i++)
    $new_arr[$i] = abs($arr[$i]);
echo "\n";
print_r($new_arr);

//Общее

$num = 30;
$divisors = [];
//делаю массив делителей числа $num
for($i = 1; $i < $num; $i++) {
    if ($num % $i == 0)
        $divisors[] = $i;
}
echo "\n";
print_r($divisors);

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;

//Узнаю, сколько первых элементов массива нужно сложить, чтобы сумма получилась больше 10

foreach ($arr as $value){
    $sum+=$value;
    $count++;
    if($sum > 10)
        break;
}

echo $count;

/** 15)Функции*/

//функция, которая печатает строку и возвращает числовое значение
function printStringReturnNumber(){
    echo "\n Hi \n";
    return 9;
}

$my_num = printStringReturnNumber();

echo $my_num;

