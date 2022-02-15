<?php

require_once("connection.php");

if(isset($_POST['update']))
{
    $id = $_GET['Id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $query = "update userdetails.user set User_Name = '".$name."' ,User_Email = '".$email."' ,User_Age = '".$age."'  
                where User_ID ='".$id."' ";
    $result = mysqli_query($con,$query);

    if ($result)
    {
        header("location:view.php");
    }
    else
    {
        echo 'Please check your query';
    }
}
else
{
    header("location:view.php");
}


?>