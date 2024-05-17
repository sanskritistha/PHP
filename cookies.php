<?php
setcookie("name","sanskriti shrestha",time()+3600,"/","",0);
setcookie("age","36",time()-3600,"/","",0);
echo "set cookies"."<br>";
//global cookie
echo $_COOKIE['name']."<br>";
echo $_COOKIE['age']."<br>";
//cookie modify garnu paryo vane variable name same rakhne ani value change garne
//cookie destroy garna time minus ma rakhne
?>