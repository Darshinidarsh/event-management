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
	<?php include 'db.php';
	
	if($_SESSION['email']==true){
			//echo "Welcome"; 
			//echo $_SESSION['email'];
		}else
		{
			echo "<script> window.location = 'adminlogin.html'; </script>" ; 
		}?>
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
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<img src="image/add.jpg" alt="" style="width:100%;margin-top:20px;height:500px;" class="img-responsive" />
				</div>
				<div class="col-lg-6">
					<form action="addvenuelist.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<div class="col-lg-3"><label for="vn">Venue Name</label></div>
							<div class="col-lg-9"><input type="text" name="venueName" id="venuName" class="form-control" onchange="validatename()" /></div>
						</div>
						<div class="form-group">
							<div class="col-lg-3"><label for="va">Venue Address</label></div>
							<div class="col-lg-9"><textarea name="Address" id="Address" class="form-control"></textarea></div>
						</div>
						<div class="form-group">
							<div class="col-lg-3"><label for="vp">Venue Place</label></div>
							<div class="col-lg-9"><input type="text" name="VPlace" id="VPlace" class="form-control" /></div>
						</div>
						<div class="form-group">
							<div class="col-lg-3"><label for="vph">Venue Phone</label></div>
							<div class="col-lg-9"><input type="text" name="VPhone" id="VPhone" class="form-control" /></div>
						</div>
						<div class="form-group">
							<div class="col-lg-3"><label for="c">Capacity</label></div>
							<div class="col-lg-9"><input type="text" name="capacity" id="capacity" class="form-control" /></div>
						</div>
						<div class="form-group">
							<div class="col-lg-3"><label for="v">Preferred for</label></div>
							<div class="col-lg-9"><select name="preferred" class="form-control" id="branch">
													<option value="">---Select---</option>
													<option value="All">All</option>
													<option value="Marriage">Marriage</option>
													<option value="Family Family">Family Function</option>
													<option value="Birthday Party">Birthday Party</option>
													<option value="Anniversary Party">Anniversary</option>
													<option value="Farewell Party">Farewell Party</option>
													<option value="College Events">College Events</option>
													</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-3"><label for="cst">Cost</label></div>
							<div class="col-lg-9"><input type="text" name="cost" id="cost" class="form-control"></div>
						</div>
						<div class="form-group">
							<div class="col-lg-3"><label for="v">Image</label></div>
							<div class="col-lg-9"><img id="image_upload" class="img-fluid img-responsive" src="image/fff.jpg"  style="width:300px; height:180px;  "/> <input type="file" id="image" name="venueImg"></div>
						</div>
						<div class="form-group">
							<center>
								<input type="submit"  name="submit" id="submitvalue" value="ADD" class="btn btn-primary"/> 
							</center>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</section>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image_upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image").change(function () {
        readURL(this);
    });
	
	function validatename()
		{
			var venuName = document.getElementById('venuName').value;
        var intRegex = /^[a-zA-Z ]+$/;
        if (!intRegex.test(venuName)) {
            alert('Please enter a valid venuName.');
			document.getElementById('venuName').focus();
        }
		}
</script>

	<footer>
	<div style="min-height:55px;background-color:#9400D3;text-align:center;font-size:15px;color:#FFF;padding-top:15px;">
			&copy; Event Management System. All Rights Reserved 
		</div>
	</footer>
	</body>
</html>