<?php
//--chaging the format of retrieved rows
$servername="localhost";
$useraname="root";
$password="";
$dbname="myDB";
$conn=mysqli_connect($servername,$useraname,$password,$dbname);
if(!$conn){
       die("connection failed: ".mysqli_connect_errno());
     }
$sql = "SELECT id,firstname,lastname,email FROM myguests";
$result = mysqli_query($conn, $sql);
//check if the query was sucessful
if (mysqli_num_rows($result) > 0) {
    
     echo "<table border='1'>
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>email</th>
        </tr>";
 while ($row = mysqli_fetch_assoc($result)) {
   echo "<tr>
    <td>".$row['id']." </td>
    <td>".$row['firstname']."</td>
    <td>".$row['lastname']."</td>
      <td>".$row['email'] ."</td>
  </tr>";
 }
 echo "</table>";
}else{
    echo "NO record found";
}
mysqli_close($conn);
?>

