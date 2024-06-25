<?php
//length of string
$fullname ="sanskriti shrestha";
echo strlen($fullname)."<br>";// counts space as well

// count string word
echo str_word_count($fullname)."<br>";

//revrse
echo strrev($fullname)."<br>";

//replace
echo str_replace("Bibhav","falno",$fullname)."<br>";

//substring returns part of a string 
echo substr($fullname,3)."<br>";

//strpos is used to find string inside substring it is case-senstive
echo strpos("hello this is php class, php is too good","php")."<br>";
echo strpos("hello this is php class, php is too good","web")."<br>";// no output

//trim removes unncessacry white space from left and right side
echo trim($fullname)."<br>";
echo trim("hello","he")."<br>";

//ltrim remove from left side of string

echo ltrim("hello olleH","hel")."<br>";

//rtirm removes from right side of string
echo rtrim("hello olleH","Hel")."<br>";

//strtoupper to convert into upper
echo strtoupper($fullname)."<br>";

//strtolower to convert into lower
echo strtolower($fullname)."<br>";

// ucfirst converts first character of string into upper
echo ucfirst($fullname)."<br>";

// ucwords converts first character of string into upper
echo ucwords($fullname)."<br>";

//lcfirst converts first character of string into lower
 echo lcfirst($fullname)."<br>";

 //chunk_split splits a string into a series of smaller parts
 echo chunk_split($fullname,2,"-")."<br>";

 //strcmp used to compare two string
 //returns 0 if two are equal
 //  <0 if string1 is smaller than string 2
 //  >0 if string1 is greater than string2

 echo strcmp("apple","ball");
?>