<?php 
// what is class : A class is a group of member and its member function i.e called class
// or
// A class is a blue print of its objects.
// or
// A class is nothing whenever we can not create its object
class A 
{
    public function display()
    {
        $name="Hi i am Miten";
        echo $name;
    }
}
$obj=new A; //New A is an Object of Class A
$obj->display();

?>