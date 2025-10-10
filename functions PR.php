<?php
echo '<h1>Тема:Функции</h1>';
echo '<h2>Задача 1</h2>';
function circleLength($radius) {
    return 2 * 3.14 * $radius;
}

if ($_POST && isset($_POST['radius'])) {
    $radius = $_POST['radius'];
    $length = circleLength($radius);
}
?>

<form method="post">
    <label>Радиус окружности:</label>
    <input type="number" name="radius" step="0.1" required>
    <input type="submit" value="Вычислить">
</form>

<?php
if (isset($length)) {
    echo "<p>Длина окружности: $length</p>";
}
?>

<?php
echo '<h2>Задача 2</h2>';
function triangleArea($a, $b, $c) {
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        $p = ($a + $b + $c) / 2;
        return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
    } else {
        return 0;
    }
}

if ($_POST && isset($_POST['side_a'])) {
    $a = $_POST['side_a'];
    $b = $_POST['side_b'];
    $c = $_POST['side_c'];
    $area = triangleArea($a, $b, $c);
}
?>

<form method="post">
    <label>Сторона a:</label>
    <input type="number" name="side_a" step="0.1" required><br>
    
    <label>Сторона b:</label>
    <input type="number" name="side_b" step="0.1" required><br>
    
    <label>Сторона c:</label>
    <input type="number" name="side_c" step="0.1" required><br>
    
    <input type="submit" value="Вычислить">
</form>

<?php
if (isset($area)) {
    if ($area > 0) {
        echo "<p>Площадь треугольника: " . round($area, 2) . "</p>";
    } else {
        echo "<p>Треугольник с такими сторонами не существует (площадь = 0)</p>";
    }
}
?>

<h2>Задача 3</h2>
<form method="GET">
    Введите число: <input type="number" name="a" required><br>
    <input type="submit" value="Наибольший делитель заданного числа">
</form>

<?php
function divisorOfNumber($a) {
    $a = (int)$a; 
    if ($a <= 1) { 
        return 0;
    }
    for ($i = $a - 1; $i >= 1; $i--) { 
        if ($a % $i == 0) { 
            return $i; 
    }
}
return 0; 
}
if (isset($_GET['a'])) {
    $input = $_GET['a'];
    $a = (int)$input; 
    if ((string)$a === $input && $a > 0) {
        $result = divisorOfNumber($a);
        if ($result == 0) {
            echo "Для числа $a наибольшего делителя нет";
        } else {
            echo "Наибольший делитель числа $a: $result";
        }
    } else {
        echo "Введите положительное целое число!";
    }
}
?>

<h2>Задача 4</h2>
    <form action="">
        <label>Введите число: <input type="text" name="task4"></label><br>
        <input type="submit" value="Вычислить"><br><br>
    </form>
<?php
function findAllDividers($num) {
     $dividers = [];
    if ($num <= 0) {
        return [];
    }
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $dividers[] = $i;
        }
    }
    return $dividers;
}
if(isset($_GET["task4"]) && $_GET["task4"] != ""){
    $x = $_GET["task4"];
    $result = findAllDividers($x);
    echo "Все делители для ", $x, ": ";
    foreach ($result as $divider) {
    echo $divider, ' ';
    }
} else {}
?>

<h2>Задача 5</h2>
    <form method="GET">
        Введите числа (через пробел): <input type="text" name="numbers" required><br>
        <input type="submit" value="Посчитать сумму квадратов">
    </form>

<?php
function sumOfSquares($numbers) {
    $sum = 0; 
    foreach ($numbers as $num) {
        $sum = $sum + ($num * $num);
    }
    return $sum;
}
if (isset($_GET['numbers'])) {
    $input = $_GET['numbers'];
    $numbers = explode(" ", $input); 
    $valid = true;
    foreach ($numbers as &$num) {
        if ((string)(float)$num === $num) { 
            $num = (float)$num; 
        } else {
            $valid = false; 
            break;
        }
    }

    if ($valid && !empty($numbers)) {
        $result = sumOfSquares($numbers);
        echo "Сумма квадратов чисел [" . implode(", ", $numbers) . "]: $result";
    } else {
        echo "Введите корректные числа через пробел!";
    }
}
?>