<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" a href="CSS/styles.css"/> 
    <title>Php Basics</title>
</head>
<body>
<?php


/* Display PHP Basics*/
echo "<h1>PHP Basics</h1>";
echo "<h6>PHP Basics</h6>";
echo "<p>PHP Basics</p>";

echo '</br> ************************************************* </br>';
/* Form Data */
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];

echo "<h1>Registration Form Details</h1>";

echo 'Name - '.$name.'</br>';
echo 'Email - '.$email.'</br>';
echo 'Age - '.$age.'</br>';
echo 'Gender - '.$gender.'</br>';
echo 'Birthday - '.$birthday.'</br>';

echo '</br> ************************************************* </br>';

/* Variables */
$var = 30;
$str = 'Hello World';

echo $var.'</br>';
echo $str.'</br>';

/* Constants */

define('Pi',3.1456789);
echo ' The value of Pi is '.Pi.'</br>';

/* Supported Data Types in PHP */

// Integer
$x =1;
echo $x.'</br>';
// Float
$y = 2.8;
echo $y.'</br>';
// String
$strVal = "Demo PHP";
echo $strVal.'</br>';
// Boolean
$foo = True;
echo $foo.'</br>';


/* Array */

$x = array(1,2,3,4,5,6,7);
$strarry = array('abc','pqr','xyz','mnq');
echo 'String Values are '.$strarry[1].'</br>';

echo '</br> ************************************************* </br>';

/* Arithmetic Operation */
echo " 5 + 2  = ". 5 + 2 . '</br>';
echo " 5 - 2  = ". 5 - 2 . '</br>';
echo " 5 * 2  = ". 5 * 2 . '</br>';
echo " 5 / 2  = ". 5 / 2 . '</br>';
echo " 5 % 2  = ". 5 % 2 . '</br>';


echo '</br> ************************************************* </br>';
/* If Else */
$max = 50;

$min = 25;

if($max > $min)
{
    echo " Max is greater than Min".'</br>';
}
else 
{
    echo "Max is smaller than Min".'</br>';
}

echo '</br> ************************************************* </br>';

/* Switch */
$number = 5;
switch($number)
{
    case 1:
        echo 'Number is 1'.'</br>';
        break;
    case 3:
         echo 'Number is 3'.'</br>';
         break;
    case 5:
        echo 'Number is 5'.'</br>';
        break;
    default :
        echo 'Number is not found'.'</br>';

}

echo '</br> ************************************************* </br>';

/* While Loop & For Loop */
$number = 5;
while($number < 10)
{
    echo $number.'</br>';
    $number++;
}
echo '</br> ************************************************* </br>';

for ($x = 1; $x <=20 ;$x+=5)
{
    echo $x.'</br>'; 
}



?>

</body>

</html>