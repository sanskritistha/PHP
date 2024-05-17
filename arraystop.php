<?php
//wap in php to define a function that accepts an array as a parameter and display all
//the values till the value stop is found
$a=array("a","b","c","d","stop","e");
 foreach($a as $b){
    if($b=="stop"){
        break;
    }
    echo "$b \n";
 }
?>