# PHP Cheat Sheet (Quick Reference)

A concise guide to help you while doing exercises and following tutorials.

---

## 1. Basic Syntax

```php
<?php
  echo "Hello, World!";
?>
```

* PHP code starts with `<?php` and ends with `?>`
* Statements end with `;`

---

## 2. Variables

```php
$name = "John";
$age = 25;
$isStudent = true;
```

* Variables start with `$`
* No need to declare type

---

## 3. Data Types

* String: `$x = "Hello";`
* Integer: `$x = 10;`
* Float: `$x = 10.5;`
* Boolean: `$x = true;`
* Array: `$x = [1, 2, 3];`
* NULL: `$x = null;`
* object type
* resorce data type

```php
$x = 5
var_dump($x) // return type of x
is_int($x)
is_float($x)
PHP_INT_MAX // The largest integer supported
PHP_INT_MIN //The smallest integer supported
PHP_INT_SIZE //  The size of an integer in bytes)
PHP_FLOAT_MAX // The largest representable floating point number
PHP_FLOAT_MIN // The smallest representable positive floating point number
PHP_FLOAT_DIG // The number of decimal digits that can be rounded into a float and back without precision loss
PHP_FLOAT_EPSILON // The smallest representable positive number x, so that x + 1.0 != 1.0
is_finite() // return true if in range of allowed values
is_infinite()
is_nan() // An invalid calculation will return a NAN value, and is_nan() is used to check i
intval() //function is used to get the integer value of a variable
```
### Casting

---

## 4. Output

```php
echo "Hello";   // does not reurn
print "Hello"; // returns 1
```

---

## 5. Operators

### Arithmetic

```php
+  -  *  /  %  **
```

### Assignment

```php
=  +=  -=  *=  /=
```

### Comparison

```php
==  ===  !=  !==  >  <  >=  <=
```

### Logical

```php
&&  ||  !
```

---

## 6. Conditional Statements

```php
if ($x > 10) {
  echo "Big";
} elseif ($x == 10) {
  echo "Equal";
} else {
  echo "Small";
}
```

### Switch

```php
switch ($color) {
  case "red":
    echo "Red";
    break;
  default:
    echo "Other";
}
```

---

## 7. Loops

### While

```php
while ($i < 5) {
  $i++;
}
```

### For

```php
for ($i = 0; $i < 5; $i++) {
  echo $i;
}
```

### Foreach

```php
foreach ($arr as $value) {
  echo $value;
}
```

---

## 8. Functions
```
global $x;

PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

```

```php
function greet($name) {
  return "Hello " . $name;
}

echo greet("John");
```

---

## 9. Arrays

### Indexed

```php
$arr = ["A", "B", "C"];
```

### Associative

```php
$person = [
  "name" => "John",
  "age" => 25
];
```

Access:

```php
echo $arr[0];
echo $person["name"];
```

---

## 10. Forms (GET & POST)

```php
$name = $_GET['name'];
$name = $_POST['name'];
```

---

## 11. Superglobals

* `$_GET`
* `$_POST`
* `$_SERVER`
* `$_SESSION`
* `$_COOKIE`

---

## 12. Strings

```php
strlen($str);
str_replace("a", "b", $str);
strpos($str, "text");
```

---

## 13. Include Files

```php
include 'file.php';
require 'file.php';
```

---

## 14. File Handling

```php
$file = fopen("test.txt", "r");
fclose($file);
```

---

## 15. Sessions

```php
session_start();
$_SESSION['user'] = "John";
```

---

## 16. Cookies

```php
setcookie("user", "John", time() + 3600);
```

---

## 17. Basic Debugging

```php
var_dump($var);
print_r($var);
```

---

## 18. Common Tips

* Use `===` instead of `==` when possible
* Always validate user input
* Use `require` for critical files
* Keep code organized in functions

---

## 19. Error Handling

```php
try {
  // code
} catch (Exception $e) {
  echo $e->getMessage();
}
```

---

## 20. Quick Example

```php
<?php
  $numbers = [1, 2, 3];

  foreach ($numbers as $num) {
    echo $num * 2;
  }
?>
```

---

Keep this open while practicing — most exercises will reuse these patterns.
