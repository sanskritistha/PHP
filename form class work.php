<html>
 <head></head>
    <body>
        <form method='get' action=''>
        Num1: <input type="number" name="n1">
        Num2: <input type="number" name="n2">
        <input type="submit" name="submit" value="submit">
</form>
<?php
  if(isset($_GET['submit'])){
     $num1=$_GET['n1'];
     $num2=$_GET['n2'];
     echo $num1+$num2."<br>";
     echo $num1-$num2."<br>";
     echo $num1*$num2."<br>";
     echo $num1/$num2."<br>";
// add radio buttons
  }
?>
</body>


    </html>
