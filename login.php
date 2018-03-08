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

	<form  method="post" action="login.php" id="f1" class="form form-group">
	<?php include('errors.php') ?>
			<i class="fa fa-user-md" style="font-size:3em;"></i>
			<h1>Login</h1>

	<input type="text" name="Username" placeholder="Username">

	<br>
	<br>

	
	<input type="password" name="password" placeholder="Password ">

		<br>
		<br>

	<button type="submit" name="login"   class="btn btn-primary">Login</button> 
	<center><p>Not a member?<a href="register.php">Register</a></p></center>



	</form>
	</div>


</body>
</html>