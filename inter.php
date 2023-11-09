<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 $a1=array("a"=>"60","b"=>"78","c"=>"34","d"=>"65","m"=>"35","p"=>"22");
 $a2=array("e"=>"78","f"=>"60",);
 
 $result=array_intersect($a1,$a2);
 print_r($result);
    ?>
</body>
</html>