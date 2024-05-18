<?php
session_start()
?>
<html>
    <head><title>user Login</title>
</head>
<body>
    <?php
    if($_SESSION['firstname']){
        ?>
        welcome <?php echo $_SESSION["firstname"];?>. click here to
        <a href ="timeout.php" title ="logout">Logout.
            <?php
    }else echo"<h1> please login first .</h1>";
    ?>
    </body>
    </html>
