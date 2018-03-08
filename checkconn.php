<?php

$servername="localhost";
$user="root";
$password="";
$db="Ian";

$conn=mysqli_connect($servername,$user,$password,$db);
if (!$conn) {

	die("Connection failed ".mysqli_connect_error());
}echo "Successful Connection!";

?>