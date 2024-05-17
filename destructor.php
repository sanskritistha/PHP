<?php
class demo{
    public function __construct(){
        echo "constructor....";
    }
    public function __destruct(){
        echo "destroy....";
    }
}
$obj= new demo();
?>