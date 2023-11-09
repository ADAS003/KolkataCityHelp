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
    $delete_item = 'march';
    $months = array('jan','feb');
    if (($key=array_search($delete_item,$months)) !== false){
        unset($months[$key]);
    }
    var_dump($months);
    ?>
</body>
</html>