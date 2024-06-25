<?php
//static method 
class math{
    public static function average($numbers){
        return array_sum($numbers) / count($numbers);
    }
}
$average =math::average([1,2,3,4,5]);
echo $average."<br>";

//static properties
class User{
    public static $count=0;
    public function __construct()
    {
        self::$count++;
    }
}
$user1=new User();
$user2=new User();
echo user::$count;
?>