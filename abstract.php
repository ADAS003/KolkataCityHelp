<?php
abstract class employees{
    abstract function name();
    abstract function designation();

}
class employee extends employees{
function name(){
    $ename = "John";
    echo "Employess name is : ".$ename;
}
function designation()
{
$edesg="IT";
echo "Designation is: ".$edesg;    
}
}
class employees1 extends employess{
    function name(){
        $ename = "John";
        $eage = "23";
        echo "Employ"
    }
}


?>