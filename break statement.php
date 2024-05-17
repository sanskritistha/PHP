<?php
// $arr=array('one','two','three','four','stop','five');
// foreach($arr as $val){
//     if($val=='stop'){
//         break;
//     }
//     echo "$val<br>";
// }
$i=0;
while(++$i){
    switch($i){
        case 5:
        echo "At 5<BR>";
         break 1;// exit only the switch
         case 10:
            echo "At 10<br>";
            break 2; /*exit the switch and while*/
            default:
            break;
    }
}
?>