<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$cno=$_POST["cnum"];
	$cvv=$_POST["cvv"];
	$cname=$_POST["name"];
	$amount=$_POST["amount"];
	
		$query="select * from card where CardNo='$cno' and CvvNo='$cvv' and CardHolder='$cname'";
		
		$result=mysqli_query($db,$query);
		
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		
		if($count>0)
		{
			echo "<script>
		alert('Payment Done !!');
		window.location='viewbooking.php';
		</script>";
		}
		else
		{
			echo "<script>
			alert('Invalid card details');
			window.location='viewbooking.php';
		
		</script>";
	
	//window.location='viewbooking.php';
	
}
}
?>