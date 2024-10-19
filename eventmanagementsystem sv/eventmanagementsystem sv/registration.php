<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST['name'];
	$Phone=$_POST['pno'];
	$email=$_POST['email'];
	$address=$_POST['tarea'];
	$password=$_POST['pass'];
	

	$query="INSERT INTO customer(CustomerName, PhoneNo, EmailID, Address, Password) VALUES ('$name','$Phone','$email','$address','$password')";
	//echo $query;
	mysqli_query($db,$query);
	echo "<script>alert ('Thank you for Registering') </script>";
	echo "<script> window.location='registration.html'</script>";
}

?>