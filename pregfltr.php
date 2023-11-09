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
   $input = [
     "It is 5 o' clock",
     "40 days",
     "No numbers here",
     "In the year 2000"
   ];
   $result = preg_filter('/[0-9]+/','($0)',$input);
   print_r($result);


?>
</body>
</html>