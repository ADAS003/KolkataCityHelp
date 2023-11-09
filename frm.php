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
    $servername = "localhost";
  
    // In my case, user name will be root
    $username = "root";
      
    // Password is empty
    $password = "";
      
    // Creating a connection
    $conn = new mysqli($servername, 
                $username, $password);
      
    // Check connection
    if ($conn->connect_error) {
        die("Connection failure: " 
            . $conn->connect_error);
    } 
      
    // Creating a database named geekdata
    $sql = "CREATE DATABASE geekdata";
    if ($conn->query($sql) === TRUE) {
        echo "Database with name geekdata";
    } else {
        echo "Error: " . $conn->error;
    }
      
    // Closing connection
    $conn->close();
    ?>
    ?>
</body>
</html>