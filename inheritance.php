<?php
// //exmaple1
// class Human{
//     public $name;
//     public function walk(){
//         echo $this->name."  is walking..<br/>";
//     }
//     public function see(){
//         echo $this->name."  is seeing...<br>";
//     }
// }
// class male extends Human{

// }
// class female extends human{

// }
// $male=new male();
// $male-> name="cc";
// $female=new female();
// $female-> name="bb";
// $male->walk();
// $female->see();

//example2 
//parent class
class vechicle{
    public $name;
    public function start(){
        echo $this->name."-Engine start...<br>";
    }
    public function stop(){
        echo $this->name."Engine stop..<br>";
    }
}
class car extends vechicle{
    public function drive(){
        echo "I am".$this->name."<br>";
        echo "lets go on a drive";
    }
}
$car=new car();
$car->name="mercedez";
$car->start();
$car->stop();


?>