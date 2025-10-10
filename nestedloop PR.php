<?php
echo '<h1>Задача 1</h1>';
for ($i = 1; $i <= 10; $i++){
    for($j = 1; $j <= 10;$j++){
        echo $i * $j . "";
    }
    echo "<br>";
}
?>


<?php
echo '<h1>Задача 3</h1>';
    echo'<table border="1" cellspacing="0" cellpading="5">';
    for ($i=1;$i<=10;$i++){
        echo "<tr>";
        for ($j=1;$j<=10;$j++){
            echo '<td>' . ($i*$j) . '<td>';
    }
    echo '<tr>';
}
echo'</table>';
echo '<br>'
?>

<?php
echo '<h1>Задача 4</h1>';
$start = 10;
$end = 99;
$cols = 5;
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table { border-collapse: collapse; margin: 20px; }
        td { 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center;
        }
        th { 
            border: 1px solid black; 
            padding: 10px; 
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Число</th>
            <th>Квадрат</th>
            <th>Число</th>
            <th>Квадрат</th>
            <th>Число</th>
            <th>Квадрат</th>
            <th>Число</th>
            <th>Квадрат</th>
            <th>Число</th>
            <th>Квадрат</th>
        </tr>
        <?php for($i = 0; $i < ceil(($end - $start + 1) / $cols); $i++): ?>
            <tr>
                <?php for($j = 0; $j < $cols; $j++): ?>
                    <?php $num = $start + $i + $j * ceil(($end - $start + 1) / $cols); ?>
                    <?php if($num <= $end): ?>
                        <td><?= $num ?></td>
                        <td><?= $num * $num ?></td>
                    <?php else: ?>
                        <td></td><td></td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>

<?php
echo '<h1>Задача 5</h1>';
$a = 8;  
$b = 12; 
$border_char = '#'; 
$fill_char = '*';  

for($i = 1; $i <= $a; $i++) {
    for($j = 1; $j <= $b; $j++) {
        if($i == 1 | $i == $a | $j == 1 || $j == $b) {
            echo $border_char;
        } else {
            echo $fill_char;
        }
        echo " ";
    }
    echo "<br>"; 
}
?>

<?php
echo '<h1>Задача 6</h1>';
$n = 10;
echo "Делители числа $n:<br>";

for ($i = 1; $i <= $n; $i++) {
    if ($n % $i == 0) {
        echo $i . " ";
    }
}
?>

