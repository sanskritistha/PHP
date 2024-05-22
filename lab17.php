<?php 
function greet(){
    echo "Hello World."."<br>";
}
greet();
function greet_user($name){
    echo "Hello, $name"."<br>";
}
greet_user("World");
function add($num1,$num2){
    return $num1+$num2;
}
function concat($s1,$s2){
return $s1.$s2;
}
echo "the sum is ".add(5,3)."<br>";
echo "conactenated string is ".concat("hello","world")
?>