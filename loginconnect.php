<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['login'])) {
	$email = stripslashes($_REQUEST['email']);
	$password = stripslashes($_REQUEST['password']);
	
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE email='$email' and password ='$password'";
		$result = mysqli_query($conn,$query);
		$rows = mysqli_num_rows($result);
        
        if($rows==1){
			$_SESSION['email'] = $email;
			header("Location:message/"); // Redirect user to index.php
            }else{
				echo "<script type=\"text/javascript\">".
        "alert('incorrect login details');".
        "</script>";
        	header("refresh:1 login.php?Login_Failed");
				}
    }
?>
