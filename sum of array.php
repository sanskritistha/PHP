<?php
$array1 = array(1, 2, 3, 4, 5);
$array2 = array(6, 7, 8, 9, 10);
  if(sizeof($array1)==($array2)){
    $a=0;
    for ($i = 0;$i<sizeof($array1);$i++) {
        $a = $array1[$i] + $array2[$i];
  }
  echo $a;
}
?>
