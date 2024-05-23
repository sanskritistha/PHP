<?php
session_start();
//store the data in session varaible
$_SESSION['U_id']=101;
$_SESSION['username']='sanskriti';
$_SESSION['email']='sanskriti@gmail.com';
echo "Data stored in session variables <br>";
session_write_close();
?>
<?php
//retriving data from session varaibles
session_start();
//retrive and display data from session varaibles
if(isset($_SESSION['U_id'])){
    $userID=$_SESSION['U_id'];
    echo "user id:$userID<br>";
}
if(isset($_SESSION['username'])){
    $uname=$_SESSION['username'];
    echo "username:$uname<br>";
}
if(isset($_SESSION['email'])){
    $mail=$_SESSION['email'];
    echo "Email:$mail<br>";
}
//find the session
session_write_close();
?>
<!-- lab 37 ko theory xa -->

