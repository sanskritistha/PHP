<?php
session_start();
unset($_SESSION["firstname"]);
header("location:session_login.php");
?>