<?php
$filename =  "F:\\Web\\HasinHayder\\php_practice\\7-file\\lesson_7.06\\file.txt";
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


// $fp = fopen($filename, "w");
// foreach($students as $student) {
//     $data = sprintf("%s, %s, %s, %s, %s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
//     fwrite($fp, $data);
// };
// fclose($fp);


// $fp = fopen($filename, "w");
// foreach($students as $student) {
//     fputcsv($fp, $student);
// };
// fclose($fp);


// $fp = fopen($filename, "r");
// while($data = fgets($fp)){
//     $student = explode(",", $data);
//     printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
// };
// fclose($fp);


// $fp = fopen($filename, "r");
// while($student = fgetcsv($fp)){
//     printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
// };
// fclose($fp);


// $student = array(
//     'fname' => 'Kamal',
//     'lname' => 'Ahmed',
//     'age' => 13,
//     'class' => 7,
//     'roll' => 17
// );

// $fp = fopen($filename, "a");
// fputcsv($fp, $student);
// fclose($fp);

$data = file($filename);
unset($data[1]);
print_r($data);
$fp = fopen($filename, "w");
foreach ($data as $line){
    fwrite($fp, $line);
}
fclose($fp);