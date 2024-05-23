 <?php
// function divide($num,$deno){
//     if($deno==0){
//         throw new exception("cannot divided by zero");
//     }
//     return $num/$deno;
// }
// try{
//     $result=divide(5/2);
//     echo "Result:$result";
//    // $result=divide(10/0);
//     //echo "Division by zero Exception";
// }
// catch(Exception $e){
//     echo "caught Exception:".$e->getMeassage();
// }
// finally{
//     echo "\n finally block executed";
// }

try {
    // Code that may throw an exception
    $result = 10 / 0; // Division by zero, will throw an exception
} catch (Exception $e) {
    // Catch the exception and handle it
    echo "Caught exception: " . $e->getMessage();
} finally {
    // This block will always execute, whether an exception is thrown or not
    echo "Finally block executed.";
}
?>

