<?php
$name = "kuba";

$age = 24;

$gpa = 2.5;

$price = 4.99;
$quantity = 2;
echo $name, "<br>";
echo "hello {$name} <br>";
echo "you are {$age} old";

echo "your gpa is {$gpa} <br>";

echo "your pizza is \${$price} <br>";
$total = $quantity * $price;
echo "total price is \${$total}";
