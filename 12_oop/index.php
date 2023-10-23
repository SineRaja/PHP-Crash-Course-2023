<?php

// What is class and instance

    require_once "Person.php";
    require_once  "Student.php";

    $student = new Student('Raja','Sine', '22020');

    echo '<pre>';
    var_dump($student);
    echo '</pre>';

   // $p = new Person('Raja', 'Sine');
   //  $p->setAge(26);
    // $p->name = 'Raja';
    // $p->surname = 'Sine';

   // echo '<br>';
   // echo $p->getAge();
   // echo '<br>';
   // $p2 = new Person('Prachi', 'Arora');

   // echo '<pre>';
   // var_dump($p);
   // echo '</pre>';

   // echo Person::$counter;

   // echo $p->surname.'<br>';

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter