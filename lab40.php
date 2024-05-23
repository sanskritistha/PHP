<?php
$file='file1.txt';
//set read and write permission for owner
chmod($file,0600);
//set read ans write permission for owner, read-only for group and others
chmod($file,0644);
?>