 <?php
//$con = mysqli_connect("localhost","UserName","Password","DatabaseName");
$con = mysqli_connect("localhost","root","xxxxx","xxxxx");

if(!$con)
{
    die("Connection Error");
}
else
{

    echo 'Connection Successfull';
}

 ?>