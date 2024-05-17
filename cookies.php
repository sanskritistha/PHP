<?php
setcookie("name","sanskriti shrestha",time()+3600,"/","",0);
setcookie("age","36",time()-3600,"/","",0);
echo "set cookies"."<br>";
//global cookies
echo $_COOKIE['name']."<br>";
echo $_COOKIE['age']."<br>";
?>