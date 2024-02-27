<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Дії з числами та рядками</title>
    <!-- Підключення Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Дії з числами:</h1>
    <?php
    ## Отримати залишок від ділення 7 на 3
    $result = 7 % 3;
    echo "<p>Отримати залишок від ділення 7 на 3 = $result</p>";

    ## Отримати цілу частину ділення 7 и 7,15
    $num1 = 7;
    $num2 = 7.15;
    $result = (int)($num1 / $num2);
    echo "<p>ціла частина ділення числа $num1 на $num2: $result</p>";

    ## Отримати корінь з 25 :
    $number = 25;
    $root = pow($number, 1 / 5);
    echo "<p>Корінь з $number дорівнює $root</p>";
    ?>

    <h1>Дії зі строками:</h1>
    <?php
    ## Отримати 4-е слово з фрази - Десять негритят пошли купаться в море :
    $phrase = "Десять негритят пошли купаться в море";
    $words = explode(" ", $phrase);
    $fourth_word = $words[3];
    echo "<p>$fourth_word</p>"; // Виведе: купаться

    ## Отримати 17-й символ із фрази - Десять негритят пошли купаться в море :
    $phrase = "Десять негритят пошли купаться в море";
    $character = mb_substr($phrase, 16, 1);
    echo "<p>$character</p>";

    ## Зробити великою кожну першу букву слів фрази - Десять негритят пошли купаться в море :
    $phrase = "Десять негритят пошли купаться в море";
    $uppercasePhrase = mb_convert_case($phrase, MB_CASE_TITLE);
    echo "<p>$uppercasePhrase</p>";

    ## Порахувати довжину строки - Десять негритят пошли купаться в море :
    $string = "Десять негритят пошли купаться в море";
    $length = mb_strlen($string);
    echo "<p>Довжина строки = $length</p>";
    ?>

    <h1>Дії з логічними даними:</h1>
    <?php
    ## Чи вірно твердження true дорівнює 1 :
    if (true == 1) {
        echo "<p>Твердження true дорівнює 1.</p>";
    } else {
        echo "<p>Твердження true не дорівнює 1.</p>";
    }

    ## Чи вірно твердження false тождественно 0 :
    if (false === 0) {
        echo "<p>Твердження 'false тотожне 0'</p>";
    } else {
        echo "<p>Твердження 'false не тотожне 0'</p>";
    }

    ## Яка строка більше three - три :
    $str1 = "three - три";
    $str2 = "three";

    if (mb_strlen($str1) > mb_strlen($str2)) {
        echo "<p>Перший рядок довший за другий</p>";
    } elseif (mb_strlen($str1) < mb_strlen($str2)) {
        echo "<p>Другий рядок довший за перший</p>";
    } else {
        echo "<p>Рядки мають однакову довжину</p>";
    }

    ## Яке число більше 125 умножити на 13 плюс 7 або 223 плюс 28 помножити 2 :
    $num1 = (125 * 13) + 7;
    $num2 = 223 + (28 * 2);

    if ($num1 > $num2) {
        echo "<p>Перше число більше за друге: $num1</p>";
    } elseif ($num1 < $num2) {
        echo "<p>Друге число більше за перше: $num2</p>";
    } else {
        echo "<p>Обидва числа рівні: $num1</p>";
    }
    ?>
</div>
</body>
</html>
