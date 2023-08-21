<?php
$somerar=15;
function addit(){
    global $somerar;
    $somerar++;
    echo"somerar is $somerar";
}addit(); // somerar is 16 
echo "####################################### <br>";

$arr=array(5 => 1 , 12 => 2);
$arr[]=56;
$arr["x"]=42;
echo "<pre>";
var_dump($arr);
echo "</pre>";
unset($arr);
echo "<br>";
echo "#####################";
echo "<br>";
$var='false';
if($var){
    echo "true";
}else{
    echo "false";
} //the result is true
echo "<br>";
function Fibonacci($number){
      
    if ($number == 0)
        return 0;    
    else if ($number == 1)
        return 1;    
    else
        return (Fibonacci($number-1) + 
                Fibonacci($number-2));
}
$number = 10;
for ($counter = 0; $counter < $number; $counter++){  
    echo Fibonacci($counter),' ';
}
echo "<br>";
function isLeapYear($year)
{
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        return true;
    } else {
        return false;
    }
}
$year = 2024; 

if (isLeapYear($year)) {
    echo $year . " is a leap year.";
} else {
    echo $year . " is not a leap year.";
}
echo "<br>";
function generateUniqueRandomNumbers($min, $max, $count)
{
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $count);
}
$min = 1; 
$max = 100; 
$count = 5;
$randomNumbers = generateUniqueRandomNumbers($min, $max, $count);
foreach ($randomNumbers as $number) {
    echo $number . " ";
}
echo "<br>";
echo "Multiplication Table: <br>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo $i . " x " . $j . " = " . ($i * $j) . "<br>";
    }
    echo "<br>";
}
echo "<br>";
function removeDuplicates($sortedList)
{
    $uniqueList = array();

    foreach ($sortedList as $item) {
        if (!in_array($item, $uniqueList)) {
            $uniqueList[] = $item;
        }
    }

    return $uniqueList;
}

$sortedList = array(1, 2, 2, 3, 4, 4, 5, 5, 5, 6, 7, 7);

echo "Sorted List: " . implode(", ", $sortedList) . "\n";
echo "<br>";
$uniqueList = removeDuplicates($sortedList);
echo "List without Duplicates: " . implode(", ", $uniqueList) . "\n";
echo "<br>";

/* 1- true 
    2- false
    3-true
    4-true
    5-true





















?>