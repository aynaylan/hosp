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
					<button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="home.php">Naylan</a>
			</div>

	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav" >
	
			<li><a href="patients.php">Patients</a></li>
			<li><a href="home.php#test">Testimonials</a></li>
			<li><a href="home.php#contactus">Contact us</a></li>
			<li><a href="logout.php">Logout</a></li>

		</ul>
		</div>


		</div>


		
	</nav>


	
	

	
	<div id="fmcont">
			<h1>Patients</h1>
			<?php echo "The time is " . date("h:i:sa d/m/Y ");?>
			<div class="table-responsive">
			<table style="color: white;" class="table table-bordered table-condensed">
				<tr>

			<th>Reference</th>
			<th>Medicine</th>
			<th>Date Prescribed</th>
			
			
			</tr>
				<?php

	    $db=mysqli_connect('localhost','root','','Hospitali'); 

		$fetch=mysqli_query($db,"SELECT * FROM Pharmacy");

		while ($row=mysqli_fetch_assoc($fetch)) {
			extract($row);
			echo "


			

			<tr>
			<td>$REF</td>
			<td>$MEDICATION</td>
			<td>$VISITDATE</td>
			<td><a href='server.php?id=$ID'>Check out</a></td>
			</tr>



			";
	
		}
		?>
			</table>
</div>

	
</body>
</html>