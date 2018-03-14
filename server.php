<?php 
session_start();
//variable initialization
$username="";
$email="";
$errors=array();
//connecting to db
$db=mysqli_connect('localhost','root','','Hospitali');




if (isset($_POST['login']))

	{ 
	  $username=mysqli_real_escape_string($db,$_POST['Username']);
		$password=mysqli_real_escape_string($db,$_POST['password']);
		
		if (empty($username))
		{array_push($errors, "Input Username");}
		
		if (empty($password))
		{array_push($errors, "Input Password");}
		
		if (count($errors)==0)
		{
			$password=md5($password);
			$query="SELECT * FROM User WHERE USERNAME='$username' AND PASSWORD='$password'";

			$results= mysqli_query($db,$query);
			$occ=mysqli_fetch_assoc($results);
			extract($occ);
			if (mysqli_num_rows($results)==1)
			{

				if ($OCCUPATION == "Doctor") {
					header('location:doctors.php');
				}
				if ($OCCUPATION == "Nurse") {
					header('location:patients.php');
				}
				if ($OCCUPATION == "Patient") {
					header('location:pat.php');
				}

				

			} else {
				array_push($errors, "Wrong Combo");
			}	

		} 				
	}




//we are now registering our users
if (isset($_POST['submit'])) 
{
	//this will enable us to receive all input values from the form and also to avoid mysql injection
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password_1=mysqli_real_escape_string($db,$_POST['pass']);
	$password_2=mysqli_real_escape_string($db,$_POST['passw']);
	$occupation=mysqli_real_escape_string($db,$_POST['occupation']);

	//let us validate our forms 
	if (empty($username)) 
	{array_push($errors, "USERNAME IS NEEDED");}

	if (empty($email))
	{array_push($errors, "EMAIL IS NEEDED");}

	if (empty($password_1))
	{array_push($errors, "PASSWORD IS NEEDED");}

	if (empty($occupation))
	{array_push($errors, "OCCUPATION REQUIRED");}

	if (empty($password)!=$password_2)
	{array_push($errors, "PASSWORD MISMATCH");}
	//we need to ensure that th euser being registered does not exist 
	$userquery="SELECT * FROM User WHERE USERNAME='$username' OR EMAIL='$email' LIMIT 1";

	$AM=mysqli_query($db,$userquery);
	$bb=mysqli_fetch_assoc($AM);
	//we check if the user already exists
	if ($bb)
	 {
		if ($bb['username']===$username) 
		{array_push($errors, "USERNAME EXISTS");}
	 }



if($bb)
      {if ($bb['email']===$email) 
		{array_push($errors, "EMAIL EXISTS");}
        }

//user registration process 
	if (count($errors)==0)
		{ $password=md5($password_2);
		  $query="INSERT INTO `User` (`ID`, `USERNAME`, `EMAIL`, `PASSWORD`, `OCCUPATION`) VALUES (NULL, '$username', '$email', '$password', '$occupation');";
		  mysqli_query($db,$query);
		  $_SESSION['username']=$username;
		  $_SESSION['success']="Welcome";
	      header('location:home.php');
		}





		

	
}





//Add a new patient inthe database
if (isset($_POST['add_pat'])) {

	$ref=mysqli_real_escape_string($db,$_POST['ref']);
	$name=mysqli_real_escape_string($db,$_POST['name']);
	$temp=mysqli_real_escape_string($db,$_POST['temp']);
	$age=mysqli_real_escape_string($db,$_POST['age']);
	$weight=mysqli_real_escape_string($db,$_POST['weight']);
	$comp=mysqli_real_escape_string($db,$_POST['comp']);

	//form validation
	if (empty($ref)) 
	{array_push($errors, "Please check patient's card no");}

	if (empty($name)) 
	{array_push($errors, "Enter patients name");}

	if (empty($temp)) 
	{array_push($errors, "Check patient's temperature");}

	if (empty($age)) 
	{array_push($errors, "Enter patient's age");}

	if (empty($weight)) 
	{array_push($errors, "Check patient's weight");}

	if (empty($comp)) 
	{array_push($errors, "Ask the patient about his/her symptoms");}
	# code...

	$pat1="SELECT * FROM patients WHERE REF='$ref' ";

	$no=mysqli_query($db,$pat1);
	$ba=mysqli_fetch_assoc($no);


	//we check if the reference number already exists
	if ($ba)
	 {
		if ($ba['REF']===$ref) 
		{array_push($errors, "Reference Number already exists");}
	 }


	 if (count($errors)==0)
		{ 
			$vstd=date("h:i:sa d/m/Y ");
		  $q1="INSERT INTO `patients` (`ID`, `REF`, `NAME`, `AGE`, `WEIGHT`, `TEMPERATURE`, `COMPLICATIONS`) VALUES (NULL, '$ref', '$name', '$age', '$weight', '$temp', '$comp');";
		  mysqli_query($db,$q1);

		}



	
}


if (isset($_GET['id']))
 {
	extract($_GET);
	mysqli_query($db,"DELETE from Pharmacy where ID=$id");
	header('location:pharmacy.php');

	# code...
 }


//form validation to proceed to the pharmacy
if (isset($_POST['proc_pharm'])) {
	$refno=mysqli_real_escape_string($db,$_POST['ref']);

	$med=mysqli_real_escape_string($db,$_POST['medication']);
	$vstd=date("h:i d/m/Y ");

	if (empty($refno)) 
	{array_push($errors, "Select a Reference number from the table above");}
if (empty($med)) 
	{array_push($errors, "The patient needs medication to proceed to the pharmacy");}
	
	# code...
	else{
		$subpat="INSERT INTO `Pharmacy` (`ID`, `REF`, `MEDICATION`, `VISITDATE`) VALUES (NULL, '$refno', '$med', '$vstd')";
		
		mysqli_query($db,"DELETE FROM `patients` WHERE `patients`.`ID` = $refno ");
		$delpatdoc="";
			echo "<span style='color:white;'>The patient will be called by the pharmasist to pick the medication</span>";

	}
	
}


?>   