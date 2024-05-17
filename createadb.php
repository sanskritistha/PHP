<!-- <?php
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
// create database
// $sql ="create database myDB";
// //create connection
// $conn=mysqli_connect($servername,$username,$password,$dbname);
// if(mysqli_query($conn,$sql)){
//     echo "database created successfully";
// }else{
//   echo "error creating database: ".mysqli_error($conn);
// } 
//create connection
// $conn=mysqli_connect($servername,$username,$password,$dbname);
// //check connection
// if(!$conn){
//     die("connection failed: ".mysqli_connect_errno());
// }
//sql to create table
// $sql ="create table myGuests (
//     id INT Auto_increment primary key,
//     firstname varchar(30) not null,
//     lastname varchar(30) not null,
//     email varchar(50),
//     reg_date timestamp
// )";
// if(mysqli_query($conn,$sql)){
//         echo "database created successfully";
//     }else{
//       echo "error creating database: ".mysqli_error($conn);
//     }
// mysqli_close($conn);
?>
<?php
$servername="localhost";
$useraname="root";
$password="";
$dbname="myDB";
$conn=mysqli_connect($servername,$useraname,$password,$dbname);
if(!$conn){
       die("connection failed: ".mysqli_connect_errno());
     }
     $sql="insert into myguests(firstname,lastname,email)
     values ('sanskriti','shrestha','sanskriti@gmail.com')";
     if(mysqli_query($conn,$sql)){
                echo "database created successfully";
            }else{
              echo "error creating database: ".mysqli_error($conn);
            }
        mysqli_close($conn);

?>
