<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		
$query="UPDATE booking SET Status='Accepted' WHERE id='".$_SESSION['id']."'  ";

echo $query;
mysqli_query($db,$query);	 
echo"<script>alert('Successfully Accepted the Amount')</script>";
echo"<script>window.location='ViewEvents.php'</script>";
	}
?>