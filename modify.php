<!DOCTYPE html>
<?php
$cookie_name="user";
$cookie_value="alex porter";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named".$cookie_name."is not set!";
}
else{
    echo"cookie".$cookie_name."is set!<br>";
    
       echo "cookie".$cookie_name."is set!<br>";
       echo "value is:".$_COOKIE[$cookie_name];

    
}



?>
</body>
</html>