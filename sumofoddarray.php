<?php
//wap in php to define a multidimensionall array with numeric values and display the sum of only odd number present in that array
$myArray = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9),
);

function sumOfOddNumbers($array) {
    $sum = 0;
    foreach ($array as $row) {
        foreach ($row as $value) {
            if ($value%2!= 0) {
                $sum += $value;
            }
        }
    }

    return $sum;
}
$oddSum = sumOfOddNumbers($myArray);
echo "The sum of odd numbers in the array is: $oddSum";

?>