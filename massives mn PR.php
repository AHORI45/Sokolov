<?php
echo '<h1>Тема:Многомерные массивы</h1>';
echo '<h2>Задание 1</h2>';
$array = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

echo "<table border='1'>";
foreach ($array as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<?php
echo '<h2>Задание 2</h2>';
$array = [];
$number = 10;

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 9; $j++) {
        if ($number <= 99) {
            $array[$i][$j] = $number * $number;
            $number++;
        }
    }
}

echo "<table border='1'>";
foreach ($array as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>

<?php
echo '<h2>Задание 3</h2>';
$array = [
    [15, 23, 8, 41],
    [3, 67, 12, 9],
    [45, 2, 34, 18],
    [7, 29, 56, 4],
    [33, 11, 27, 6]
];

$min = $array[0][0];
$max = $array[0][0];
$min_i = 0; $min_j = 0;
$max_i = 0; $max_j = 0;

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 4; $j++) {
        if ($array[$i][$j] < $min) {
            $min = $array[$i][$j];
            $min_i = $i;
            $min_j = $j;
        }
        if ($array[$i][$j] > $max) {
            $max = $array[$i][$j];
            $max_i = $i;
            $max_j = $j;
        }
    }
}

echo "Минимальный элемент: $min (строка $min_i, столбец $min_j)<br>";
echo "Максимальный элемент: $max (строка $max_i, столбец $max_j)";
?>

<?php
echo '<h2>Задание 4</h2>';
$n = 5;
$array = [];

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $array[$i][$j] = abs($i - $j);
    }
}

echo "<table border='1'>";
foreach ($array as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<?php
echo '<h2>Задание 5</h2>';
$sportShop = [
    "Футбол" => [
        "Nike" => "Бутсы Mercurial",
        "Adidas" => "Футбольный мяч",
        "Puma" => "Форма для футбола"
    ],
    "Баскетбол" => [
        "Nike" => "Кроссовки Air Jordan",
        "Spalding" => "Баскетбольный мяч"
    ],
    "Теннис" => [
        "Wilson" => "Теннисная ракетка",
        "Babolat" => "Теннисные мячи"
    ],
    "Плавание" => []
];

foreach ($sportShop as $category => $products) {
    echo "<h3>$category:</h3>";
    if (empty($products)) {
        echo "Здесь пока нет товаров<br>";
    } else {
        foreach ($products as $brand => $product) {
            echo "- $brand: $product<br>";
        }
    }
    echo "<br>";
}
?>

<?php
echo '<h2>Задание 6</h2>';
$newCategory = "Бег";

$sportShop[$newCategory] = [];

echo "<h2>Магазин после добавления категории:</h2>";
foreach ($sportShop as $category => $products) {
    echo "<h3>$category:</h3>";
    if (empty($products)) {
        echo "Здесь пока нет товаров<br>";
    } else {
        foreach ($products as $brand => $product) {
            echo "- $brand: $product<br>";
        }
    }
    echo "<br>";
}
?>