<?php
$filename='sample.txt';
if(!preg_match('/^[a-zA-z0-9 ]+\.txt$/',
$filename)){
    //invalid filename format
    echo "invalid filename";
}else{
    //valid fileanme
}
?>
<!-- use pathinfo for extension -->
<?php
$filename='user_input.txt';
$info=pathinfo($filename);
//access components
$basename=$info['basename']."<br>"; 
$filenameWithoutExtension=$info['filename']."<br>";
$extension=$info['extension']."<br>";
//proceed with extracted information
echo "Basename:$basename Filename without extension:$filenameWithoutExtension Extension:$extension";
?>
