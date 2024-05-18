<?php
// //to write 
$list=array(
    "peter, Griffin,Oslo,Norway",
    "Glen ,Quagmire,Oslo,Norway",
);
$file= fopen("enclosure.csv","w");
foreach($list as $line ){
    fputcsv($file,explode(',',$line));
}
fclose($file);
//to read
$file=fopen("enclosure.csv","r");
print_r(fgetcsv($file));
echo "<br>";
fclose($file);

// $file=fopen("enclosure.csv","r");
// print_r(fgetcsv($file));
// while(!feof($file))
// {
//     print_r(fgetcsv($file));
//     echo "<br>";
// }
// fclose($file);
// //to copy

// $srcfile="file1.txt";
// $destfile="file2.txt";
// if(!copy($srcfile,$destfile)){
//     echo "file cannot be copied!";
// }else{
//     echo"file has been copied";
// }
?>