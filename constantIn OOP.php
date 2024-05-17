<?php
class myclass{
    const constant='constant value';
    public function showConstant(){
        echo self::constant."<br>";
    }
}
echo myclass::constant."<br>";
$class=new myclass();
$class->showConstant();
?>