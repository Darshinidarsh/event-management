    <?php  
    /** 
     * Created by PhpStorm. 
     * User: Ehtesham Mehmood 
     * Date: 11/21/2014 
     * Time: 2:46 AM 
     */  
    
	//if(isset($_GET['logout']))
	//{
		session_start();//session is a way to store information (in variables) to be used across multiple pages.  
		session_destroy();
		echo "<script> window.location = 'userlogin.html' ; </script>" ;//use for the redirection to some page 
		
	//}

?>  
