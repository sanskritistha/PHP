<html>  
    <head>
</head>
<body>
    <form method="get" action=""> 
        username:<input type="text" name="username">
        password:<input type="password" name="pass">
        <input type="submit" name="submit" value="submit">
</form>

<?php
     if(isset($_GET['submit'])){
       echo  $_GET['username'];
       echo $_GET['pass'];
}
?>
</body>

</html>   
 