<?php
$filename =  "F:\\Web\\HasinHayder\\php_practice\\7-file\\lesson_7.05\\file.txt";
file_put_contents($filename, "Mars\n", FILE_APPEND | LOCK_EX);
file_put_contents($filename, "Jupiter\n", FILE_APPEND | LOCK_EX);