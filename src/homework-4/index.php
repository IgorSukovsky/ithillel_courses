<?php

//посчитать длину массива :
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$length = count($arr);
echo "Длина массива: $length";

var_dump($arr);

//переместить первые 4 элемента массива в конец массива :
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$firstFour = array_splice($arr, 0, 4);
foreach ($firstFour as $element) {
    array_push($arr, $element);
}

print_r($arr);

//получить сумму 4,5,6 элемента :
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$sum = $arr[3] + $arr[4] + $arr[5];
echo $sum;

//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором :
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 5,
    'five' => 12,
];

$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
];

$missingKeys = array_diff_key($firstArr, $secondArr);

print_r($missingKeys);

//найти все элементы которые присутствую в первом и отсутствуют во втором :

$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];

$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];

$missingElements = array_diff_key($firstArr, $secondArr);

$count = count($missingElements);

echo "Количество элементов, которые присутствуют в первом массиве и отсутствуют во втором: " . $count;

//найти все элементы значения которых совпадают :
$firstArrOne = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];

$secondArrTwo = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];

$matchingElements = array_intersect_assoc($firstArrOne, $secondArrTwo);

print_r($matchingElements);

//найти все элементы значения которых отличается :

$firstArray = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];

$secondArray = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];

$differentValues = array_merge(
    array_diff_assoc($firstArray, $secondArray),
    array_diff_assoc($secondArray, $firstArray)
);
print_r($differentValues);

//получить все вторые элементы вложенных массивов :
$secondElements = [];

foreach ($firstArr as $value) {
    if (is_array($value) && count($value) >= 2) {
        $secondElements[] = array_values($value)[1];
    }
}

print_r($secondElements);

//получить общее количество элементов в массиве :

$count = 0;
array_walk_recursive($firstArr, function($value, $key) use (&$count) {
    $count++;
});

echo "Общее количество элементов в массиве: " . $count;


//получить сумму всех значений в массиве

$sum = 0;
array_walk_recursive($firstArr, function($value) use (&$sum) {
    $sum += $value;
});

echo "Сумма всех значений в массиве: " . $sum;
//test