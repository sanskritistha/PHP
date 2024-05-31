<?php

//example-1


// class Human{
//     //procted variable
//     protected $genders=array("male","female","other");
//     //proctected functin for humans features
//     protected function getFeatures($gender){
//         if($gender=="male"){
//             echo "Men";
//         }else if($gender=="female"){
//             echo "women";
//         }else{
//             echo "asdsd";
//         }
//     }
// }
// class male extends Human{
//     protected $gender="male";
//      //calling the protected getFeatures to male features
//     public function getMaleFeatures(){
//         $this-> getFeatures($this->gender);
//     }
// }
// //object of  Human class
// $human =new Human();
// //object of male class
// $male =new Male();
// //accessing protected variables and methods
// // echo $human->genders;//invalid
// // // $human-> getFeatures("male");//invalid;
// // echo $male->gender;//Invalid
// $male->getMaleFeatures();

//example-2
class vechicle{
    protected $name;
    //public function start
    public function start(){
        echo $this->name."-Engine start..<br>";
    }
    //public function stop
    public function stop(){
        echo $this->name."Engine stop..<br>";

    }
}
class car extends vechicle{
    public function drive(){
        echo "i am".$this->name."<br>";
        echo "lets go on a drive..";
    }
}
$car=new car();
//$car->name="rollys roayce";
//calling parent class method
$car->start();
$car->stop();
//calling child class method
$car->drive();
?>