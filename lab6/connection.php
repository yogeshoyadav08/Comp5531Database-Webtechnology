 <?php

$con = mysqli_connect("localhost","root","YY08@mysql","userdetails");

if(!$con)
{
    die("Connection Error");
}
else
{

    echo 'Connection Successfull';
}

 ?>