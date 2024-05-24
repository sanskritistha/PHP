<?php
$arr=array(
            array(10,10,10),
            array(10,10,10),
            array(10,10,10)
        );
$s=0;
$s1=0;
for($i=0;$i<3;$i++)
{
	for($j=0;$j<3;$j++)
	{
	echo $arr[$i][$j]." ";
	$s=$s+$arr[$i][$j];
	}
	echo "<br>";
}
echo "sum of array:".$s;
?>