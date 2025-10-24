<?php
//Удалить лишние пробелы из строки. 
//Дана строка, содержащая слова и пробелы.
//Напишите функцию spaceRemove($str), 
//принимающую параметром строкуи возвращающую новую строку, в которой удалены лишние пробелы.
//Лишними считаются пробелы в начале и конце строки, а из нескольких подряд идущих пробелов нужно оставить один.
//Задайте строку в форме и выведите на экран ее и результат.

function spaceRemove($str) {
    return preg_replace('/\s+/', ' ', trim($str));
}

if($_POST) {
    $input = $_POST['string'];
    $result = spaceRemove($input);
}
?>

<form method="post">
    <input type="text" name="string" value="<?= htmlspecialchars($_POST['string'] ?? '') ?>" required>
    <button>Удалить пробелы</button>
</form>

<?php if ($_POST): ?>
    <p><strong>Исходная:</strong> "<?= htmlspecialchars($input) ?>"</p>
    <p><strong>Результат:</strong> "<?= htmlspecialchars($result) ?>"</p>
    <?php endif; ?>
