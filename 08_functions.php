<?php

// Function which prints "Hello I am Raja"
    function hello(){
        echo "Hello I am Raja <br>";
    }
    hello();
// Function with argument

    function hello1($name){
        echo "Hello Im $name <br>";
    }
    hello1('Sine');

// Create sum of two functions
    function sum($a, $b){
        return $a + $b;
    }
    echo sum(4,5);

// Create function to sum all numbers using ...$nums
    function sum2(...$nums)
    {
            echo '<pre>';
            var_dump($nums);
            echo '</pre>';

            $count = 0;
            foreach ($nums as $num){
                $count += $num;
            }
            return $count;
    }
    echo sum2(1,2,3,4,5,6,7,8) . '<br>';

// Arrow functions

function sum3(...$nums)
{
   return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo sum3(1,2,3,4,5,6,7,8);

