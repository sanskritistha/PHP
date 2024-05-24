<?php
$arr=array(
    array(1,2,3,4),
    array("one","two","three","four"));
    echo $arr[1][3];
    echo "<table border=1>";
    foreach($arr as $v){
        echo "<tr>"; 

        foreach($v as $AB){
            echo "<td>$AB</td>";   
        }
        echo "</tr>"; 
    }
    echo "</table>";

// // Write a PHP program to create a multidimentional array that holds the cities of districts 
// // in Katmandu valley such as ktm(Newroad, Durbar Marg, Thamel); Latitpur(Patan, Jawlakhel, 
// // Kupondole); Bhaktapur(Durbar Square, Suryabinayak).Then display the contents of array.
// $cou=array(
//     array("newroad","durbarmarg","thamel"),
//      array("patan", "jawlakhel","kupondole"),
//      array("DB","SB")
// );
//     foreach($cou as $v){
//         foreach($v as $a){
//             foreach($a as $b){
//                 echo $b;
//             }
//         }
//     }
?>