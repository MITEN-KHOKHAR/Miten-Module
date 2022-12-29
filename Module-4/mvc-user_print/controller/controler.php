<?php
require_once("model/model.php");

class controller extends model
{
    public function __construct()
    {
        if(isset($_POST['user']))
        {
            $fname=$_POST['fname'];

            echo "<h2 style='text-align:center;color:red;'>Your Name is :".$fname."</h2>";
        }
    }
}
$obj=new controller;
?>