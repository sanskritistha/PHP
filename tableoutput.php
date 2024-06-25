;<html>
<?php
        $errUserName=$errpassword='';
        if(isset($_POST['submit'])){
        $username=$_POST['name'];
        $password=$_POST['password'];
        $err=1;
        if(empty($name)){
            $errUsername="fill this field";
            $err=0;
        }
        if(empty($password)){
            $errpassword="fill this field";
            $err=0;
        }
        if($err=1){
            echo"<table border='1'>";
            echo"<tr>";
            echo"<th>username</th>";
            echo"<th>password</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>$username</td>";
            echo "<td>$password</td>";
            echo "</tr>";
            echo "</table>";

        }
    }
        ?>
        <form method="post">
<label>Username:</label>
        <input type="text" name="name">
        <span class="error"><?php echo $errUserName;?></span>
        Password:
        <input type="password" name="password">
        <span class="error"><?php echo $errpassword;?></span>
        <input type="submit" name="submit" value="submit">

</form>