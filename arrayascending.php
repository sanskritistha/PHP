<?php
//Wap  to define an array and display its elemnts in ascending
$arr=array(1,4,5,7,2,8);
sort($arr);
echo "in ascending<br>";
foreach($arr as $v){
echo $v;
}
echo "<br>";
//wap to sort in descending
rsort($arr);
echo "in descending<br>";
foreach($arr as $v){
echo $v;
}
?>