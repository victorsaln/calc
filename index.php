<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Кухтулятор</title>
</head>
<body>
<form action="" method="POST" class="calculate-form">
        <input type="text" name="number1" class="numbers">
    <select class="operations" name="operation">
        <option value='plus'>+</option>
        <option value='minus'>-</option>
    </select>
        <input type="text" name="number2" class="numbers">
    <input class="submit_form" type="submit" name="submit" value="Результат">
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    switch ($operation) {
        case 'plus':
            $result = $number1 + $number2;
            break;
        case 'minus':
            $result = $number1 - $number2;
            break;
    }
{
        echo "<div class='answer-text'>Ответ:$number1$operation$number2 = $result</div>";
    }
}
?>