<?php
include 'db.php';
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$EventType=$_POST['EventType'];
		$Place=$_POST['Place'];
		$Venue=$_POST['Venue'];
		$nguest=$_POST['nguest'];
		$date=$_POST['date'];
		$Equipment=implode(',',$_POST['Equipment']);
		//echo $Equipment;
		$FoodType=implode(',',$_POST['FoodType']);
		//echo $FoodType;
		$food=$_POST['food'];
		$Decoration=implode(',',$_POST['Decoration']);
		//echo $Decoration;
		$sql="Select Amount from venue Where VenueName='".$Venue."' ";
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_row($result);
		$row[0];
		
		$query = "INSERT INTO booking( CName,EventType, Place,VenueName, Guest, Date, Equipment, FoodType, Food, Decoration, Payment) VALUES ('".$_SESSION['CustomerName']."','$EventType', '$Place','$Venue','$nguest', '$date', '$Equipment','$FoodType','$food', '$Decoration','$row[0]')";
           //echo $query;
		   mysqli_query($db,$query);
            //echo "<script> alert('Added successfully')</script>";
     
	echo "<script>window.location='viewbooking.php';</script>";
	}
?>