
<?php
if(isset($_POST['submit'])){
   // $username = $_POST['uname'];
    $password = $_POST['pass'];
    if (empty($_POST['uname'])) {
        echo "Username is required";
}
}
?>
<form method="POST">
    <label> username:</label>
    <input type="text" name="uname">
    <label> Password:</label>
    <input type="password" name="pass">
    <input type="submit" name="submit" value="submit"> 
</form>

