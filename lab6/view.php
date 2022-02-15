<?php

//echo 'Record Added Successfully'; 
require_once("connection.php");
$query = "select User_ID,User_Name,User_Email,User_Age from userdetails.user";
$result = mysqli_query($con,$query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <link rel="stylesheet" a href="CSS/styles.css"/> 
    <title>View Records</title>
</head>
<body class="bg-dark">

                    <div >
                        <div class="title">
                            <h1 > View Inserted Records </h3>
                        </div>
                        <div class="table-body">
                        <table>
                                <thead>
                                        <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                           		<th>Email</th>
                                           		<th>Age</th>
                                                   <th>Edit</th>
                                                   <th>Delete</th>
                                        </tr>
                                </thead>
                                <tbody>

                                <?php
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                             $id = $row['User_ID'];   
                                             $name = $row['User_Name'];   
                                             $email = $row['User_Email'];
                                             $age = $row['User_Age'];
                                        
                                ?>
                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $age ?></td>
                                        <td><a href="edit.php?GetId=<?php echo $id ?>"> Edit </a></td>
                                        <td><a href="delete.php?del=<?php echo $id ?>"> Delete </a></td>
                                    </tr>
                                <?php
                                        }
                                ?>

                                        </tbody>
                        </table>
                
                        </div>
                    </div>
    
</body>
</html>