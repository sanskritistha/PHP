<?php
class DivideByZeroException extends Exception { }
class DivideByNegativeNoException extends Exception{}
function checkdivisior ($dividend,$divisor){
    //Throw exception if divisor is Zero
try{
    if($divisor==0){
        throw new DivideByZeroException;
    }else if($divisor<0){
        throw new DivideByNegativeNoException;
    }else{
        $Result=$dividend/$divisor;
        echo "Result of division =$Result </br>";
    }
}
catch(DivideByZeroException $dze){
    echo "Divide by Negative number Excpetion <br>";
}
catch (DivideByNegativeNoException $dnne){
    echo "divide by negative number exception <br>";
}
catch(Exception $ex){
    echo "unknown Exception";
}
} 
checkdivisior(18,3);
checkdivisior(34,-6);
checkdivisior(27,0);
?>