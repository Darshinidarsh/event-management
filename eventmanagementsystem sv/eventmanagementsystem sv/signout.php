    <?php  
    
	//if(isset($_GET['logout']))
	//{
		session_start();//session is a way to store information (in variables) to be used across multiple pages.  
		session_destroy();
		echo "<script> window.location = 'adminlogin.html' ; </script>" ;//use for the redirection to some page 
		
	//}

?>  
