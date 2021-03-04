<?php
$filename =  "F:\\Web\\HasinHayder\\php_practice\\7-file\\lesson_7.02\\file.txt";
if(is_writable($filename)){
    $existingData = file_get_contents($filename);
    // $fp = fopen($filename, "w");
    $fp = fopen($filename, "a");
    fwrite($fp, $existingData);
    fwrite($fp, "Mercury\n");
    fwrite($fp, "Venus\n");
    fwrite($fp, "Earth\n");
    fclose($fp);
}