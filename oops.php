<?php
class fruits{
    public $name;
    public $color;
    function set_value($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_color()
    {
        return $this->color;
    }
}
$obj1=new Fruits();
$obj2=new Fruits();
$obj1->set_value("mango","yellow");
echo "Name: ".$obj1->get_name()."\n";
echo "color: ".$obj1->get_color();
echo "<br>";
$obj2->set_value("watermelon","red");
echo "Name: ".$obj2->get_name()."\n";
echo "color: ".$obj2->get_color();











?>