
<?php
function local() {
    $x = 10;
    echo $x."<br>"; // Accessible here
}
local();
// echo $localVariable; // This will cause an error since $localVariable is not accessible outside the function
$y = 20;

function gloabal() {
    global $y;
    echo $y."<br>"; // Accessible here
}

gloabal();
echo $y."<br>";


///static varibales
// function increment() {
//     static $counter = 0;
//     $counter++;
//     echo $counter . "<br>";
// }

// increment(); // Output: 1
// increment(); // Output: 2
// increment(); // Output: 3
?>
