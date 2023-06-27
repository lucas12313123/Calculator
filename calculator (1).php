<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="num1">Number 1:</label>
    <input type="text" name="num1" id="num1">

    <label for="num2">Number 2:</label>
    <input type="text" name="num2" id="num2">

    <input type="submit" name="operation" value="+">
    <input type="submit" name="operation" value="-">
    <input type="submit" name="operation" value="*">
    <input type="submit" name="operation" value="/">
    <input type="submit" name="operation" value="%">
</form>

<?php
if (isset($_POST['operation'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    if ($operation == '/' && $num2 == 0) {
        echo "Error: Cannot divide by 0.";
    } elseif ($operation == '%' && $num2 == 0) {
        echo "Error: Cannot divide by 0.";
    } else {
        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num1 / $num2;
                break;
            case '%':
                $result = $num1 % $num2;
                break;
            default:
        }
        echo "Answer: $result";
    }
}
?>
</body>
</html>

