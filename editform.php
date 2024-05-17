<html>
    <head></head>
    <body>
        <?php
        $id=$_GET['id'];
       // echo $id;
       $conn =mysqli_connect('localhost','root','','myDB');
       if(isset($_POST['submit'])){
          $firstname=$_POST['firstname'];
          $lastname=$_POST['lastname'];
          $email=$POST['email'];
          $sql="update myguests set firstname ='$firstname',lastname='$lastname',email='$email' where id='$id'";
          echo $sql;
          mysqli_query($conn,$sql);
          if(mysqli_affected_rows($conn)==1){
            header('location:formtableDB.php');
          }else{
            echo "data update failed".mysqli_error($conn);
          }

       }
       $sql1="select * from myguests where id= $id";
       $res =mysqli_query($conn,$sql1);
       $data =mysqli_fetch_assoc($res);
       //print_r($data);
        ?>
        <form action="" method="POST">
    first Name
    <input type ="text" name="firstname" value="<?php echo $data['firstname']?>">
    <!-- <span class="error"><?php echo $errfname;?></span> -->
    last Name
    <!-- <span class="error"><?php echo $errlname;?></span> -->
    <input type ="text" name="lastname" value="<?php echo $data['lastname']?>">
    Email
    <!-- <span class="error"><?php echo $errmail;?></span> -->
    <input type ="text" name="email" value="<?php echo $data['email']?>">
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>