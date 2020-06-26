<?php
include '../vendor/autoload.php';

use App\Examp\Calculator;

$calc = new Calculator();
if (!empty($_POST['num1']) && !empty($_POST['num2'])) {
    $res = $calc->sum($_POST['num1'], $_POST['num2']);
} else {
    $res = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="?" method="post">

        <input type="text" name="num1">
        <input type="text" name="num2">
        <input type="text" value="<?= $res; ?>">
        <input type="submit" value="Посчитать">
    </form>
</body>

</html>