<?php
//putting data into database table
$servername="localhost";
$useraname="root";
$password="";
$dbname="myDB";
$conn=mysqli_connect($servername,$useraname,$password,$dbname);
if(!$conn){
       die("connection failed: ".mysqli_connect_errno());
     }
     $sql="insert into users(username,email)
     values ('sanskriti','sanskriti@gmail.com')";
     if(mysqli_query($conn,$sql)){
                echo "new record created successfully";
            }else{
              echo "error  ".$sqli."<br>";
            }
        mysqli_close($conn);

?>