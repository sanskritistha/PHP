<?php
//use of array_key_exist
$fac=['first'=>'BIM','second'=>'BBA','third'=>'BBS'];
  if(array_key_exists("third",$fac)){
    echo"key found";
  }else{
    echo "not found";
  }
  ?>