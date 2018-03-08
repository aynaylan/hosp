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


	<nav class="nav navbar-default">

		<div class="container-fluid">
	
			<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="">Naylan</a>
			</div>

	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav" >
	
			<li><a href="">Pharmarcy</a></li>
			<li><a href="#test">Testimonials</a></li>
			<li><a href="doctors.php">Doctor's Panel</a></li>
			<li><a href="#contactus">Contact us</a></li>
			<li><a href="home.php?logout='1'">Logout</a></li>

		</ul>
		</div>


		</div>


		
	</nav>



	<div id="newpat">

		<div id="fmcont">
			<h1>New Patient</h1>
		<form class="form form-group" method="post" action="patients.php">
			<?php include('errors.php') ?>
			<input type="text" placeholder="Ref No" name="ref"><br><br>
			<input type="text" placeholder="Name" name="name">
			<input type="number" placeholder="Age" name="age"><br><br>
			
			<input type="number" placeholder="Weight" name="weight">
			<input type="number" placeholder="Temperature" name="temp"><br><br>
			<textarea placeholder="Complications" name="comp" style="color:black;"></textarea><br>
			<button type="submit" class="btn btn-success" name="add_pat">Add Patient</button> 

			<a href="doctors.php"><button href="doctors.php" class="btn btn-success">Doctors Panel</button></a>
		</form>
	</div>
	</div>
	
</body>
</html>