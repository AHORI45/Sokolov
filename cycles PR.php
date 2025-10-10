<?php
echo "<h2>Задача 1</h2>";
$startNumber = 2;    
$multiplier = 3;     
$quantity = 5;       

$current = $startNumber;
for ($i = 0; $i < $quantity; $i++) {
    echo $current . " ";
    $current *= $multiplier;
}
?>

<?php
echo "<h2>Задача 2</h2>";
$lastNumber = 10;    
$sum = 0;

for ($i = 1; $i <= $lastNumber; $i++) {
    $sum += $i;
}

echo $sum; 
?>

<?php
echo "<h2>Задача 3</h2>";
$lastNumber = 10;
$multiplicationResult = 1; 
$found = false; 

for ($i = 2; $i <= $lastNumber; $i += 2) { 
    $multiplicationResult *= $i;
    $found = true;
}

echo $multiplicationResult;
?>

<?php
echo "<h2>Задача 4</h2>";
$distance = 10; 
$totalDistance = 0;
$days = 7;

for ($day = 1; $day <= $days; $day++) {
    $totalDistance += $distance;
    $distance *= 1.1; 
}

echo round($totalDistance, 2) . " км";
?>

<?php
echo "<h2>Задача 5</h2>";
$totalLegs = 64;
echo "Возможные сочетания гусей и кроликов (лапы: $totalLegs):<br>";

for ($rabbits = 0; $rabbits <= floor($totalLegs / 4); $rabbits++) {
    $remainingLegs = $totalLegs - ($rabbits * 4); 
    if ($remainingLegs >= 0 && $remainingLegs % 2 == 0) {
        $geese = $remainingLegs / 2;
        echo "Кроликов: $rabbits, Гусей: $geese<br>";
    }
}
?>