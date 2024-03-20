<?php
// 1. Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого
// передан параметром во всех вложенных массивах :

// переделать !!!

function checkElementInNestedArrays($array, $element)
{
    if (!is_array($array)) {
        return false;
    }
    $elementFoundInAllArrays = true;

    foreach ($array as $value) {
        if (is_array($value)) {
            if (!checkElementInNestedArrays($value, $element)) {
                $elementFoundInAllArrays = false;
                break;
            }
        } else {
            if ($value !== $element) {
                $elementFoundInAllArrays = false;
                break;
            }
        }
    }

    return $elementFoundInAllArrays;
}

$array = array(
    array(1, 2, 3),
    array(1, array(2, 3), 3),
    array(array(1, 2, 3), 2, 3)
);

$element = 2;

if (checkElementInNestedArrays($array, $element)) {
    echo "Элемент $element найден во всех вложенных массивах.";
} else {
    echo "Элемент $element не найден во всех вложенных массивах.";
}

// 2. Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false :

function countLetterB($string)
{
    if (!is_string($string)) {
        return false;
    }

    $count = substr_count($string, 'b');

    return $count;
}

$string1 = "banana";
$string2 = "Hello, world!";
$notAString = 123;

echo "Количество букв 'b' в строке '$string1': " . countLetterB($string1) . "<br>";
echo "Количество букв 'b' в строке '$string2': " . countLetterB($string2) . "<br>";
echo "Количество букв 'b' в строке, которая не является строкой: " . countLetterB($notAString) . "<br>";


// 3. Создать функцию которая считает сумму значений всех элементов массива произвольной глубины :

function sumArrayValues($array)
{
    if (!is_array($array)) {
        return 0;
    }

    $sum = 0;

    foreach ($array as $value) {
        if (is_array($value)) {
            $sum += sumArrayValues($value);
        } else {
            $sum += $value;
        }
    }

    return $sum;
}

$array = array(
    1,
    array(2, 3),
    array(array(4, 5), 6),
    array(7, 8, array(9, 10))
);

$totalSum = sumArrayValues($array);
echo "Сумма значений всех элементов массива: $totalSum";


// 4. Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float :

function countInnerSquares($bigSquare, $smallSquare)
{
    if (!is_numeric($bigSquare) || !is_numeric($smallSquare)) {
        return false;
    }

    if ($smallSquare >= $bigSquare) {
        return 0;
    }

    $count = floor($bigSquare / $smallSquare);

    return $count;
}

$bigSquare = 10.5;
$smallSquare = 3.5;

$result = countInnerSquares($bigSquare, $smallSquare);
echo "Количество квадратов меньшего размера, которые можно вписать в квадрат большего размера: $result";
