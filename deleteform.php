<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','myDB');
$sql="delete from myguests where id=$id";
mysqli_query($conn,$sql);
header('location:formtableDB.php');
?>
