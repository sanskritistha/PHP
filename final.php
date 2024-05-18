<?php
class vehicle{
    public $name;
    final function drive(){//use of final keywoard doesnt allow to override
        echo "vehicle class drive method..<br>";
    }
}
class car extends vehicle{
public function drive(){
        echo $this->name."car class drive method..<br>";
    }
}
//child class
class motorcycle extends vehicle{
    public function drive(){
        echo $this->name."motorcycle class drive method..<br>";
    }
}
$car=new car();
$car->name="alto 800";
$car->drive();
$bike=new motorcycle();
$bike->name="triumph tiger ";
//calling child method
$bike->drive();
?>