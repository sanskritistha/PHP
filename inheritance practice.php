<?php
class Human{
    public $name,$Gender;
    public function name(){
        echo $this->name."<br>";
    }
    public function gender(){
         echo $this->Gender."<br>";
    }
}
class employee extends Human{
    public $e_id;
    public function employee_id(){
       echo $this->e_id."<br>";
    }
}
class customer extends Human{
    public $add;
    public function address(){
        echo $this->add;
    }
}
$hum=new Human();
$hum->name="chandu";
$hum->Gender="male";
$hum->name();
$hum->gender();
$emp=new employee();
$emp->name="rasgulla";
$emp->e_id=4402;
$emp->employee_id();
$emp->name();
$cus=new customer();
$cus->name="methilal";
$cus->add="ktm";
$cus->name();
$cus->address();
?>