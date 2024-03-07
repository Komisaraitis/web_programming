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

/** 16)Функции*/

//функция, оторая принимает строковый параметр и возвращает эту строку, дополненную восклицательным знаком.
function increaseEnthusiasm($s){
    return $s.'!';
}

echo increaseEnthusiasm("\nWow");

//функция, которая принимает строковый параметр и возвращает эту строку, повторенную три раза
function  repeatThreeTimes($s){
    return $s.$s.$s;
}

echo "\n", repeatThreeTimes("Cool");

echo "\n", increaseEnthusiasm(repeatThreeTimes("Dasha"));

//функция, которая обрезает строку

function cut($str, $num = 10) {
    return substr($str, 0, $num);
}

echo cut("oireafcmaeuh");

//функуция, которая рекурсивно выводит элементы массива

function printArrayRecursively($arr, $i = 0) {
    if ($i < count($arr)) {
        echo $arr[$i] . "\n";
        printArrayRecursively($arr, $i + 1);
    }
}

printArrayRecursively([1,2,5,4,8]);

//Функция, которая складывает цифры числа, пока сумма не станет однозначным числом
function sumDig($num) {
    $sum = array_sum(str_split($num));

    if ($sum > 9) {
        return sumDig($sum);
    } else {
        return $sum;
    }
}
$num = 146;
echo "\nЧисло: ", $num, "\nОднозначная сумма ", sumDig($num);

/** 17) Массивы */

//функция, которая заполняет массив следующим образом: в первый элемент записывает 'x', во второй 'xx', в третий 'xxx' и так далее

function x($count)
{
    $res = ['x'];
    $i=1;
    while ($i < $count) {
        $res[$i] = $res[$i-1].'x';
        $i++;
    }
    return $res;
}

print_r (x(6));

//функция, которая будет заполнять массив заданными значениями
function arrayFill($value, $elem) {
    $arr = [];
    for ($i = 0; $i < $elem; $i++) {
        $arr[] = $value;
    }
    return $arr;
}

$arr = arrayFill('x', 5);
print_r($arr);

//сумма элементов массива

$num = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($num as $in) {
    $sum += array_sum($in);
}
echo "\n", $sum;

//С помощью двух циклов создаю массив [[1, 2, 3], [4, 5, 6], [7, 8, 9]]

$arr = [];
$value = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arr[$i][$j] = $value;
        $value++;
    }
}
print_r($arr);

//Умножила первый элемент массива на второй, а третий элемент на четвертый. Результаты сложила

$arr = [2, 5, 3, 9];
$res = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
echo "\n", $res;

// фамилия, имя и отчество

$user = [ 'name' => 'Daria', 'surname' => 'Komisaraitis', 'patronymic' => 'Valerievna'];
echo "\n", $user['surname'], ' ', $user['name'], ' ', $user['patronymic'];

// год-месяц-день

$date = ['year' => '2024', 'month' => '03', 'day' => '07'];
echo "\n", $date['year'], '-', $date['month'], '-',$date['day'];

//количество элементов в массиве

$arr = ['a', 'b', 'c', 'd', 'e'];
echo "\n",count($arr);

// последний и предпоследний элементы массива

$arr1 = ['a', 'b', 'c', 'd', 'e'];

echo "\n", $arr1[count($arr1) - 1];
echo "\n", $arr1[count($arr1) - 2];

/** 18)Конструкция if else */

//Функция, которая параметрами принимает 2 числа. Если их сумма больше 10 - пусть функция вернет true, а если нет - false.

function checkSum($num1, $num2) {
    $sum = $num1 + $num2;
    if ($sum > 10) {
        echo "\nСумма >10";
        return true;
    }
    else {
        echo "\nСумма <=10";
        return false;
    }
}

echo "\n", checkSum(1, 5);

//функция, которая параметрами принимает 2 числа. Если эти числа равны - пусть функция вернет true, а если не равны - false

function checkEqual($num1, $num2) {
    if ($num1 == $num2) {
        return true;
    }
    else {
        return false;
    }
}

echo "\n", checkEqual(4, 4);

//код в краткой форме

$test = 0;
if ($test == 0) echo "\n", 'верно';

//число меньше 10 или больше 99?

$age = 65;
if ($age < 10 || $age > 99) {
    echo "\nЧисло меньше 10 или больше 99";
}
else {
    $sum = array_sum(str_split($age));
    if ($sum <= 9) {
        echo "\nСумма цифр однозначна";
    } else {
        echo "\nСумма цифр двузначна";
    }
}

$arr = [1,2,3];
if (count($arr) == 3) {
    echo "\n", array_sum($arr);
}

/** 19) Циклы */

echo "\n";
for ($i = 1; $i <= 20; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "x";
    }
    echo "\n";
}

/** Комбинация функций */

// среднее арифметическое
$arr = [1, 2, 3, 4, 5];
$average = array_sum($arr) / count($arr);
echo "\n", $average;

//сумма чисел от 1 до 100
$sum = array_sum(range(1, 100));
echo "\n", $sum;

// массив с квадратными корнями
$arr = [1, 4, 9, 16, 25];
$sqrtArr = array_map('sqrt', $arr);
echo "\n";
print_r($sqrtArr);

// Заполнила массив числами от 1 до 26 так, чтобы ключами этих чисел были буквы английского алфавита: ['a'=>1, 'b'=>2...]
$key = range('a', 'z');
$value = range(1, 26);
$result = array_combine($key, $value);
echo "\n";
print_r($result);

// сумма пар чисел
$str = '1234567890';
$a = str_split($str, 2);
$sum = array_sum($a);
echo "\n", $sum;