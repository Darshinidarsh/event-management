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
			<div class="navbar" style="margin-bottom:0px;background-color:#9400D3;">
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
		</div>
		</div>
		</header>
	<section style="min-height:552px;margin-left:0px;margin-right:0px;">
		<div class="container-fluid">
			<div class="row">
								
				<div class="col-lg-6 col-sm-12">
					<img src="image/pay.png" alt="" style="width:100%;margin-top:20px;height:510px;" class="img-responsive" />
				</div>
				<div class="col-lg-6 col-sm-12">
					<h2 align="center">Make Payment Through</h2>				
				<h4 align="center">Maestro Card / Debit Card / Credit Card</h4>
					<form action="Paymentprocess.php" method="POST">
						<div class="form-group">
							<div class="col-lg-4"><label for="cn">Card No</label></div>
							<div class="col-lg-8"><input type="text" name="cnum" id="cnum" class="form-control" placeholder="Enter Card No" /></div>
						</div><br/><br/><br/>
						<div class="form-group">
							<div class="col-lg-4"><label for="cvvn">CVV No</label></div>
							<div class="col-lg-8"><input type="text" name="cvv" id="cvv" class="form-control" placeholder="Enter CVV No" /></div>
						</div><br/><br/>
						<div class="form-group">
							<div class="col-lg-4"><label for="name">Card Holder</label></div>
							<div class="col-lg-8"><input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" /></div>
						</div><br/><br/>
						<div class="form-group">
							<div class="col-lg-4"><label for="vt">Valid Through</label></div>
							<div class="col-lg-8"><input type="text" name="valid" id="valid" class="form-control" placeholder="Valid From" /></div>
						</div><br/><br/>
						<div class="form-group">
							<div class="col-lg-4"><label for="vupto">Valid Upto</label></div>
							<div class="col-lg-8"><input type="text" name="expire" id="expire" class="form-control" placeholder="Expire On" /></div>
						</div><br/><br/>
						<div class="form-group">
							<div class="col-lg-4"><label for="amt">Total Amount</label></div>
							<?php
	$id = $_GET['id'];
	
	$result = mysqli_query($db, "SELECT * FROM booking WHERE id='$id' ");
	while($res = mysqli_fetch_array($result))

{
   $payment =$res['Payment'];
   //echo $payment;
}
?>
							<div class="col-lg-8"><input type="text" name="amount" id="amt" class="form-control" readonly value="<?php echo $payment ;?>"/>
							</div>
						</div><br/><br/>
						<div class="form-group">
							<center>
								<button type="Reset" name="Reset" value="Reset" class="btn btn-primary">Cancel</button>
								<button type="Submit" name="Submit" value="Submit" class="btn btn-primary" onclick="return validate()"><input type="hidden" value="<?php echo $_GET['id'];?>">Pay</button>
							</center>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<script>
		function validate()
		{
			//debugger;
			var cn=document.getElementById('cnum').value;
			var cnpattern=/^[0-9]{16}*/;
			if(cn == null || cn == '')
			{
				alert("Please Enter Card Number");
				return false;				
			}
			
			if(!cnpattern.test(cn))
			{
				alert("Invalid Number");
				return false;
			}
			
			var cv=document.getElementById('cvv').value;
			var cvpattern=/^[0-9]{4}$/;
			if(cv == null || cv == '')
			{
				alert("Please Enter Card CVV Number");
				return false;				
			}
			
			if(!cvpattern.test(cv))
			{
				alert("Invalid CVV Number");
				return false;
			}
			
			var cname=document.getElementById('name').value;
			var cnpattern=/^[a-zA-Z ]*/;
			if(cname == null || cname == '')
			{
				alert("Please Enter Card Holder Name");
				return false;				
			}
			
			if(!cnpattern.test(cname))
			{
				alert("Invalid Name");
				return false;
			}
			
			var sdate=document.getElementById('valid').value;
			var sdatepattern=/^[0-9]{2}\/[0-9]{2}$/; 
			if(sdate == null || sdate == '')
			{
				alert("Please Enter Valid From");
				return false;				
			}
			
			if(!sdatepattern.test(sdate))
			{
				alert("Invalid Date");
				return false;
			}
			
			var edate=document.getElementById('expire').value;
			var edatepattern=/^[0-9]{2}\/[0-9]{2}$/; 
			if(edate == null || edate == '')
			{
				alert("Please Enter Valid Upto");
				return false;				
			}
			
			if(!edatepattern.test(edate))
			{
				alert("Invalid Date");
				return false;
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