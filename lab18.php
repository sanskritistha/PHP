<?php
// Function declaration with conditional return
function is_even($num) {
    if ($num % 2 == 0) {
        return true; // returning true if the number is even
    } else {
        return false; // returning false if the number is odd
    }
}

// Function call and utilizing return value
$num = 7;
if (is_even($num)) {
    echo "$num is even.";
} else {
    echo "$num is odd.";
}
?>
