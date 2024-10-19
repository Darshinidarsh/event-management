<?php
include 'db.php';
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$VN = $_POST['venueName']; 
		$Address = $_POST['Address'];
		$VPlace = $_POST['VPlace'];
		$VPhone = $_POST['VPhone'];
		$capacity = $_POST['capacity'];
		$preferred = $_POST['preferred'];
		$cost = $_POST['cost'];		
			
	//posted image
	$upload_file=$_FILES['venueImg']['name'];
			$imagetmp=$_FILES["venueImg"]["tmp_name"];
			$target="images/".$upload_file;
			move_uploaded_file($imagetmp,$target);
			
			
            $query = "INSERT INTO venue(VenueName, VenueAddress,VenuePlace, VenuePhone, Capacity, Preferred, Amount, Image) VALUES ('$VN', '$Address','$VPlace', '$VPhone', '$capacity', '$preferred', '$cost', '$upload_file')";
           mysqli_query($db,$query);
            echo "<script> alert('Added successfully')</script>";
     
	echo "<script>window.location='viewVenuelist.php';</script>";
	}
?>