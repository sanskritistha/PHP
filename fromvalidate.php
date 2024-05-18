<html>
    <head>
        <title></title>
        <style type="text/css">
            .input,label{
                display:block;
            }
            .error{
                color:red;
            }
</style>
</head>
<body>
<?php
$errName=$errPhone1='';
$errPhone = '';
$errAddress='';
$erremail='';
$errfac='';
$errgender='';

if(isset($_POST['submit'])){
    $err = 1;
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $email=$_POST['mail'];
    if(empty($name)){
        $errName= "Fill your name";
        $err = 0;
    }
    if(empty($phone)){
        $errPhone="Fill your phone";
        $err = 0;
    }
    if(!is_numeric($phone)){
        $errPhone1="Enter NUmeric value";
        $err = 0;
    }
    if(empty($address)){
        $errAddress= "Fill your address";
        $err = 0;
    }
    if(empty($email)){
        $erremail="Email is Empty"."<br>";
        $err = 0;
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $erremail="Email must be in proper format";
        $err = 0;
    }
    if(empty($_POST['Gender'])){
        $errgender="select one gender";
        $err = 0;
    }
    if(empty($_POST['faculty'])){
        $errfac="select one faculty";
        $err = 0;
    }
    if($_POST['country']==-1){
        $errcon="select your country";
        $err = 0;
    }
    if($err == 1){
        $faculty=$_POST['faculty'];
        $gender=$_POST['Gender'];
        foreach($faculty as $value){
            echo $value;
        }
        echo $name, $phone, $email, $gender;
    }
}
?>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="name">
        <span class="error"><?php echo $errName;?></span>

        <label>Phone:</label>
        <input type="text" name="phone"><br>
        <span class="error"><?php echo $errPhone;?></span>
        <span class="error"><?php echo $errPhone1;?></span>
        <label>Address:</label>
        <input type="text" name="address">
        <span class="error"><?php echo $errAddress;?></span>
        
        <label> Email:</label>
        <input type="email" name="mail"><br>
        <span class="error"><?php echo $erremail;?></span>

        <label> Gender:</label>
        <input type="radio" name= "Gender" value="male">Male:
        <input type="radio" name= "Gender" value="female">Female:
        <span class="error"><?php echo $errgender;?></span>

        <label>Country:</label>
        <select name="country">
        <option value="-1">please select country</option>
           <option value="nepal">Nepal</option>
           <option value="india">india</option>
           <option value="china">china</option>
           <span class="error"><?php echo $errcount;?></span>
        <br>
        <label>faculty</label>
        <input type="checkbox" name="faculty[]" value="bim">BIM
        <input type="checkbox" name="faculty[]" value="bbs">BBS
        <input type="checkbox" name="faculty[]" value="bba">BBA
        <input type="checkbox" name="faculty[]" value="csit">Bsc.CSIT
        <span class="error"><?php echo $errfac;?></span>
         <br>
        <input type="submit" name="submit" value="submit">
     
        
</form>
</body>
</html>