<?php
$filename =  "F:\\Web\\HasinHayder\\php_practice\\7-file\\lesson_7.07\\file.txt";
$students = array(
    array(
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age' => 12,
        'class' => 7,
        'roll' => 11
    ),
    array(
        'fname' => 'Rahim',
        'lname' => 'Ahmed',
        'age' => 11,
        'class' => 7,
        'roll' => 13
    ),
    array(
        'fname' => 'Nikhil',
        'lname' => 'Chandra',
        'age' => 12,
        'class' => 7,
        'roll' => 14
    )
);

$student = array(
    'fname' => 'Kamal',
    'lname' => 'Ahmed',
    'age' => 13,
    'class' => 7,
    'roll' => 17
);

// $data = serialize($students);
// file_put_contents($filename, $data, LOCK_EX);

$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);

// array_push($allStudents, $student);

// unset($allStudents[1]);
// $data = serialize($allStudents);
// file_put_contents($filename, $data, LOCK_EX);