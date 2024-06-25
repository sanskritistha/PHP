<?php
//wap in php to define a student class that has properties name,address and faculty and a method called welcome
// with msg welcome to new semester. define an object and set the values for properties of the class and display 
//welcome msg
$object= new student;
$object->name="ram";
$object->address="ktm";
$object->faculty="bim";
print_r($object);echo "<br>";
$object->welcome();
class Student{
    public $name,$address,$faculty;
    function welcome(){
        echo "welcome to new semester";
    }
}
?>
