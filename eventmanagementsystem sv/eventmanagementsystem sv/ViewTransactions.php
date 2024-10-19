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
			<div class="row">
				<div class="col-lg-6 col-lg-12">
					<img src="image/viewtrans.jpg" alt="Picture" class="img-responsive" style="width:100%;height:490px;margin-top:20px;" />
				</div>
				<div class="col-lg-6 col-lg-12">
					<div class="table-responsive">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">View Transactions</h3>
							</div>
							<div class="box-body">
								<table id="example2" class="table table-bordered table-striped">
									<thead>
										<tr class="success">
											<th>S.N.</th>
											<th>User Name</th>											
											<th>Venue</th>											
											<th>Amount</th>
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
											<td><?php echo $d['VenueName']; ?></td>
											<td><?php echo $d['Payment']; ?></td>
											<td><?php echo $d['Status']; ?></td>					
										</tr>
										<?php } ?>										
									</tbody>
								</table>
							</div>
						</div>
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