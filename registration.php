<?php 
  

if (isset($_POST['register'])) {


   $user_name = $_POST['username'];
   $email =  $_POST['email'];
   $password= $_POST['password'];

   $conn = mysqli_connect('localhost', 'root','');
   mysqli_select_db($conn, 'shortmessage');
   //Check connection

//<<<<<<<<<<<<<<<<<<<<----START QUERY---<<<<<<<<<<<<<<<<<<<<<<<
    //-------QUERY TO INSERT DATA INTO user TABLE---------

   
  $sql = "INSERT INTO users (idnum, username, email, password) VALUES ('','$user_name', '$email', '$password')";


$result = mysqli_query($conn, $sql);

if (!$result) 
{
    echo "<script type=\"text/javascript\">".
        "alert('Your Registeration was not Successful');".
        "
        </script>";
    header("refresh:.5; url=register.php?Registration_Failed");
}
else 
{
    echo "<script type=\"text/javascript\">".
        "alert('$user_name, you have been Successfully Registered. Please Login to Continue');".
        "
        </script>";
        header("refresh:.5; url=login.php?Registration_Successful");
}

}
?>