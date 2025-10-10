<?php
echo '<h1>Тема:Оператор выбора</h1>';
echo '<h2>Задача 1</h2>';
$digit = 7; 

switch ($digit) {
    case 0: echo "zero";
    break;
    case 1: echo "one";
    break;
    case 2: echo "two";
    break;
    case 3: echo "three";
    break;
    case 4: echo "four";
    break;
    case 5: echo "five";
    break;
    case 6: echo "six";
    break;
    case 7: echo "seven";
    break;
    case 8: echo "eight";
    break;
    case 9: echo "nine";
    break;
    default: echo "Это не цифра от 0 до 9";
}
?>

<?php
echo '<h2>Задача 2</h2>';
$month = 1; 

switch ($month) {
    case 1:
        echo "1 января - Новый год<br>";
        echo "7 января - Рождество";
        break;
    case 2:
        echo "23 февраля - День защитника Отечества";
        break;
    case 3:
        echo "8 марта - Международный женский день";
        break;
    case 5:
        echo "1 мая - Праздник весны и труда<br>";
        echo "9 мая - День Победы";
        break;
    case 6:
        echo "12 июня - День России";
        break;
    case 11:
        echo "4 ноября - День народного единства";
        break;
    default:
        echo "В этом месяце нет официальных праздников";
}
?>

<?php
echo '<h2>Задача 3</h2>';
$number = 34;
$lastDigit = $number % 10;

switch ($lastDigit) {
    case 0: echo "Квадрат числа заканчивается на 0";
    break;
    case 1: echo "Квадрат числа заканчивается на 1";
    break;
    case 2: echo "Квадрат числа заканчивается на 4";
    break;
    case 3: echo "Квадрат числа заканчивается на 9";
    break;
    case 4: echo "Квадрат числа заканчивается на 6";
    break;
    case 5: echo "Квадрат числа заканчивается на 5";
    break;
    case 6: echo "Квадрат числа заканчивается на 6";
    break;
    case 7: echo "Квадрат числа заканчивается на 9";
    break;
    case 8: echo "Квадрат числа заканчивается на 4";
    break;
    case 9: echo "Квадрат числа заканчивается на 1";
    break;
}
?>

<?php
echo '<h2>Задача 4</h2>';
$k = 22;
if ($k >= 11 && $k <= 19) {
    echo "Мне $k лет";
} else {
    $lastDigit = $k % 10;
    switch ($lastDigit) {
        case 1:
            echo "Мне $k год";
            break;
        case 2:
        case 3:
        case 4:
            echo "Мне $k года";
            break;
        default:
            echo "Мне $k лет";
    }
}
?>

<?php
echo '<h2>Задача 5</h2>';
$unit = 3; 
$mass = 100; 

switch ($unit) {
    case 1: 
        $result = $mass;
        echo "$mass кг = $result кг";
        break;
    case 2: 
        $result = $mass / 1000000;
        echo "$mass мг = $result кг";
        break;
    case 3: 
        $result = $mass / 1000;
        echo "$mass г = $result кг";
        break;
    case 4: 
        $result = $mass * 1000;
        echo "$mass т = $result кг";
        break;
    case 5: 
        $result = $mass * 100;
        echo "$mass ц = $result кг";
        break;
    default:
        echo "Неверный номер единицы измерения";
}
?>