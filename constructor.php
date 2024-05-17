<?php
class person{
    private $fname;
    private $lname;
   public function __construct($fname,$lname){
    echo "Initialising the object...<br>";
    $this->fname=$fname;
    $this->lname=$lname;
   }
   //public method to show name
      public function showname(){
        echo "my name is:".$this->fname."".$this->lname;
      }
}

   $person1=new person("Johan","wick");
   $person1->showname();

//    //supports only in older version
//    class Person1{
//    public function __Person1($fname,$lname){
//     echo "Initialising the object...<br>";
//     $this->fname=$fname;
//     $this->lname=$lname;
//    }
//    public function showname(){
//     echo "my name is:".$this->fname."".$this->lname;
//   }
// }
// $obj=new Person1 ("sanskriti","shrestha");
// $obj->showname();

?>