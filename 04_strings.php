<?php

// Create simple string
$name = 'Raja';
$string = 'Hello I am ' . $name . ' I am 26'; // Concatenates the variable $name with the string and assigns it to $string.
$string2 = "Hello I am $name. I am 26"; // Interpolates the variable $name in the string and assigns it to $string2.
echo $string . '<br>'; // Prints the value of $string and adds a line break.
echo $string2 . '<br>'; // Prints the value of $string2 and adds a line break.

// String concatenation
echo 'Hello ' . ' World' . ' and PHP' . '<br>'; // Concatenates the given strings and prints the result with a line break.

// String functions
$string = "    Hello World   ";

echo "1 - " . strlen($string) .'<br>'; // Returns the length of the string.
echo "2 - " . trim($string)  .'<br>'; // Removes whitespace from the beginning and end of a string.
echo "3 - " . ltrim($string)  .'<br>'; // Removes whitespace from the beginning of a string.
echo "4 - " . rtrim($string) .'<br>'; // Removes whitespace from the end of a string.
echo "5 - " . str_word_count($string) .'<br>'; // Counts the number of words in a string.
echo "6 - " . strrev($string) .'<br>'; // Reverses a string.
echo "7 - " . strtoupper($string)  .'<br>'; // Converts a string to uppercase.
echo "8 - " . strtolower($string) .'<br>'; // Converts a string to lowercase.
echo "9 - " . ucfirst('hello') .'<br>'; // Converts the first character of a string to uppercase.
echo "10 - " . lcfirst('HELLO')  .'<br>'; // Converts the first character of a string to lowercase.
echo "11 - " . ucwords('hello world') .'<br>'; // Converts the first character of each word in a string to uppercase.
echo "12 - " . strpos($string, 'world') .'<br>'; // Finds the position of the first occurrence of a substring in a string.
echo "13 - " . stripos($string, 'world') .'<br>'; // Finds the position of the first occurrence of a case-insensitive substring in a string.
echo "14 - " . substr($string, 8, 6 ) .'<br>'; // Returns a part of a string.
echo "15 - " . str_replace('World','PHP',$string) .'<br>'; // Replaces all occurrences of a search string with a replacement in a string.
echo "16 - " . str_ireplace('world', 'PHP', $string) .'<br>'; // Replaces all occurrences of a case-insensitive search string with a replacement in a string.

// Multiline text and line breaks
$longText = "
Hello, my name is Raja Sine
I am 26
I love PHP
";
echo $longText.'<br>'; // Prints the multiline text with line breaks.
echo nl2br($longText).'<br>'; // Inserts HTML line breaks before all newlines in a string.

// Multiline text and reserve HTML tags
$longText = "
Hello, my name is <b>Raja Sine</b>
I am 26
I love <b>PHP</b>    
";

echo  $longText.'<br>'; // Prints the multiline text with reserved HTML tags.
echo htmlentities($longText).'<br>'; // Converts all applicable characters to HTML entities.
echo html_entity_decode('&lt;b&gt;Raja&lt;/b&gt;'); // Converts HTML entities to their corresponding characters.

// Reference: https://www.php.net/manual/en/ref.strings.php
