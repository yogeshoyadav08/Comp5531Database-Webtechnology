 <?php

$con = mysqli_connect("localhost","UserName","Password","Database");

if(!$con)
{
    die("Connection Error");
}
else
{

    echo 'Connection Successfull';
}

 ?>