<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) * $c.'<br>'; // Performs the operation (5 + 4) * 1.2 and prints the result with a line break.
echo $a - $b.'<br>'; // Subtracts $b from $a and prints the result with a line break.
echo $a * $b.'<br>'; // Multiplies $a by $b and prints the result with a line break.
echo $a / $b.'<br>'; // Divides $a by $b and prints the result with a line break.
echo $a % $b.'<br>'; // Computes the modulus of $a and $b and prints the result with a line break.

// Assignment with math operators
$a = $a + $b; echo $a.'<br>'; // Adds $a and $b, assigns the result back to $a, and prints $a with a line break.
$a += $b; echo $a.'<br>'; // Adds $b to $a and prints $a with a line break.
$a -= $b; echo $a.'<br>'; // Subtracts $b from $a and prints $a with a line break.
$a *= $b; echo $a.'<br>'; // Multiplies $a by $b and prints $a with a line break.
$a /= $b; echo $a.'<br>'; // Divides $a by $b and prints $a with a line break.
$a %= $b; echo $a.'<br>'; // Computes the modulus of $a and $b and prints $a with a line break.

// Increment operator
echo $a++.'<br>'; // Prints $a and then increments it by 1.
echo ++$a.'<br>'; // Increments $a by 1 and then prints it.

// Decrement operator
echo $a--.'<br>'; // Prints $a and then decrements it by 1.
echo --$a.'<br>'; // Decrements $a by 1 and then prints it.

// Number checking functions
is_float(1.25); //true // Checks if the provided value is a float.
is_double(1.25); //true // Checks if the provided value is a double.
is_int(5); //true // Checks if the provided value is an integer.
is_numeric("3.45"); // true // Checks if the provided string is numeric.
is_numeric("3g.15"); //false // Checks if the provided string is numeric.

// Conversion
$strNumber = '12.43';
$number = (float)$strNumber; // Converts the string to a float.
var_dump($number); // Dumps information about the variable $number.

// Number functions
echo "abs(-15) ".abs(-15) . '<br>'; // Prints the absolute value of -15.
echo "pow(2, 3) " . pow(2, 3) . '<br>'; // Raises 2 to the power of 3.
echo "sqrt(16) " . sqrt(16) . '<br>'; // Computes the square root of 16.
echo "max(2,3) " . max(2,3) . '<br>'; // Returns the highest value from the arguments.
echo "min(2,3) " . min(2,3) . '<br>'; // Returns the lowest value from the arguments.
echo "round(2.4) " . round(2.4) . '<br>'; // Rounds the float to the nearest integer.
echo "round(2.6) " . round(2.6) . '<br>'; // Rounds the float to the nearest integer.
echo "floor(2.6) " . floor(2.6) . '<br>'; // Rounds fractions down to the nearest integer.
echo "ceil(2.4) " .ceil(2.4) . '<br>'; // Rounds fractions up to the nearest integer.

// Formatting numbers
$number = 123457689.12345; // Assigns a number to the variable $number.
echo number_format($number, 2, ',',' '); // Formats a number with grouped thousands and two decimal places.

// Reference: https://www.php.net/manual/en/ref.math.php


