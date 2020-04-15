<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>SQUARE</h1>
    <form action="sq.php" method="post">
        <input type="text" name="a">
        <select name="op" id="">
            <option value="perimetr">P</option>
            <option value="area">S</option>
        </select>

        <input type="submit" name="ok">
    </form>
    <h1>TRIANGLE</h1>
    <form action="triang.php" method="post">
        <input type="text" name="a">Длинна катета
        <input type="text" name="b">Длинна катета
        <select name="trg">
            <option value="perimetr">P</option>
        <option value="area">S</option> 
        </select>
        <input type="submit" name="ok">
    </form>
    <h1>CIRCLE</h1>
    <form action="cir.php" method="post">
        <input type="text" name="a">Введите радиус
        <select name="cr" id="">
            <option value="perimetr">P</option>
            <option value="area">S</option>
        </select>

        <input type="submit" name="ok">
    </form>
</body>

</html>