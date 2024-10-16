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
