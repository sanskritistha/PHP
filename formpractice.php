<html>
    <head>
        <title>
            Form practice
        </title>
        
    </head>
    <body>
    <?php
        $errname='';
        $errparent='';
        $errmail='';
        $errgender='';
        $errDOB='';
        $errfac='';
        $errshift='';
        $errweb='';
        $errphone=$errPhone1='';
        $errPadd='';
        $errTadd='';
        $erracc='';
        
        if(isset($_POST['send'])){
            $err=1;
            $name=$_POST['name'];
            $parent=$_POST['parentName'];
            $mail=$_POST['mail'];
            $DOB=$_POST['dob'];
            $web=$_POST['web'];
            $phone=$_POST['phoneNumber'];
            $Tadd=$_POST['temporary'];
            $Padd=$_POST['permanent'];

        
        if(empty($name)){
          $errname="fill your name";
         // $err=0;
        }
        if(empty($parent)){
            $errparent="fill your parent name";
           // $err=0;
        }
        if(empty($mail)){
            $errmail="Email is empty";
            //$err=0;
        }
        if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
            $erremail="Email must be in proper format";
           // $err = 0;
        }
        if(empty($phone)){
            $errPhone="Fill your phone";
            $err = 0;
        }
        if(!is_numeric($phone)){
            $errPhone1="Enter NUmeric value";
            $err = 0;
        }
        if(empty($DOB)){
            $errDOB="Enter your Date of birth";
            $err=0;
        }
        if(empty($web)){
            $errweb="please enter your web";
            $err=0;
        }
        if(empty($Tadd)){
            $errTadd="please enter your temporary address";
            $err=0;
        }
        if(empty($Padd)){
            $errPadd="please enter your permanent address";
            $err=0;
        }
        if(empty($_POST['gender'])){
            $errgender="specify your gender";
            $err=0;
        }
        if(empty($_POST['faculty'])){
            $errfac="select one faculty";
            $err = 0;
        } 
        if(empty($_POST['shift'])){
            $errshift="select your shift";
            $err = 0;
        } 
        if(empty($_POST['check'])){
            $erracc="you haven't accepted terms and condition";
            $err = 0;
        } 
          if($err=1){
            echo "<table border='1'>";
            echo "<tr>";
            echo "<Th>Name</th>";
            echo "<th>parent Name</th>";
            echo "<th>Email</th>";
            // echo "<th>Gender</th>";
            echo "<th>DOB</th>";
            // echo "<th>Faculty</th>";
            // echo "<th>Shift</th>";
            echo "<th>website</th>";
            echo "<th>phone Number</th>";
            echo "<th>permanent Address</th>";
            echo "<th>Temporary Address</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$parent</td>";
            echo "<td>$mail</td>";
            echo "<td>$DOB</td>";
            echo "<td>$web</td>";
            echo "<td>$phone</td>";
            echo "<td>$Tadd</td>";
            echo "<td>$Padd</td>";
            // echo "<td>$parent</td>";
            // echo "<td>$parent</td>";
            // echo "<td>$parent</td>";
          } 
    }
    
        ?>
        <fieldset>
            <legend> User information</legend>
    <table border="1">
        <tr>
            <form method="post">
        <tr>
            <td>Full name</td>
            <td>
                <input type="text" name="name">
                <span class="error"><?php echo $errname;?></span>
            </td>
        </tr>

        <tr>
    <td> parents name</td>
    <td>
        <input type="text" name="parentName">
        <span class="error"><?php echo $errparent;?></span>
    </td>
        </tr>
        <tr>
            <td>
               Email
            </td>

            <td>
                <input type="email" name="mail">
                <span class="error"><?php echo $errmail;?></span>
            </td>
        </tr>

        <tr>
            <td>gender</td>
            <td>
                <input type="radio" name="gender" value="male">male<br>
                <input type="radio" name="gender" value="female">female<br>
                <input type="radio" name="gender" value="other">others<br>
                <span class="error"><?php echo $errgender;?></span>
            </td>
        </tr>

        <tr>
            <td>Date of Birth</td>
            <td>
                <input type="date" name="dob" value="a">
                <span class="error"><?php echo $errDOB;?></span>
            </td>
        </tr>

        <td>Faculty</td>
        <td>
        <input type="checkbox" name="faculty" value="bim" > BIM<br>
        <input type="checkbox" name="faculty" value="bba" >BBA<br>
       <input type="checkbox" name="faculty" value="bsw">BSW<br>
       <input type="checkbox" name="faculty" value="csit">CSIT <br>
       <span class="error"><?php echo $errfac;?></span></td>

       <tr>
          <td>Shift</td> 
          <td>
          <input type="radio" name="Shift" value="morning">Morining<br>
          <input type="radio" name="Shift" value="noon">NOON<br>
          <span class="error"><?php echo $errshift;?></span>
          </td>
       </tr>
       <tr>
        <td>Website</td>
        <td>
            <input type="text" name="web">
            <span class="error"><?php echo $errweb;?></span>
        </td>
       </tr>
       <tr>
        <td> phone Number:</td>
        <td> <input type="number" name="phoneNumber">
        <span class="error"><?php echo $errphone;?></span>
        </td>
       </tr>
       <tr>
        <td> permanent Address</td>
        <td> <input type="text" name="permanent">
        <span class="error"><?php echo $errPadd;?></span>
</td>
        
       </tr>
       <tr>
        <td> Temporary address</td>
        <td> <input type="text" name="temporary">
        <span class="error"><?php echo $errTadd;?></span>
         </td>
       </tr>
       <tr>
        <td> Feedback</td>
        <td> <input type="text area"></td>
       </tr>
       <tr>
        <td colspan="2"> 
            <input type="checkbox" name="check">
        I accept all the terms and condition. <br>
        <span class="error"><?php echo $erracc;?></span>
        </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="send" value="send">
                <input type="reset" name="reset" value="reset">
            </td>
        </tr>
</tr>
    </table>
</form>
<fieldset>
</html>
