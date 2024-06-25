<?php
//start the session
session_start();
//$_SESSION['batch']='bim';
//$_SESSION['batch']='bca';
echo $_SESSION['batch'];
//session_unset();
//echo $_SESSION['batch'];
session_destroy();
echo $_SESSION['batch'];
?>c