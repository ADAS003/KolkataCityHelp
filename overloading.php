<?php
class shape {
    function__call($name_of_function, $arguments) {
        if($name_of_function =='area')
        {
            switch (count($arguements))
            {
                case 1:
                    return 3.14 * $arguements[0];
                    case 2:
                        return $argument[0]*$arguements[1];
                        case 3:
                            return $arguements[0]*$arguements[1]*$arguements[2];
            }
        
        }
    }
}
$obj = new shape;
echo($obj->area(2));
echo "/n";
echo ($obj->area(5,20));
echo "/n";
echo($obj->area(4,5,6))



?>