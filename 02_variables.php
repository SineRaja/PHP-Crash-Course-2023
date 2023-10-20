<?php

// What is a variable
// A variable is a name given to a memory location that stores data during the execution of a script.

// Variable types

/*
 *String
 * Integer
 * Float
 * Boolean
 * Null
 * Array
 * Object
 * Resource
 */

// Declare variables

$name = 'Raja Sine'; // String variable
$age = 26; // Integer variable
$isMale = true; // Boolean variable
$height = 1.85; // Float variable
$salary = null; // Null variable

// Print the variables. Explain what is concatenation
// Concatenation is the process of joining two strings together.

echo $name.'<br>'; // Prints the value of the $name variable and adds a line break.
echo $age.'<br>'; // Prints the value of the $age variable and adds a line break.
echo $isMale.'<br>'; // Prints the value of the $isMale variable and adds a line break.
echo $height.'<br>'; // Prints the value of the $height variable and adds a line break.
echo $salary.'<br>'; // Prints the value of the $salary variable and adds a line break.

// Print types of the variables
echo gettype($name).'<br>'; // Prints the data type of the $name variable and adds a line break.
echo gettype($age).'<br>'; // Prints the data type of the $age variable and adds a line break.
echo gettype($isMale).'<br>'; // Prints the data type of the $isMale variable and adds a line break.
echo gettype($height).'<br>'; // Prints the data type of the $height variable and adds a line break.
echo gettype($salary).'<br>'; // Prints the data type of the $salary variable and adds a line break.

// Print the whole variable
var_dump($name, $age, $isMale, $height, $salary).'<br>'; // Dumps information about the variables and adds a line break.

// Change the value of the variable
$name = false; // Changes the value of the $name variable to boolean false.

// Print type of the variable
echo gettype($name).'<br>'; // Prints the data type of the $name variable and adds a line break.

// Variable checking functions
is_string($name); //false // Checks if the variable $name is of type string and returns false.
is_int($age); //true // Checks if the variable $age is of type integer and returns true.
is_bool($isMale); //true // Checks if the variable $isMale is of type boolean and returns true.
is_double($height); //true // Checks if the variable $height is of type float and returns true.

// Check if variable is defined
isset($name); //true // Checks if the variable $name is set and not null, returns true.
isset($address); // false // Checks if the variable $address is set and not null, returns false.

// Constants
define('PI', 3.14); // Defines a constant named PI with a value of 3.14.
echo PI.'<br>'; // Prints the value of the constant PI and adds a line break.

// Using PHP built-in constants
echo SORT_ASC.'<br>'; // Prints the value of the constant SORT_ASC and adds a line break.
echo PHP_INT_MAX.'<br>'; // Prints the value of the constant PHP_INT_MAX and adds a line break.


