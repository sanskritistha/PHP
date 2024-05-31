<?php
$num =9804453741;
if(preg_match("/^[0-9]{10}$/",$num)){
    echo "true";
}else{
    echo "false";
}
//your input must start with alphabet and ends 
//with number
$userinput="abc123";
if(preg_match("/^[A-Za-z][A-Za-z0-9]*[0-9]$/",$userinput)){
    echo "true";
}else{
    echo "false";
}

?>