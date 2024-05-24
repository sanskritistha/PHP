<?php
namespace MyVeryLongNameSpaceName;
class MyClass{
    //class defination goes here
}
?>
<?php
namespace MyOtherNameSpace;
use MyVeryLongNameSpaceName as VLN;
//create an instance of MyClass
$obj=new VLN\MyClass();
?>