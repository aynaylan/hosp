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
	
		<nav class="nav navbar-default">
			<ul class="nav navbar-nav">
				<li><a href="">k</a></li>
				<li><a href="">kjb</a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
			</ul>
		</nav>
<div class="container">
		<form method="POST" class="form-group">
			<span style="color: white">Username</span><input type="text" class="form-control" name=""><br>
			<span style="color: white">Email</span><input type="email" class="form-control" name=""><br>

			<span style="color: white">Date of birth</span><input type="date" name=""><br>

			<span style="color: white">Password</span><input type="password" class="form-control" name="pswd"><br>
			<?php

			$pass=$_POST['pswd'];
			
			if (strlen($pass)<8) {
			echo "<b style='color:red'>Too Short</b><br>";	
			}else{
			echo "<b style='color:green'>Strong</b><br>";	
				
			}

			?>
			<span style="color: white">Confirm-Password</span><input type="password" class="form-control" name="pwsd1">
			<?php

			$pas=$_POST['pswd'];
			
			if (!$pas===$pass) {
			echo "<b style='color:red'>Mismatch</b><br>";	
			}else{
				echo " ";	
			
			}

			?>

			<br>
			<button class="btn btn-success" type="submit">Submit</button>
			<button class="btn btn-danger">Reset</button>
		</form>
	</div>

</body>
</html>