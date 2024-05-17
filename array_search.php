<?php
//use of array_search and unset
$fac=['first'=>'BIM','second'=>'BBA','third'=>'BBS'];
print array_search("BBS",$fac);
unset($fac["third"]);
echo ($fac["third"]);
echo sizeof($fac)
?>