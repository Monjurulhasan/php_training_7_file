<?php
$filename =  "F:\\Web\\HasinHayder\\php_practice\\7-file\\lesson_7.03\\file.txt";
// $fp = fopen($filename, "r+");
// $line =  fgets($fp);
// echo $line;
// fwrite($fp, "Uranus\n");
// $line = fgets($fp);
// echo $line;
// fseek($fp, 0); //rewind($fp);
// fwrite($fp, "Venus");
// fclose($fp);

// $fp = fopen($filename, "w+");
// fwrite($fp, "Uranus\n");
// rewind($fp);
// $line = fgets($fp);
// echo $line;

$fp = fopen($filename, "a+");
fwrite($fp, "Uranus\n");
rewind($fp);
$line = fgets($fp);
fwrite($fp, "Venus\n");
$line = fgets($fp);
echo $line;