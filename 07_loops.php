<?php

// while



// Loop with $counter

$counter = 0;
while ($counter < 2) {
    echo $counter . '<br>';
    $counter++;
}

// do - while

do {
    echo  $counter.'<br>';
    $counter++;
}while ($counter < 2);

// for
    for ($i = 0; $i < 10; $i++){
        echo $i.'<br>';
    }

// foreach
    $fruits = ['apple', 'mango', 'banana'];
    foreach ($fruits as $fruit) {
        echo $fruit.'<br>';
    }

foreach ($fruits as $i => $fruit) {
    echo $i.'<br>';
}

// Iterate Over associative array.

$person = [
    'name' => 'Raja',
    'sine' => 'Sine',
    'age' => 26,
    'location' => 'Leicester UK',
    'lang' => ['python', 'javascript', 'php']
];

foreach ($person as $key => $value) {
    if(is_array($value)){
        echo $key . ' ' . implode(',', $value) . '<br>';
    }else {
        echo $key . ' ' . $value . '<br>';
    }
}