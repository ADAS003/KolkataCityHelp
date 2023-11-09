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
    $color=array('white','green','red');
    foreach($color as $c)
    {
        echo "$c,";}
    sort($color);
    "<ul>";
    foreach($color as $y)
    {
        echo"<li>$y</li>";

    }
    echo"</ul>";
    ?>
</body>
</html>