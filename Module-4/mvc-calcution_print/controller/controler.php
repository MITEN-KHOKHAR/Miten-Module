<?php
require_once("model/model.php");

class controller extends model
{
    public function __construct()
    {
        if(isset($_POST['alcal']))
        {
            $st=$_POST['st'];
            $nd=$_POST['nd'];
            $rd=$_POST['rd'];
            $th=$_POST['th'];

            $sum=$st+$nd+$rd+$th;
            $sub=$st-$nd-$rd-$th;
            $mul=$st*$nd*$rd*$th;
            $div=$st/$nd/$rd/$th;

            echo "<h2 style='text-align:center;color:red;'>Your Sum Answer is :".$sum."</h2>";
            echo "<h2 style='text-align:center;color:red;'>Your Sub Answer is :".$sub."</h2>";
            echo "<h2 style='text-align:center;color:red;'>Your Multiple Answer is :".$mul."</h2>";
            echo "<h2 style='text-align:center;color:red;'>Your Division Answer is :".$div."</h2>";
        }
    }
}
$obj=new controller;
?>