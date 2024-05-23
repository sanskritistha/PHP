<?php
//mysql aggregrate function
$servername="localhost";
$username="root";
$password="";
$dbname="sample_database";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
       die("connection failed: ".mysqli_connect_error);
     }
$query="SELECT
         SUM(amount) AS total_sum,
         AVG(amount) AS average_value,
         COUNT(customerNumber)AS total_count
          FROM payments";
$result=$conn->query($query);
if($result){
    $row= $result->fetch_assoc();
    $totalsum=$row['total_sum'];
    $averagevalue=$row['average_value'];
    $totalcount=$row['total_count'];
    echo"Total sum:$totalsum<br>";
    echo" Average value:$averagevalue<br>";
    echo "total count:$totalcount<br>";
}else{
    echo"Error executing query:".$conn->error;
}
$conn->close();
?>