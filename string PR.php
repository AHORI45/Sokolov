<?php
echo '<h1>Тема:Строки</h1>';
echo '<h2>Задача 1</h2>';
$str = "abc(def)ghi";
$start = -1;
$end = -1;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == '(') {
        $start = $i + 1;
    } elseif ($str[$i] == ')') {
        $end = $i;
        break;
    }
}

if ($start != -1 && $end != -1) {
    for ($i = $start; $i < $end; $i++) {
        echo $str[$i];
    }
}
?>

<?php
echo '<h2>Задача 2</h2>';
$str = "Hello world and php.";
$wordCount = 0;
$inWord = false;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] != ' ' && $str[$i] != '.') {
        if (!$inWord) {
            $wordCount++;
            $inWord = true;
        }
    } else {
        $inWord = false;
    }
}

echo $wordCount;
?>

<?php
echo '<h2>Задача 3</h2>';
$str = "aba level testing php radars";
$word = '';
$words = [];

for ($i = 0; $i <= strlen($str); $i++) {
    if ($i == strlen($str) || $str[$i] == ' ') {
        if ($word != '' && $word[0] == $word[strlen($word) - 1]) {
            $words[] = $word;
        }
        $word = '';
    } else {
        $word .= $str[$i];
    }
}

foreach ($words as $w) {
    echo $w . "\n";
}
?>

<?php
echo '<h2>Задача 4</h2>';
$str = "aabbcde";
$chars = [];
$count = 0;

for ($i = 0; $i < strlen($str); $i++) {
    $found = false;
    for ($j = 0; $j < $count; $j++) {
        if ($chars[$j] == $str[$i]) {
            $found = true;
            break;
        }
    }
    if (!$found) {
        $chars[$count] = $str[$i];
        $count++;
    }
}

echo "Уникальные символы: ";
for ($i = 0; $i < $count; $i++) {
    echo $chars[$i] . " ";
}
echo "\nКоличество: " . $count;
?>

<?php
echo '<h2>Задача 5</h2>';
$str = "rabbit kite track";
$countR = 0;
$countK = 0;
$countT = 0;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == 'r') $countR++;
    if ($str[$i] == 'k') $countK++;
    if ($str[$i] == 't') $countT++;
}

echo "r: $countR, k: $countK, t: $countT";
?>

<?php
echo '<h2>Задача 6</h2>';
$str = "cat dog elephant";
$word = '';
$minLen = strlen($str);
$maxLen = 0;

for ($i = 0; $i <= strlen($str); $i++) {
    if ($i == strlen($str) || $str[$i] == ' ') {
        $len = strlen($word);
        if ($len > 0) {
            if ($len < $minLen) $minLen = $len;
            if ($len > $maxLen) $maxLen = $len;
        }
        $word = '';
    } else {
        $word .= $str[$i];
    }
}

echo "Самое короткое: $minLen, Самое длинное: $maxLen";
?>


<?php
echo '<h2>Задача 7</h2>';
$str = "baaabcaaaaad";
$maxCount = 0;
$currentCount = 0;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == 'a') {
        $currentCount++;
        if ($currentCount > $maxCount) {
            $maxCount = $currentCount;
        }
    } else {
        $currentCount = 0;
    }
}

echo $maxCount;
?>

<?php
echo '<h2>Задача 8</h2>';
$str = "Hello (remove this) world";
$result = '';
$inBrackets = false;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == '(') {
        $inBrackets = true;
    } elseif ($str[$i] == ')') {
        $inBrackets = false;
        continue;
    }
    
    if (!$inBrackets && $str[$i] != ')') {
        $result .= $str[$i];
    }
}

echo $result;
?>