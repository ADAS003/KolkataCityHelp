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
   $string = 'abcde$ddfd @abcd)der];'
   echo 'Old string:'.$string.";
   $newstr = preg_replace("/[^A-Za-z0-9]/",",$string);
   echo 'New string:'.$newstr."\";
    ?>
</body>
</html>