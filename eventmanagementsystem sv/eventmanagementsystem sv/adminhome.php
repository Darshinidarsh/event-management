<html>
	<head>
		<title>Event Management</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="css/bootstrap.css" rel="stylesheet"/>
		<script src="js/JQuery.js"></script>
		<script src="js/bootstrap.js"></script>
		<style type="text/css"></style>
		<link rel="stylesheet" href="css/style.css">
		<style>
			.centered {
						position: absolute;
						top: 50%;
						left: 50%;
						transform: translate(-50%, -50%);
					}

		</style>
	</head>
	<body>
	<?php
	include("db.php");
	if($_SESSION['email']==true){
			//echo "Welcome"; 
			//echo $_SESSION['email'];
		}else
		{
			echo "<script> window.location = 'adminlogin.html'; </script>" ; 
		}
	?>
	<header>
		<div class="navbar" style="margin-bottom:0px;background-color:#9400D3;">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-target="#n" data-toggle="collapse"> 
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="n">
				<ul class="nav navbar-nav navbar-right">
				<li><a href="" style="color:White;"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['email'];?> </a></li>
					<li><a href="ViewCustomers.php" style="color:White;"><span class="glyphicon glyphicon-user"></span> View Customers </a></li>
					<li><a href="ViewEvents.php" style="color:White;"><span class="glyphicon glyphicon-star-empty"></span> View Events </a></li>
					<li><a href="ViewTransactions.php" style="color:White;"><span class="glyphicon glyphicon-euro"></span> View Transactions </a></li>
					<li><a href="addvenue.php" style="color:White;"><span class="glyphicon glyphicon-plus-sign"></span> Add Venue </a></li>
					<li><a href="viewVenuelist.php" style="color:White;"><span class="glyphicon glyphicon-eye-open"></span> View Venue </a></li>
					<li><a href="signout.php" style="color:White;"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
				</ul>
			</div>
			
		</div>
		</header>
	<section style="min-height:550px;margin-left:0px;margin-right:0px;">
		<img src="image/viewevent.jpg" alt="Picture" class="img-responsive" style="width:100%;height:550px;" />
		<!--
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-lg-6">
					<center>
						<a href="ViewCustomers.php"><img src="image/viewcust.jpg" alt="Picture" class="img-responsive" style="width:100%;height:450px;margin-top:40px;" />
						<p>View Customers</p></a>
					</center>
				</div>
				<div class="col-lg-4 col-lg-6">
					<center>
						<a href="ViewEvents.php"><img src="image/viewevent.jpg" alt="Picture" class="img-responsive" style="width:100%;height:450px;margin-top:40px;" />
						<p>View Events</p></a>
					</center>
				</div>
				<div class="col-lg-4 col-lg-6">
					<center>
						<a href="ViewTransaction.php"><img src="image/loginback.jpg" alt="Picture" class="img-responsive" style="width:100%;height:450px;margin-top:40px;" />
						<p>View Transaction</p></a>
					</center>
				</div>
			</div>
		</div>
		-->
	</section>
	<footer>
	<div style="min-height:55px;background-color:#9400D3;text-align:center;font-size:15px;color:#FFF;padding-top:15px;">
			&copy; Event Management System. All Rights Reserved 
		</div>
	</footer>
	</body>
</html>