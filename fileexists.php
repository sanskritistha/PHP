<?php
$file="file1.txt";
// // if(file_exists($file)){
//     if(rename($file,"file1.txt")){//rename
//     echo "file renamed successfully";
    
// }else{
//     echo "file cann't be renamed";
// }
// }else{
//     echo "file doeesn't exists";
// }
//to delete a file
if(!unlink($file)){
    echo ("error deleting $file");
}else{
    echo("Deleted $file");
}
?>