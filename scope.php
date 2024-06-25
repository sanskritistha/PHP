<?php
$name="sanskriti";
function show(){
    $a= 10;
    echo $a."<BR>";
    global $name;//global varibale
    echo $name;
}
echo $a;//local variable
show();
$x=10;
$y=20;
function scope(){
    $z="<BR>".$GLOBALS['x']+$GLOBALS['y'];
    echo $z;
}
scope();
?>