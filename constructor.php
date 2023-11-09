<?php
class books{
    private $author;
    private $price;
    function __construct($var1,$var2)
{
    $this->author= $var1;
    $this->price= $var2;

}
function get_author()
{
    return $this->author;

}
function get_price()
{
    return $this->price;
}
}
$Mackbeth=new books("Shakespear","1200");
$SampleMaterials=new books("RD Sharma","500");
echo"Author: ".$Mackbeth->get_author()."/n";
echo "color: ".$Mackbeth->get_price();
echo "<br>";
echo "Author: ".$sampleMaterial->get_price();
echo "<br>";


?>




