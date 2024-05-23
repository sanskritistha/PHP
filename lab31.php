<?php
//error
//implementing secure database queries with parameter binding

$conn=mysqli_connect("localhost","root","","myDB");
if(!$conn){
       die("connection failed: ".mysqli_connect_errno());
     }
//sample data
$username="sanskriti";
$email="sans@gmail.com";
//sql statement
$sql="INSERT INTO users(username,email)
values($username,$email)";
//prepare the statement
$stmt=$conn->prepare($sql);
//bind parameters
$stmt->bind_param("sss",$username,$email);
//execute the statement
if($stmt->execute()){
    echo "Data inserted sucessfully";
}else{
    echo "Error inserting data:".$stmt->error;
}
$stmt->close();
$conn->close();
?>
