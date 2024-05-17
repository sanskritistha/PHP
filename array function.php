<?php
// write a php function that accepts list of countries and a search value as permanent and 
// checks whether the search value is in the list or not.

 function searchCountry($a, $key){
    $c = 1;
    foreach($a as $item){
        if($item==$key){
            echo "found";
            $c++;
            break;
        }
    }
    if($c==1){
        echo "not found";
    }
 }  
 $country=['Nepal','UK','Canada'];
 searchCountry($country,'UK');
?>
