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
						<button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="home.php">Naylan</a>
			</div>

	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav" >
	
			<li><a href="pharmacy.php">Pharmarcy</a></li>
			<li><a href="home.php#test">Testimonials</a></li>
			<li><a href="home.php#contactus">Contact us</a></li>
			<li><a href="logout.php">Logout</a></li>

		</ul>
		</div>


		</div>


		
	</nav>


	<div id="fmcont">
			<h1>Patients</h1>
			<div class="table-responsive">
			<table style="color: white;" class="table table-bordered table-condensed">
				<tr>

			<th>Reference</th>
			<th> Names</th>
			<th>Age</th>
			<th>Weight</th>
			<th>Temperature</th>
			<th>Complications</th>
			
			</tr>
				<?php

	    $db=mysqli_connect('localhost','root','','Hospitali'); 

		$fetch=mysqli_query($db,"SELECT * FROM patients");

		while ($row=mysqli_fetch_assoc($fetch)) {
			extract($row);
			echo "


			

			<tr>
			<td>$REF</td>
			<td>$NAME</td>
			<td>$AGE</td>
			<td>$WEIGHT</td>
			<td>$TEMPERATURE</td>
			<td>$COMPLICATIONS</td>

			</tr>



			";
	
		}
		?>
			</table>
</div>
				<div id="fmcont">
			<form class="form form-group" action="doctors.php" method="post">
			
				 
		 <input class="form-control" type="text" name="ref" placeholder="Select Reference Number">
		 <textarea class="form-control" name="medication" style="color: black;" placeholder="Suggest Medication"></textarea><br>
		 <?php include('errors.php') ?>
				<button class="btn btn-success" name="proc_pharm">Proceed to Pharmacy</button>
			</form>
		</div>
		
	</div>

</body>
</html>