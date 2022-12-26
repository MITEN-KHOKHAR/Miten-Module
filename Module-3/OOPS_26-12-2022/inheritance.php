<?php 
// inheritance : An inheritance is used to access one class property with another class i.e called inheritance.
// Extends kyword used obne class Property With Another Class
// Types of inheritance
       // single inheritance
       // multilevel inheritance
       // multiple inheritance  
class A 
{
    public function display()
    {
        $name="Hi i am Miten Khokhar";
        echo $name."<br>";
    }
}
class B extends A 
{
    public function display1()
    {
        $name="How are you, Miten...?";
        echo $name."<br>";
    }
} 

$obj=new B;
$obj->display();
$obj->display1();
?>