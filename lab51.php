<?php
class Math{
    //static property
    public static $pi=3.14;
    //static method
    public static function square($number){
        return $number*$number;
    }
}
//acessing static property
echo "Value of pi:".math::$pi."<br>";
//accessing static method
$result=math::square(5);
echo "square of 5:",$result;
?>