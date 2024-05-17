<?php
$a =10;
echo empty($a)."<BR>";
print isset($a);

$b =7.25;
echo is_int($b)."<BR>";
print is_null($b);

$c= 8.12;
echo is_float($c)."<BR>";
unset($c);
print $c;
$p="khichdi";
echo is_string($p);

?>
