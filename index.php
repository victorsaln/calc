<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Кухтулятор</title>
</head>
<body>
<form action="/" method="POST">
    <input type="text" name="number1">
    <select name="operation">
        <option value='+'>+</option>
        <option value='-'>-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="number2">
    <input type="submit" name="submit" value="Результат">
</form>
</body>
</html>

<?php
$result = 0;
if (isset($_POST['submit'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    switch ($operation) {
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
        case '*':
            $result = $number1 * $number2;
            break;
        case '/':
            if( $number2 == 0)
                $error_result = "На ноль делить нельзя!";
            else
                $result = $number1 / $number2;
            break;
            }


    if(empty($error_result)){
        echo ' Ответ: ' . $number1 . ' ' . $operation . ' ' . $number2 . ' ' . '=' . ' ' . $result;}

    else {
        echo $error_result;
    }
}
?>