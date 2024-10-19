<html>
	<head>
		<title>Event Management</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="css/bootstrap.css" rel="stylesheet"/>
		<script src="js/JQuery.js"></script>
		<script src="js/bootstrap.js"></script>
		<style type="text/css"></style>
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	if($_SESSION['CustomerName']==true){
			//echo "Welcome"; 
			//echo $_SESSION['email'];
		}else
		{
			echo "<script> window.location = 'userlogin.html'; </script>" ; 
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
					
					<li><a href="" style="color:White;"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['CustomerName'];?> </a></li>
					<li><a href="logout.php" style="color:White;"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
					
				</ul>
			</div>
			
		</div>
		</header>
	<section style="min-height:552px;margin-left:0px;margin-right:0px;">
		<div class="container-fluid">
			<div class="row">
			<form action="Booking.php" method="POST" name="choose">
				<div class="col-lg-4 col-sm-6">
					<div class="panel">
						<div class="panel-body">						
							<h2 style="text-align:center;font-family:Monotype Corsiva;">Book an Event</h2>
							
							<div class="form-group">
								<div class="col-lg-4"><label for="etype">Event Type</label></div>
								<div class="col-lg-8"><select name="EventType" id="EventType" class="form-control">
														<option name="EventType" id="EventType" selected="selected" value="">---Select Type---</option>
														<?php
														
														$query="SELECT DISTINCT Preferred FROM venue ORDER BY Preferred DESC ";
														//echo $query;
														$result = mysqli_query($db, $query);
														while($row = mysqli_fetch_assoc($result))
																	{
																		
																	echo "<option name='EventType' value='".$row['Preferred']."'>".$row['Preferred']."</option>";
																	$_SESSION['Preferred']=$row['Preferred'];
																	
																	}
														
														?>
														</select></div>
							</div><br/><br/>
							<div class="form-group">
								<div class="col-lg-4"><label for="eplace">Event Place</label></div>
								<div class="col-lg-8"><select name="Place" id="Place" class="form-control">
														<option name="Place" selected="selected" value="">---Select Place---</option>
														<?php
														
														$query="SELECT DISTINCT VenuePlace FROM venue ORDER BY VenuePlace DESC ";
														//echo $query;
														$result = mysqli_query($db, $query);
														while($row = mysqli_fetch_assoc($result))
																	{
																		
																	echo "<option name='Place' value='".$row['VenuePlace']."'>".$row['VenuePlace']."</option>";
																	$_SESSION['VenuePlace']=$row['VenuePlace'];
																	
																	}
														
														?>
														</select></div>
							</div><br/><br/>
							<div class="form-group">
								<div class="col-lg-4"><label for="eplace">Venue Name</label></div>
								<div class="col-lg-8"><select name="Venue" id="Venue" class="form-control">
														<option name="Venue" selected="selected" value="">---Select Place---</option>
														<?php
														
														$query="SELECT DISTINCT VenueName FROM venue ORDER BY VenueName DESC ";
														//echo $query;
														$result = mysqli_query($db, $query);
														while($row = mysqli_fetch_assoc($result))
																	{
																		
																	echo "<option name='Venue' value='".$row['VenueName']."'>".$row['VenueName']."</option>";
																	$_SESSION['VenueName']=$row['VenueName'];
																	
																	}
														
														?>
														</select></div>
							</div><br/><br/>
							<div class="form-group">
								<div class="col-lg-4"><label for="ngst">No.of Guest</label></div>
								<div class="col-lg-8"><input type="text" name="nguest" id="nguest" class="form-control" maxlength="4" onchange="validateguest()"/></div>
							</div><br/><br/>
							<div class="form-group">
								<div class="col-lg-4"><label for="dt">Date</label></div>
								<div class="col-lg-8"><input type="text" name="date" id="date" class="form-control" /></div>
							</div><br/><br/>
							
							
						
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="panel">
						<div class="panel-body">
							<h2 style="text-align:center;font-family:Monotype Corsiva;">Equipment</h2>
							<div class="form-group">
								<input type="checkbox" name="Equipment[]" value="DJ"><label> DJ </label><br/>
								<input type="checkbox" name="Equipment[]" value="Stage"><label> Stage </label><br/>
								<input type="checkbox" name="Equipment[]" value="Mike and Speakers"><label> Mike and Speakers	</label>
							</div>
							<h2 style="text-align:center;font-family:Monotype Corsiva;">Food</h2>
							<div class="form-group">
								<input type="checkbox" name="FoodType[]" value="BreakFast"><label> BreakFast </label>
								<input type="checkbox" name="FoodType[]" value="Lunch"><label> Lunch </label>
								<input type="checkbox" name="FoodType[]" value="Tea and Snacks"><label> Tea and Snacks	</label>
								<input type="checkbox" name="FoodType[]" value="Dinner"><label> Dinner	</label>
							</div>
							<div class="form-group">
								<input type="radio" name="food" id="food" value="Veg Only" /><label>Veg Only</label>
								<input type="radio" name="food" id="food" value="Veg & Non-Veg" /><label>Veg & Non-Veg</label>								
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="panel">
						<div class="panel-body">
							<h2 style="text-align:center;font-family:Monotype Corsiva;">Decoration</h2>
							<div class="form-group">
								<input type="checkbox" name="Decoration[]" value="Lighting"><label for="dj"> Lighting </label><br/>
								<input type="checkbox" name="Decoration[]" value="Flower"><label for="Stage"> Flower </label><br/>
								<input type="checkbox" name="Decoration[]" value="Sitting"><label for="MS"> Sitting	</label>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-3 col-sm-12">
										<button name="Submit" value="Submit" class="btn btn-primary" onclick="return validate()">Get Amount</button>
									</div>
										</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</section>
	<script>
		function validate()
		{
			debugger;
			var et=document.getElementById("EventType").value;
			if(et === '')
			{
				alert("Please select Event Type");
				return false;
			}
			
			var ep=document.getElementById("Place").value;
			if(ep === '')
			{
				alert("Please select Event Place");
				return false;
			}
			var vp=document.getElementById("Venue").value;
			if(vp === '')
			{
				alert("Please select Venue");
				return false;
			}
			
			var nogst=document.getElementById('nguest').value;
			var nogstpattern=/^[0-9]*$/;
			if(nogst == null || nogst == '')
			{
				alert("Please Enter No.of Guest");
				return false;
			}
			if(!nogstpattern.test(nogst))
			{
				alert("Invalid Input");
				return false;
			}
			
			var evdate=document.getElementById('date').value;
			var evdatepattern=/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;
			
			if(evdate == null || evdate == '')
			{
				alert("Please Enter Event Date");
				return false;
			}
			if(!evdatepattern.test(evdate))
			{
				alert("Invalid Date Input");
				return false;
			}
		
			if(choose.food.value == '')
			{
				alert("Please select Food type Veg , Non-Veg");
				return false;
			}
		}
		
		
		function validateguest()
		{
			var guestcount = document.getElementById('nguest').value;
        var intRegex = /^[0-9]+$/;
        if (!intRegex.test(guestcount)) {
            alert('Please enter a valid guest count.');
			document.getElementById('nguest').focus();
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