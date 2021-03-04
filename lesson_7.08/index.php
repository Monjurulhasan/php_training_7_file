<?php
$filename =  "F:\\Web\\HasinHayder\\php_practice\\7-file\\lesson_7.08\\file.txt";
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
// $encodeData = json_encode($students);
// file_put_contents($filename, $encodeData, LOCK_EX);

$data = file_get_contents($filename);
$allStudents = json_decode($data, true); //true na object hisabe pass hobe
print_r($allStudents);
echo $allStudents[0]['fname'];