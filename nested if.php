<?php
$grade = 75;
if ($grade >= 90) {
    echo "Excellent!";
} else {
    if ($grade >= 80) {
        echo "Good job!";
    } else {
        if ($grade >= 70) {
            echo "Satisfactory.";
        } else {
            echo "Needs improvement.";
        }
    }
}

?>