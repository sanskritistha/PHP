<?php
// $arr= array(
//         array "one"=>("a"=>1 ,"b"=>2,"c"=>3,"d"=>4),
//         array "two"=>("e"=>1 ,"f"=>2,"g"=>3,"h"=>4));
//         echo $arr("one","d");


        //create associative array of size 7 and display the content in ascending order of key
        $myAssocArray = array('e'=>'five','c'=>'three','g'=>'seven','a' =>'one','f'=>'six',
            'b' => 'two','d' => 'four');
        ksort($myAssocArray);
        echo "Content in ascending order of keys:\n";
        foreach ($myAssocArray as $key) {
            echo "$key \n";
        }
        
        ?>
        
