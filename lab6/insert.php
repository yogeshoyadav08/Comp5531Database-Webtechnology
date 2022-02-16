<?php

require_once("connection.php");

if (isset($_POST['submit'])) // isset() function - checks whether a variable is set, which means that it has to be declared and is not NULL
{
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['age']) )
    {
         echo 'Please Fill in the blanks';
    }
    else
    {
        $username = $_POST['name'];
        $useremail = $_POST['email'];
        $userage = $_POST['age'];

        $query = " insert into userdetails.user(User_Name,User_Email,User_Age) VALUES('$username','$useremail','$userage') ";
        $result = mysqli_query($con,$query);

        if ($result)
        {
            header("location:view.php");
        }
        else{
            echo 'Please check your query';
        }
    }
}
else
{
    echo 'Please check your connection';
}

?>