<?php
	include 'db.php';
	
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		
		
		$uname=$_POST['uname'];
		$password=$_POST['password'];

		$q="select * from customer where EmailID='$uname' AND Password='$password'";
	
		$result=mysqli_query($db,$q);
		$num=mysqli_fetch_array($result);
	if($num > 0 )
	{
		
		$_SESSION['CustomerName']=$num['CustomerName'];
				
		/*if($usn==$num['USN'] && $now>= $later)
		{
		echo "<script>alert('Sorry You cannot Login')</script>";
		 echo "<script>window.location='student.html'</script>";
		}else{*/
			echo "<script>alert('Login successfully')</script>";
			echo "<script>window.location='BookEvent.php'</script>";
		//}
	}
	else
	{
	   echo "<script>alert('Your not registered')</script>";
	   echo "<script>window.location='userlogin.html'</script>";		
	}
	}
?>