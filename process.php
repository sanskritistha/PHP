<!-- create the php process file('process.php') -->
<?php
$conn=mysqli_connect("localhost","root","","myDB");
if(!$conn){
       die("connection failed: ".mysqli_connect_errno());
     }
     // retrive and display data
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        $userID=$_POST['userID'];
        $sql="select * from users where id=$userID";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            die("Query Failed");
        }else{
            $row=mysqli_fetch_assoc($result);
            $userName=$row['name'];
            $userEmail=$row['email'];
            echo "$userName $userID $userEmail";
        }
    }
    $conn->close();
    ?>
