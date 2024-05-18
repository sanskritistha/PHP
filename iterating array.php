<?php

$fac=['BIM','BBA','BBS'];
echo "using for<br>";
for($i=0;$i<sizeof($fac);$i++){
   
    echo $fac[$i]."<br>";
}
echo "using foreach<br>";
foreach($fac as $v){
    echo $v."<br>";
}

?>