<!DOCTYPE html>
<html>
    <title>Hello world</title>
<body>
   <h1>Hello</h1>
<p>small website</p>
<?php

echo "hello, World<br>";
echo phpversion();

$name = "<br>Jon Doe";
$age = 12;
$height = 2.3;
print("Hello $name<br>Your age is $age<br>Your height is $height");
$num1 = 10;
$num2 = 4;
print("<br>$num1 + $num2 = ");
print($num1+$num2);
print("<br>$num1 * $num2 = ");
print($num1*$num2);
print("<br>$num1 - $num2 = ");
print($num1-$num2);
print("<br>$num1 / $num2 = ");
print($num1/$num2);
print("<br>$num1 % $num2 = ");
print($num1%$num2);
print("<br>$num1 ** $num2= ");
print($num1**$num2);

?> 
</body>

</html>