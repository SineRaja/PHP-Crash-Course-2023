<?php

$age = 20;
$salary = 300000;

// Sample if
    if ($age === 20) {
        echo 'yes'.'<br>';
    }

// Without circle braces
    if ($age === 20) echo '1'.'<br>';

// Sample if-else
    if ($age > 20) {
        echo "1".'<br>';
    } else {
        echo "2".'<br>';
    }

// Difference between == and ===
    if ($age == 20) {
        echo "1".'<br>'; //true
    }
    if ($age == '20'){
        echo "2".'<br>';//true
    }
    // here === also check types
    if ($age === 20) {
        echo "1".'<br>';//true
    }
    if ($age === '20'){
        echo "2".'<br>'; //false
    }

// if AND
    if ($age > 20 && $salary === 300000 ) {
        echo 'Do Something'.'<br>';
    }
// if OR
if ($age > 20 || $salary === 300000 ) {
    echo 'Do Something'.'<br>';
}

// Ternary if
    echo $age < 22 ? 'Young' : 'Old'.'<br>';

// Short ternary
    $agee = 0;
    $myAge = $agee ?: 18;
    echo '<pre>';
    var_dump($myAge).'<br>';
    echo '</pre>';

// Null coalescing operator
    $myName = isset($name) ? $name : 'Raja';
    $myName = $name ?? 'Sine';
// switch

    $userRole = 'admin'; // editor, user, admin
    switch ($userRole) {
        case 'admin':
            echo 'admin';
            break;
        case 'editor':
            echo 'editor';
            break;
        case 'user':
            echo 'user';
            break;
        default:
            echo  'Invalid role';
    }
