<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<script type="text/javascript" src="custom.js"></script>

	<script type="text/javascript" src="js/bootstrap.min.js"></script><meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Font awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


	<div id="fmcont">


	<form method="post" action="register.php" id="f1" class="form form-group">
			<?php include('errors.php'); ?>
			<i class="fa fa-user-md" style="font-size:3em;"></i>
			<h1>Register</h1>

			
			<input type="text" name="username" placeholder="Username">
			<br>
			<br>

			<input type="text" name="email" placeholder="E-mail" >
			<br>
			

			<input type="radio" name="occupation" value="Patient">Patient<br>
			<input type="radio" name="occupation" value="Doctor">Doctor<br>
			<input type="radio" name="occupation" value="Nurse">Nurse<br>

			<input type="password" name="pass" placeholder="Password" id="pass">
			<br>
			<br>

			
			<input type="password" name="passw" id="passw" placeholder="Confirm-Password">
			<br>
			<br>
			<button type="Submit" class="btn btn-primary" name="submit">Register</button>

		</div>

		<br>
		<br>
		<center><p>Already a member?<a href="login.php">Sign in</a></p></center>




	</form>
</div>
</body>
</html>
