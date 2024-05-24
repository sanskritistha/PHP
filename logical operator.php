<?php
$a = true;
$b = false;

if ($a && $b) {
    echo "Both conditions are true"."<br>";
} else {
    echo "At least one condition is false"."<br>";
}
if ($a || $b) {
    echo "At least one condition is true"."<br>";
} else {
    echo "Both conditions are false"."<br>";
}
if (!$a) {
    echo "The condition is false"."<br>";
} else {
    echo "The condition is true"."<br>";
}

?>
