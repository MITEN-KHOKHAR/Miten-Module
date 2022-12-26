<?php 
// one class property only access by its one child class i.e called single inhritance
class Car 
{
    public function test()
    {
        echo "This is Maruti Suzuki M12035"."<br>";
    }
}
class Company extends Car 
{
    public function test1()
    {
        echo "M12035 is a Series of Maruti Suzuki";
    }

}

$obj=new Company;
$obj->test();
$obj->test1();
?>