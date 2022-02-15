<?php

require_once("connection.php");
$id = $_GET['GetId'];
$query = "select User_ID,User_Name,User_Email,User_Age from userdetails.user where User_ID ='".$id."' ";
$result = mysqli_query($con,$query); 

while($row = mysqli_fetch_assoc($result))
{
     $id = $row['User_ID'];   
     $name = $row['User_Name'];   
     $email = $row['User_Email'];
     $age = $row['User_Age'];
     echo $id;
     echo $name;
     echo $email;
     echo $age;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <link rel="stylesheet" a href="CSS/styles.css"/> 
    <title>Edit Form</title>
</head>
<body class="bg-dark">

                    <div >
                        <div class="title">
                            <h1 > Edit Form in PHP</h3>
                        </div>
                        <div class="form-body">
                            <form action="update.php?Id=<?php echo $id ?>" method="post">
                                <Label>Enter UserName</Label>
                                <input type="text"  placeholder=" User Name " name="name" value =" <?php echo $name ?> " > 
                                <br><br>
                                <Label>Enter Email</Label>
                                <input type="email"  placeholder=" User Email " name="email" value =" <?php echo $email ?> ">
                                <br><br>
                                <Label>Enter Age</Label>
                                <input type="text"  placeholder=" User Age " name="age" value =" <?php echo $age ?> " > 
                                <br><br>
                               <!--<input type="submit" name="submit" value="Submit">--> 
                               <button name="update">Update</button>
                            </form>

                        </div>
                    </div>
    
</body>
</html>