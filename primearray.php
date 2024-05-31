<?php
//wap in php to define a multidimensional associative array and display all the prime numbers 
//present in that array
$m= array(
    array(2, 4, 6, 8, 10),
    array(3, 15, 7, 11, 13)
);

foreach ($m as $r) {
    foreach ($r as $value) {
        if (Prime($value)) {
            echo $value . " ";
        }
    }
}
function Prime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

?>