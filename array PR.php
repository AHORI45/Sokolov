<?php
echo '<h1>Тема:Массивы</h1>';
echo '<h2>Задача 1</h2>';
$nums = [3, 7, 2, 9, 1, 5, 8];

$min = $nums[0];
$max = $nums[0];
$min_index = 0;
$max_index = 0;

for ($i = 1; $i < count($nums); $i++) {
    if ($nums[$i] < $min) {
        $min = $nums[$i];
        $min_index = $i;
    }
    if ($nums[$i] > $max) {
        $max = $nums[$i];
        $max_index = $i;
    }
}

echo "Минимальный элемент: индекс $min_index, значение $min<br>";
echo "Максимальный элемент: индекс $max_index, значение $max";
?>

<?php
echo '<h2>Задача 2</h2>';
$nums = [2, 3, 4, 5];

$sum = 0;
$product = 1;

for ($i = 0; $i < count($nums); $i++) {
    $sum += $nums[$i];
    $product *= $nums[$i];
}

echo "Сумма элементов: $sum<br>";
echo "Произведение элементов: $product";
?>

<?php
echo '<h1>Задание 3</h1>';
$arr = [3, 7, 1, 9, 2, 8];
$sum = 0;
$count = count($arr);
foreach ($arr as $value) {
    $sum += $value;
}
$average = $count > 0 ? $sum / $count : 0;
echo "Среднее арифметическое элементов: $average";
?>

<?php
echo '<h1>Задание 4</h1>';
$original = [1.5, -2.3, 0.0, 4.1, -3.6];
$result = [];

foreach ($original as $value) {
    if ($value > 0) {
        $result[] = $value * $value;
    } elseif ($value < 0) {
        $result[] = abs($value);
    } else {
        $result[] = 0;
    }
}
echo "Исходный массив: ";
foreach ($original as $val) {
    echo "$val ";
}
echo "Преобразованный массив: ";
foreach ($result as $val) {
    echo "$val ";
}
?>

<?php
echo '<h1>Задание 5</h1>';
$arr = [10, 20, 30, 40, 50, 60];
for ($i = 0; $i < count($arr); $i += 2) {
    echo $arr[$i] . " ";
}
?>

<?php
echo '<h1>Задание 6</h1>';
$arr = [2, 5, 3, 8, 7, 10];
for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] > $arr[$i - 1]) {
        echo $arr[$i] . " ";
    }
}
?>

<?php
echo '<h1>Задание 7</h1>';
$arr = [1, 2, 3, 4, 5];
for ($i = 0; $i < count($arr) - 1; $i += 2) {
    $temp = $arr[$i];
    $arr[$i] = $arr[$i + 1];
    $arr[$i + 1] = $temp;
}
foreach ($arr as $value) {
    echo $value . " ";
}
?>