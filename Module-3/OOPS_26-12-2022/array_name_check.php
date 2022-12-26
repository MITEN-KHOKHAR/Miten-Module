<?php 
class CheckNames
{
    public function chk()
    {
        $arr=array("miten","jay","kishan","ayush","meet","komal","brijesh");
        if(in_array("kamlesh",$arr))
        {
            echo "This name is available";
        }   
        else 
        {
            echo "sorry this name is not avaialable";
        }
    }
    
}
$obj=new CheckNames;
$obj->chk();

?>