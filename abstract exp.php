<?php
//astract class
abstract class vechicle{
    //protected varaible
    protected $name;
    //public function
    public function start(){
        echo $this->name."-engine start..<br>";
    }
    // public function stop(){
    //     echo $this->name."-Engine stop..<br>";
    // }
    public function setName($name){
         $this->name=$name;
    }
    abstract public function mileage();
}
class Car extends vechicle{
    public function mileage(){
        echo "I am ".$this->name."<br>";
        echo "my mielage range is 15 to 22km/l";
    }
}
$car =new Car();
$car->setName("bmw");
$car->mileage();
