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
	include 'db.php';	
	
	if($_SESSION['email']==true){
			//echo "Welcome"; 
			//echo $_SESSION['email'];
		}else
		{
			echo "<script> window.location = 'adminlogin.html'; </script>" ; 
		}
		$query="select * from booking";
		$result=mysqli_query($db,$query);
		
		//$result=$db->readsql($query);
		$data=[];
		
		if($result->num_rows>0){
	while($d = $result->fetch_assoc()){
		array_push($data,$d);
	}
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
	<section style="min-height:552px;margin-left:0px;margin-right:0px;">
		<div class="container-fluid">
					<div class="table-responsive">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">View Events</h3>
							</div>
							<div class="box-body">
								<table id="example2" class="table table-bordered table-striped">
									<thead>
										<tr class="success">
											<th>S.N.</th>
											<th>Name</th>											
											<th>Event Type</th>											
											<th>Place</th>
											<th>Guest</th>
											<th>Date</th>
											<th>Equipment</th>
											<th>Food Type</th>
											<th>Food</th>
											<th>Decoration</th>
											<th>Payment</th>
											<th>Action</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
									<?php
										$i = 1;
										foreach ($data as $d) {
									?>
										<tr>
											<td><?php echo $i++; ?></td>
											<td><?php echo $d['CName']; ?></td>
											<td><?php echo $d['EventType']; ?></td>
											<td><?php echo $d['Place']; ?></td>
											<td><?php echo $d['Guest']; ?></td>
											<td><?php echo $d['Date']; ?></td>
											<td><?php echo $d['Equipment']; ?></td>
											<td><?php echo $d['FoodType']; ?></td>
											<td><?php echo $d['Food']; ?></td>
											<td><?php echo $d['Decoration']; ?></td>
											<td><?php echo $d['Payment']; ?></td>
											<td><a href="delete.php?id=<?php echo $d['id']; ?>" onClick="return confirm('Are Sure You Want to Delete The User ?')"><img src="image/delete.svg" alt="" style="height:30px;" /></a></td>
											<td><form action="pending.php" method="POST"><button name="pending"><input type="hidden" value="<?php echo $_SESSION['id']=$d['id']; ?>"><?php echo $d['Status']; ?></button></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
		</div>		
	</section>
	<footer>
	<div style="min-height:55px;background-color:#9400D3;text-align:center;font-size:15px;color:#FFF;padding-top:15px;">
			&copy; Event Management System. All Rights Reserved 
		</div>
	</footer>
	</body>
</html>