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
    echo"oct 3,1975 was on a ".date("1",mktime(0,0,0,10,3,1975))."<br><br>";
    echo date("M-d-y",mktime(0,0,0,12,36,2001))."<br>";
    echo date("M-d-y",mktime(0,0,0,1,1,2001))."<br>";
    echo date("M-d-y",mktime(0,0,0,1,1,99))."<br>";
    ?>
</body>
</html>