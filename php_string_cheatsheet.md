# PHP String Methods Cheat Sheet

A quick reference for commonly used PHP string functions.

------------------------------------------------------------------------

## 🔤 Basic String Info

### strlen()

Returns string length

``` php
strlen("Hello"); // 5
```

### str_word_count()

Counts words

``` php
str_word_count("Hello world"); // 2
```

------------------------------------------------------------------------

## 🔍 Searching

### strpos()

Find position of first occurrence

``` php
strpos("Hello world", "world"); // 6
```

### strrpos()

Find last occurrence

``` php
strrpos("Hello world world", "world"); // 12
```

------------------------------------------------------------------------

## ✂️ Modifying Strings

### str_replace()

Replace text

``` php
str_replace("world", "PHP", "Hello world"); // Hello PHP
```

### substr()

Extract part of string

``` php
substr("Hello world", 0, 5); // Hello
```

### trim()

Remove whitespace

``` php
trim(" Hello "); // "Hello"
```

------------------------------------------------------------------------

## 🔠 Case Conversion

### strtoupper()

``` php
strtoupper("hello"); // HELLO
```

### strtolower()

``` php
strtolower("HELLO"); // hello
```

### ucfirst()

Capitalize first letter

``` php
ucfirst("hello"); // Hello
```

### ucwords()

Capitalize each word

``` php
ucwords("hello world"); // Hello World
```

------------------------------------------------------------------------

## 🔄 Comparing Strings

### strcmp()

Case-sensitive compare

``` php
strcmp("a", "b"); // < 0
```

### strcasecmp()

Case-insensitive compare

``` php
strcasecmp("Hello", "hello"); // 0
```

------------------------------------------------------------------------

## 🔗 Joining & Splitting

### explode()

String → array

``` php
explode(",", "a,b,c"); // ["a","b","c"]
```

### implode()

Array → string

``` php
implode(",", ["a","b","c"]); // "a,b,c"
```

------------------------------------------------------------------------

## 🧪 Checking Strings

### str_contains()

``` php
str_contains("Hello world", "world"); // true
```

### str_starts_with()

``` php
str_starts_with("Hello", "He"); // true
```

### str_ends_with()

``` php
str_ends_with("Hello", "lo"); // true
```

------------------------------------------------------------------------

## ⚠️ Common Mistakes

-   Forgetting strings are **0-indexed**
-   Not checking if `strpos()` returns `false`
-   Mixing `==` with `===`
-   Ignoring case sensitivity

------------------------------------------------------------------------

## 🧠 Tip

Practice by combining functions:

``` php
$name = "  john doe ";
echo ucwords(trim($name)); // John Doe
```
