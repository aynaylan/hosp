<?php include('server.php');?>
<?php
session_start();

if (!isset($_SESSION['Username'])) {
	$_SESSION['msg']="You must be logged in";
	header('location:login.php');
}


if (isset($_POST['logout'])) {
	session_destroy();
	unset($_SESSION['Username']);
	# code...
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<script type="text/javascript" src="custom.js"></script>

	<script type="text/javascript" src="js/bootstrap.min.js"></script><meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Font awesome -->
	
</head>
<body>
	

	
	<nav class="nav navbar-default">

		<div class="container-fluid">
	
			<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="">Naylan</a>
			</div>

	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav" >
	
			<li><a href="patients.php">Patients</a></li>
			<li><a href="">Pharmarcy</a></li>
			<li><a href="#test">Testimonials</a></li>
			<li><a href="#contactus">Contact us</a></li>
			<li><a href="home.php?logout='1'">Logout</a></li>

		</ul>
		</div>


		</div>


		
	</nav>




	

	<div class="row" >
			<center><h1 style="color: white;">Our facilities</h1></center>
			<div id="cont1">
			
			<div class="col-md-4">
			<img src="css/1.jpg">
			<p>We have qualified staff who are familiar with various medical terms and equipment.</p>
		</div>
		<div class="col-md-4">
			<img src="css/2.jpg">

			<p >Our pharmacy is fully equipped with ointments,tablets and syrups.</p>
		</div>
		<div class="col-md-4">
			<img src="css/3.jpg">
			<p>We have state of the art equipment.Ranging from C.T scanners,Sonar sound systems,X-Ray rooms,Chemotherapy rooms and dialysis machines</p>
		</div>	

			</div>
			
		
		</div><br>

	<div class="container">
		<div class="row" id="cont1">
		<center><h1 id="test">Testimonials</h1></center>
		<div class="col-md-3">
		<img src="css/d1.jpg">	
		<p>The AIDS survivor</p>		
		</div>
		<div class="col-md-3">
			<img src="css/d2.jpg">
			<p>The Ebola survivor</p>
		</div>
		<div class="col-md-3">
			<img src="css/d3.jpg">
			<p>The ressurected</p>
		</div>
		<div class="col-md-3">
			<img src="css/d4.jpg">
			<p>The other survivor</p>
		</div>

		</div>

		
		<br>

		<div class="row" style="font-size: 2em;">

		<div class=" col-md-3" style="color: white;">
			<h2 id="contactus">Contact info</h2>
			<i class="material-icons">email</i><p>customer@naylan.com</p>
			<i class="fa fa-phone"></i><p>+(254)708689851</p>
			<i class="fa fa-location-arrow"></i><p>Upper Hill,Nairobi,Kenya</p>
		</div>
		<div class=" col-md-9">
			<form>
				<input class="form-control" type="text" name="" placeholder="Name"><br>
				<input class="form-control" type="email" name="" placeholder="Your Email address"><br>
				<input class="form-control" type="number" name="" placeholder="Phone number"><br>
				<textarea class="form-control" placeholder="Your message.We will get back to you as soon as possible"></textarea><br>
				<button type="submit" class="btn btn-success" >Send Message</button>
			</form>
		</div>
		
		</div>
	</div>
	
	

</body>
</html>
