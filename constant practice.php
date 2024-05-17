<?php
class myclass{
    const constant='500';
    public function showConstant(){
        echo self::constant."<br>";
    }
}
echo myclass::constant."<br>";
$class=new myclass();
$class->showConstant();
?>