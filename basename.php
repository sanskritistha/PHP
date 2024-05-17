<?php
$path="/form/basename.php";
echo basename($path)."<br>";
echo basename($path,".php");
?>
<?php
print_r(pathinfo("/testweb/test.txt"));
?>