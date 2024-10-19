<?php
	include 'db.php';
	
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		
		$email=$_POST['uname'];
		$pwd=$_POST['pass'];
		
			$query="select * from admin where email='$email' AND pwd='$pwd'";
			$result=mysqli_query($db,$query);
		$num=mysqli_fetch_array($result);
	if($num > 0 )
	{
		
		$_SESSION['email']=$num['email'];
				
		/*if($email==$num['email'] && $now>= $later)
		{
		echo "<script>alert('Sorry You cannot Login')</script>";
		 echo "<script>window.location='adminlogin.html'</script>";
		}else{*/
			echo "<script>alert('Login successfully')</script>";
			echo "<script>window.location='adminhome.php'</script>";
		}
	}
	else
	{
	   echo "<script>alert('Your not registered')</script>";
	   echo "<script>window.location='adminlogin.html'</script>";		
	}
	//}
	
	
		
	
?>