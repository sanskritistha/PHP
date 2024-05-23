<?php
//--retrving data from database
$servername="localhost";
$useraname="root";
$password="";
$dbname="myDB";
$conn=mysqli_connect($servername,$useraname,$password,$dbname);
if(!$conn){
       die("connection failed: ".mysqli_connect_errno());
     }
//sql statement to retrive data from the myguest table
$sql = "SELECT * FROM myguests";
//execute sql statement
$result = mysqli_query($conn, $sql);
//check if the query was sucessful
if (mysqli_num_rows($result) > 0) {
    //fetch the data and output
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id:". $row["id"]."-Name:".$row["firstname"]." ".$row['lastname'].""
        .$row["email"]."<br>";
    }
}
else{
    echo "no record";
}
mysqli_close($conn);
?>


