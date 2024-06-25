<?php
session_start();
//set the session timeout duration in seconds
$sessionTimeout =1800; 
//check if the session has already been started and calculate the time since the last activity
if(isset($_SESSION['LAST_ACTIVITY'])){
    $lastActivity=$_SESSION['LAST_ACTIVITY'];
    $currentTime =time();
    $timeSinceLastActivity = $curerntTime - $lastActivity;
    //check if the session has exceeded the timeout duration
    if($timeSinceLastActivity > $sessionTimeout){
        //session expired,destroy the session
        session_unset();
        session_destroy();
        echo "session expired please login again";
    }else{
        //update the last activity time
        $_SESSION['LAST_ACTIVITY'] = $currentTime;
        echo "session active.";
    }
}else{
    //set the last activity time for the session
    $_SESSION['LAST_ACTIVITY']= time();
    echo "session_started";
}
?>