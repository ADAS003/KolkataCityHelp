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
if(isset($_POST['fsubmit']))
{
    $name=$_POST["fname"];
    $email=$_POST["femail"];
    $msg=$_POST["fmsg"];

    $host="localhost";
    $username="form_user";
    $dbname="contact_data";
    $password="$xyz123";


    $con=mysqli_connect($host,$username,$dbname,$password,$dbname);
    if(!$con)
    {
        die("connection failed ".mysqli_connect_error());
    }
    $sql = "insert into sarmi_data(id,name_fd,email_fd,message_fd) values ('1','$name','$email','$msg')";
    $save = mysqli_query($con,$sql);
    if($save)
    {
        echo "data has been stored.";
    }
    else{
        echo "error.";
    }
    mysqli_close($con);
}
    ?>
</body>
</html>