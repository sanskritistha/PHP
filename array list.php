<?php
// WAP a php to print the following list in array and display as following
// a.BIM 
// B.BBA 
// c. BBS
$fac=['BIM','BBA','BBS'];
echo '<ol type="a">';
for($i=0;$i<sizeof($fac);$i++){
   
    echo "<li>".$fac[$i]."</li>";
   
}
echo "</ol>";
?>