<?php
$servername="localhost";
$username="root";
$password="";
$dbname="expense_record_system";
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
    die("connection failed: ".mysqli_connect_errno());
}
else{
    echo "connected";
}
?>