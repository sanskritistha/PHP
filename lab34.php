<?php
//cookies valid for 1hour(3600 seconds)
setcookie("name","sanskriti shrestha",time()+3600,"/","",0);

//retrive and display the value of  name cookies
if(isset($_COOKIE['name'])){
 $username= $_COOKIE['name'];
 echo "Welcome back,$username!";

}else{
    echo " cookies not found";
}
?>