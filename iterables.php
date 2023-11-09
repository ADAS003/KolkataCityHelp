<?php
$var1 = array("may","June","July","aug");
function month(iterable $var1)
{
    foreach($var1 as $output)
    {
        echo $output." ";
    }
}
month($var1);

?>