<?php

$conn = mysqli_connect("localhost","root","YY08@mysql","testDB");

if ($conn) {
	echo "Database Connected..";
}
else{
	echo "Database error: ". mysqli_connect_error();
}