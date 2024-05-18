<?php
//use of implode and explode and sort
$name=['a','b','c','d'];
print implode("_",$name)."<br>";

$names ='ram,b,c,d';
 $namearr = explode(',',$names);
 echo $namearr[1]."<br>";

 //sort , it sorts in ascending order
 sort($namearr);
 foreach($namearr as $v){
    echo $v."<br>";
 }
 //rsort sorts in descending order
 rsort($namearr);
 foreach($namearr as $v){
    echo $v."<br>";
 }
 echo "<br>";

 //asort
 $arr=array("one"=>"a","two"=>"e","three"=>"c");
 asort($arr); //sorts assosiative array in ascending order
//  according to its value
foreach($arr as $v){
    echo $v."<br>";
}
echo "<br>";
//ksort
ksort($arr);
foreach($arr as $v){
    echo $v;
}
echo "<br>";
//arsort
arsort($arr);
foreach($arr as $v){
    echo $v;
}
echo "<br>";

//krsort
arsort($arr);
foreach($arr as $v){
    echo $v;
}
echo "<br>";

//wap in php to define two array having numeric values and find the sum of
//both elemetns of  array

?>