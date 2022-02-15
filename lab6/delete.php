<?php

require_once("connection.php");

if( isset($_GET['del']))
{
    $id = $_GET['del'];
    $query = "delete from  userdetails.user where User_ID = '".$id."' ";
    $result = mysqli_query($con,$query);

    if ($result){
        header("location:view.php");
    }
    else
    {
        echo 'Please check your Query';
    }
}
else
{
    header("location:view.php");
}

?>