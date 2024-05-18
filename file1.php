<?php
$filename="file1.txt";
$file=fopen($filename,"w");
if($file==false){
    echo "error in openeing new file";
    exit();
}
fwrite($file,"this is a sample test hello");
fclose($file);
$file =fopen($filename,"r");
if($file==false){
    echo "Error in opening file";
    exit();
}
$filesize=filesize($filename);
$filetext=fread($file,$filesize);
fclose($file);
echo "$filetext"."<br>";

?>