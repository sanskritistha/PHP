<?php
class vehicle{
    public $name;
    public function drive(){
        echo "vehicle class drive method...<br/>";
    }
}
class car extends vehicle{

}
class motercycle extends vehicle{
    public function drive(){
        echo "vehicle class drive method...<br/>";   
    }
}
$car=new car();
$car->name="mercedez benz";
$car->drive();
$bike= new motercycle();
$bike->name="Honda";
$bike->drive();


?>