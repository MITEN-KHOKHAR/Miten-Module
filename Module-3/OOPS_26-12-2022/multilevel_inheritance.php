<?php 
// A=>B=>C=>D Multilevel Inheritance
class Car 
{
    public function display()
    {
        echo "This is Mercedes-Benz A7"."<br>";
    }
}
class Company extends Car 
{
    public function display1()
    {
        echo "A7 is a Series of Mercedes-Benz"."<br>";
    }

}
class Garage extends Company
{
    public function display2()
    {
        echo "I Seviced My Mercedes-Benz in Maruti Automobiles, Rajkot";
    }
}


$obj=new Garage;
$obj->display();
$obj->display1();
$obj->display2();
?>