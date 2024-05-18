<?php
$file=fopen("file1.txt","r");
// echo fgets($file)."<br>";// it only reads single line
// fclose($file);
// while(!feof($file)){
//     echo fgets($file)."<br>";
// }
// fclose($file);
echo fgetc($file);
fclose($file);
?>