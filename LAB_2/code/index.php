<?php
/* Imagine a lot of code here */ 
 $very_bad_unclear_name = "15 chicken wings";


// Write your code here:
// Task 1
$order = &$very_bad_unclear_name;
$order .= ", two number 9s, a number 9 large, a number 6 extra dip and a number 7";

// Task 2
$toPay = 130;
echo "The price is $$toPay";
echo "\n";

$taxes = 3.5;
echo "Tax: 3.5%\n"; // No need to use echo for \n

echo 5+6+1;
echo "\n";

$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo "The difference between my spendings in this month and previous one is ", $lastMonth - $thisMonth, "\n";

// Task 3 (11?)
$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days/$numLanguages;

echo "Meg spent ", $daysPerLanguage, "d to learn ", $numLanguages, " languages\n";

// Task 4 (12?)
echo "pow(8,2)=", 8**2, "\n";

// Task 5 (13?)
$myNum = 213;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo "The answer is ", $answer, "\n";

// Task 6 (14?)
$a = 10;
$b = 3;
echo "a % b = ", $a % $b, "\n";
if($b == 0) echo "Нельзя делить на 0\n";
else if($a % $b == 0) {
    echo "Делится\n";
} else echo "Делится с остатком ", $a % $b, "\n";

$st = pow(2, 10);
echo "$st\n";
echo "sqrt(245) = ", sqrt(245), "\n";
$arr = array(4, 2, 5, 19, 13, 0, 10);
$sum = 0;
foreach($arr as $element) $sum += pow($element, 2);
echo "The array power result is $sum\n";

$root = sqrt(379);
echo round($root), "\n";
echo round($root, 1), "\n";
echo round($root, 2), "\n";

$root = sqrt(587);
$rootArray = array('floor' => floor($root), 'ceil' => ceil($root));
print_r($rootArray);

echo "\n";

$numbersArray = array(4, -2, 5, 19, -130, 0, 10);
echo "Min is ", min($numbersArray), "\n";
echo "Max is ", max($numbersArray), "\n";


echo rand(1, 100), "\n";
$randomArray = [];
for($i = 0; $i < 10; $i++) $randomArray[$i] = rand();
print_r($randomArray);

$a = 20;
$b = 30;
echo abs($a - $b), "\n";
$absArray = array(1, 2, -1, -2, 3, -3);
for($i = 0; $i < sizeof($absArray); $i++) $absArray[$i] = abs($absArray[$i]);
print_r($absArray);
echo "\n";

$number = 30;
$array = [];
for($i = 1; $i <= $number; $i++) {
    if($number % $i === 0) $array[] = $i;
}
print_r($array);
echo "\n";
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$k = 0;
for($i = 0; $i <= sizeof($array); $i++) {
    $sum += $array[$i];
    $k += 1;
    if($sum > 10){
        echo "Amount of first elements is $k\n";

         break;
    }
}

// Task 7 (15?)
function printStringReturnNumber() {
    echo "Your number is: ";
    return 1;
}
$my_num = printStringReturnNumber();
echo $my_num;

echo "\n";

// Task 8 (16?)
function increaseEnthusiasm(string $string){
    return $string."!";
}
echo increaseEnthusiasm("Hi"), "\n";

function repeatThreeTimes(string $string) {
    return $string.$string.$string;
}
echo repeatThreeTimes("WEB"), "\n";
echo increaseEnthusiasm(repeatThreeTimes("Hello")), "\n";

function cut(string $string, int $l = 10){
    return substr($string,0, $l);
}
$cut = cut("Cut me please");
echo $cut, "\n";

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function printArray($array, $i = 0){
    if($i<sizeof($array)){
        echo $array[$i], "\n";
        printArray($array, $i + 1);
    }
}
printArray($array);
echo "\n";

function sumDigits($number) {
    $sum = 0;
    while($number>0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    if($sum > 9) {
        return sumDigits($sum);
    }
 
    return $sum;
}
$number = 5234899;
echo "Number digits sum is ", sumDigits($number), "\n";

// Task 9 (17?)
function createArrayOfXs(int $l){
    $array = [];
    for ($i = 1; $i <= $l; $i++) $array[$i] = str_repeat("x",$i);
    return $array;
}
print_r(createArrayOfXs(4));
echo "\n";

function arrayFill($element, int $l){
    $array = [];
    for($i = 0; $i <= $l; $i++) {
        $array[$i] = $element;
    }
    return $array;
}
print_r(arrayFill("x", 5));
echo "\n";

function sumArray2D($array) {
    $sum = 0;
    foreach($array as $innerArray) {
        foreach($innerArray as $value) {
            $sum += $value;
        }
    }
    return $sum;
}
$array = [[1, 2, 3], [4, 5], [6]];
echo sumArray2D($array), "\n";

$number = 1;
$array2D = [];
for ($i = 0; $i < 3; $i++) {
    $innerArray = [];
    for($j = 0; $j < 3; $j++) {
        $innerArray[] = $number;
        $number++;
    }
    $array2D[] = $innerArray;
}
print_r($array2D);

$array = [2, 5, 3, 9];
$result = $array[0] * $array[1] + $array[2] * $array[3];
echo $result, "\n";

$user = array('name' => "Nikita", 'surname' => "Kuldyshev", 'patronymic' => "Andreevich");
echo $user['name'], " ", $user['surname'], " ", $user['patronymic'], "\n";

$date = array('year'=> 2024, 'month' => "03", 'day' => "08");
echo $date['year'], "-", $date['month'], "-", $date['day'], "\n";

$arr = array('a','b','c','d','e');
echo sizeof($arr), "\n";

$len = count($arr);
echo $arr[$len-1], "\n";
echo $arr[$len-2], "\n";

