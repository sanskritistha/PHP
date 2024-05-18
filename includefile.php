<?php
//include 
// echo "A $col $fruit"; //A genrates error
// include 'include content.php';
// echo "A $col $fruit"; // a laal apple


// //require
// echo "A $col $fruit"; //A genrates error
// require 'include content.php';
// echo "A $col $fruit"; // a laal apple

//require once 
// $display=require_once('include content.php');
// echo $display;
// $display =require_once ('include content.php');
// echo  $display; //returns 1 because file already included.

//include once
$display=include_once('include content.php');
echo $display;
$display =include_once ('include content.php');
echo  $display;
?>