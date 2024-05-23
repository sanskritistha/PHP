<!-- reading and writing part of files -->
<?php
$filename='example.txt';
$file=fopen($filename,'r');
//move the file pointer in a specific positiion
fseek($file,100);
//read a specific number of bytes from the current position
$section=fread($file,50);//read 50 bytes
fclose($file);
echo $section;
?>
<!-- appending fata to existing files -->
<?php
$filename='example.txt';
//data to append
$dataToAppend="New data to append\n";
//append data to the file
file_put_contents($filename,$dataToAppend,FILE_APPEND);
?>