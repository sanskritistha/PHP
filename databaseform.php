<html>
    <head>
</head>
<body>
    <?php
   
    $errfname='';
    $errlname='';
    $errmail='';

    if(isset($_POST['submit'])){
        $err=1;
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $mail=$_POST['mail'];

        if(empty($fname)){
            $errfname="fill your first name";
            //$err=0;
        }
        if(empty($lname)){
            $errlname="fill your last name";
            $err=0;
        }
        if(empty($mail)){
            $errmail="Email is empty";
            $err=0;
        }
        if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
            $erremail="Email must be in proper format";
            $err = 0;
    }

$conn=mysqli_connect('localhost','root','','myDB');
if(!$conn){
    die("connection failed:".
    mysqli_connect_errno());
}
if($err==1){
$sql="insert into myguests(firstname,lastname, email)
values ('$fname','$lname','$mail')";
if(mysqli_query($conn,$sql)){
    echo "new record created sucessfully";
}else{
echo "Error:" .$sql . "<br>" .mysqli_err($conn);
}
}
    }
    ?>
<form action="" method="post">
    first Name:<input type="text" name="fname"><br>
    <span class="error"><?php echo $errfname;?></span>
    last Name:<input type="text" name="lname"><br>
    <span class="error"><?php echo $errlname;?></span>
    Email:<input type="text" name="mail"><br>
    <span class="error"><?php echo $errmail;?></span>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>