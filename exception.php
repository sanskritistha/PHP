<?php
//function declaration
function triggerException(){
    //using throw keyword
    throw new Exception("Manually triggering exception..");
}
?>
<?php
try{
    //calling the function
    triggerException();
}
catch(Exception $e){
    echo "oops! some unexpected error ocurred..";
}
?>