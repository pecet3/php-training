<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form training</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>x: </label><br>
        <input type="text" name="x"><br>
        <label>y: </label><br>
        <input type="text" name="y"><br>
        <label>z: </label><br>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    </form>
</body>

</html>

<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;
// $total = pow($x, $y);
// $total = sqrt($x);
// $total = max($x, $y, $z);
// $total = min($x, $y, $z);
// $total = pi();
$total = rand(1, 100);
echo "total is {$total}";
?>