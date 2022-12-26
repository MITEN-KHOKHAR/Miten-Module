<?php 
// pseudo variable : A pseudo variable is used to called direct inside of method or globally access any availbles in its method.
// A pseudo variable is used with $this symbol.

class Name 
{
    public $name="Hi Miten, How are you...?";
    public function test()
    { 
           //echo $nm;
           echo $this->name;
    }
}

$obj=new Name;
$obj->test();
?>