

<?php
class books{ 
    protected $author;
    protected $price;


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

    class novels extends books
    {
        public $genre;
    

        function display($genre)
        {
            echo "Author: ".$this->author;
            echo "Price: ".$this->price;
            echo "Genre: ".$this->genre=$genre;
            
        }
}

$Macbath=new books("Shakespeare","1200");
$SampleMaterial=new books("RD sharma","500");

echo "Author: ".$Macbath->get_author()."\n";
echo "Color: ".$Macbath->get_price();
echo "<br>";

echo "Author: ".$SampleMaterial->get_author()."\n";
echo "Color: ".$SampleMaterial->get_price();
echo "<br>";

$obj3= new novels("J.k. Rowling","2500");
$obj3->display("thriller");
$obj4=new novels("Tagore","650");
$obj4->display("");



?>