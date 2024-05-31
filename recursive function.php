<?php
function recur($n){
    if($n<=10){
        echo "$n <br>";
        recur($n+1);
    }
}
recur(1);
phpinfo();  //to check version of php

?>