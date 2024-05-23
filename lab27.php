<?php
//creating a table
$servername="localhost";
$username="root";
$password="";
$dbname="myDB";
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
    die("connection failed: ".mysqli_connect_errno());
}
//sql to create table
$sql ="create table users (
    user_id INT Auto_increment primary key,
    username varchar(50) not null,
    email varchar(50),
   
   
)";
if(mysqli_query($conn,$sql)){
        echo "Table users created successfully";
    }else{
      echo "error creating table ";
    }
    ?>