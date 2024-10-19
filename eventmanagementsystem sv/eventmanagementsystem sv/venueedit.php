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
$result = mysqli_query($db, "SELECT * FROM venue ORDER BY id DESC"); 
if (isset($_GET['id']))
	{
	$id = $_GET['id'];
	}
$res = mysqli_query($db, "SELECT * FROM venue WHERE id='$id'");

while($result = mysqli_fetch_row($res))

{
   $VN =$result[1];
   $Address = $result[2];
   $VPlace =$result[3];
   $VPhone =$result[4];
   $capacity = $result[5];
   $preferred = $result[6];
   $cost =$result[7];
   $upload_file = $result[8];
    
}

if (isset($_POST['update'])) {
   
	$VN = $_POST['venueName']; 
		$Address = $_POST['Address'];
		$VPlace = $_POST['VPlace'];
		$VPhone = $_POST['VPhone'];
		$capacity = $_POST['capacity'];
		$preferred = $_POST['preferred'];
		$cost = $_POST['cost'];		
			
 	if($_FILES['venueImg']['name']!='')
	{	

		$upload_file=$_FILES['venueImg']['name'];
			$imagetmp=$_FILES["venueImg"]["tmp_name"];
			$target="images/".$upload_file;
			move_uploaded_file($imagetmp,$target);
	}
	
  	
    $sql = "UPDATE venue SET VenueName='$VN',VenueAddress='$Address',VenuePhone='$VPlace',VenuePhone='$VPhone',Capacity='$capacity',Preferred='$preferred',Amount='$cost',Image='$upload_file' WHERE id='$id'";
//echo $sql;
	$db->query($sql);
	echo "<script> alert('Updated Sucessfully...');</script>";
    echo "<script>window.location='viewVenuelist.php';</script>";
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
	<section style="min-height:548px;margin-left:0px;margin-right:0px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3">
				</div>
				<div class="col-lg-6">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<div class="col-lg-3"><label for="vn">Venue Name</label></div>
							<div class="col-lg-9"><input type="text" name="venueName" value="<?php echo $VN;?>" id="venueName" class="form-control" ></div>
						</div>
						<div class="form-group">
							<div class="col-lg-3"><label for="vn">Venue Address</label></div>
							<div class="col-lg-9"><textarea name="Address" class="form-control" id="Address"><?php echo "$Address"; ?></textarea></div>
						</div>
						<div class="form-group">
							<div class="col-lg-3"><label for="vn">Venue Place</label></div>
							<div class="col-lg-9"><input type="text" name="VPlace" value="<?php echo $VPlace;?>" class="form-control"></div>
						</div>
						<div class="form-group">
							<div class="col-lg-3"><label for="vn">Venue Phone</label></div>
							<div class="col-lg-9"><input type="text" name="VPhone" value="<?php echo $VPhone;?>" class="form-control"></div>
						</div>
						<div class="form-group">
							<div class="col-lg-3"><label for="vn">Capacity</label></div>
							<div class="col-lg-9"><input type="text" name="capacity" value="<?php echo $capacity;?>" class="form-control"></div>
						</div>
						<div class="form-group">
							<div class="col-lg-3"><label for="vn">Preferred for</label></div>
							<div class="col-lg-9"><select name="preferred" class="form-control" id="branch">
													<option selected="selected" value="<?php echo $preferred;?>"  ><?php echo $preferred;?></option>
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
							<div class="col-lg-3"><label for="vn">Cost</label></div>
							<div class="col-lg-9"><input type="text" name="cost" value="<?php echo $cost;?>" class="form-control"></div>
						</div>
						<div class="form-group">
							<div class="col-lg-3"><label for="vn">Image</label></div>
							<div class="col-lg-9"><img id="image_upload" class="img-fluid img-responsive" src="images/<?php echo $upload_file; ?>"  style="width:425px;height:220px;  "/><input type="file" id="image" name="venueImg" onchange="readURL(this);" value="<?php echo $upload_file;?>"></div>
						</div>
						<div class="form-group">
							<center>
									<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
									<input type="submit" name="update" value="Update"  class="btn btn-primary">
							</center>
						</div>
					</form>
				</div>
				<div class="col-lg-3">
				</div>
			</div>
		</div>
	</section>
<script>
									function readURL(input) {
						
										if (input.files && input.files[0]) {
											var reader = new FileReader();

											reader.onload = function (e) {
												$('#image_upload')
													.attr('src', e.target.result);
											};

											reader.readAsDataURL(input.files[0]);
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