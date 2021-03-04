<?php 
$filename =  "F:\\Web\\HasinHayder\\php_practice\\7-file\\lesson_7.01\\file.txt";
if(is_readable($filename)){
    $fp = fopen($filename, 'r');
while($line = fgets($fp)){
    echo $line;
}
// rewind($fp);
// fseek($fp, 8);
fseek($fp, -1, SEEK_END);
while($line = fgets($fp)){
    echo $line . "-";
}
fclose($fp);

$data = file($filename);
echo $data[2];
print_r($data);
echo "\n";

$data = file_get_contents($filename);
echo $data;
}