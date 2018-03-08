<?php

if (isset($_POST['username'])) {
	//this is used to get values passed from the user inout

	$username=$_POST['username'];
	$password=$_POST['pass'];

	//connecting to my database

	$conn=mysqli_connect("localhost","root","","Ian");
	//Local host =servername
	//root=user account to enable you access all files and command statements
	//"" slot is a slot left for the password
	//ruby is my database name


	$results=mysqli_query($conn,"select * from users where username='$username' and pass='$password' ") or die(mysqli_error($conn));


	if (mysqli_num_rows($results)>0) {
		echo "Login Successful<br>";
		echo "Logged in as ".$username;
	}else{
		echo "Failed to login";
	}

}


?>