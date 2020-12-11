<?php 
echo "Hi";
	//Even Before Destroying the session we have to start it
	session_start();

	if(session_destroy()) //Here we are destroying all the session
	{
		header("Location:newform.php"); // Here we are redirecting to LOgIn page again
	}
?>