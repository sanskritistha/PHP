<?php
$arr =array("red","blue");
array_unshift($arr,"green");
echo "after addding green<br>";
print_r($arr);
echo "<br>";
$arr[1]="yellow";
echo "Modifying <br>";
print_r($arr);
echo "<br>";
array_pop($arr);
echo "after deleting<br>";
print_r($arr);
?>
