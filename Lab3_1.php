<?php
$x = 7;
$y = 3;

echo ($x + $y) . "<br>";
echo ($x - $y) . "<br>";
echo ($x * $y) . "<br>";
echo ($x / $y) . "<br>";
echo ($x % $y) . "<br>";

echo "<hr size='2'>";

$h = 1;
$h = $h + 2;
$h = $h + 3;
$h = $h + 4;
$h = $h + 5;

echo $h , "<br>";

echo "<hr size='2'>";

echo (9.54 / 4.31) . "<br>";
echo (9.54 / 4) . "<br>";
echo (9 / 4.31) . "<br>";
echo (9 /4) . "<br>";
echo (int) (9 /4) . "<br>";

echo "<hr size='2'>";

echo (5 % 3) . "\n";
echo (5 % -3) . "\n";
echo (-5 %3) . "\n";
echo (-5 %-3). "\n";

$k = rand(0, 99999);

echo "<hr size ='2'>";

echo ($k % 2 ==0) ? "$k is an even number." : "$k  is an odd number." , "<br>";
?>