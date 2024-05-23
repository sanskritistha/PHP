<?php
$filename='example.txt';
try{
    //check if the file is readable
    if(!is_readable($filename)){
        throw new Exception("File $filename is not readable.");
    }
    //open the file in read mode
    $file=fopen($filename,'r');
    //check if the file is writable
    if(!is_writable($filename)){
        throw new Exception("file $filename is not writable");
    }
    //read or write operations can be performed here
    fclose($file);
}
catch(Exception $e){
    //handel the exception
    echo "Error:".$e->getMesage();


}
?>