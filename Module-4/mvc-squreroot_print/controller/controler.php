<?php
require_once("model/model.php");

class controller extends model
{
    public function __construct()
    {
        if(isset($_POST['alcal']))
        {
            $root=$_POST['root'];

            echo "<h2 style='text-align:center;color:red;'>Your Sum Answer is :".sqrt($root)."</h2>";
        }
    }
}
$obj=new controller;
?>