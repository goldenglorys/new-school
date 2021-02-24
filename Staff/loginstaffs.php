<?php 
require 'dbcon.php';
session_start();

$fname = $_POST["fname"];
$password = $_POST["password"];

$save = mysqli_query($con, "SELECT * from staff where fname = '$fname' and password = '$password'");

// echo mysqli_error($con);
$result= mysqli_num_rows($save);

if ($result > 0) {
	 $k = mysqli_fetch_assoc($save);

	 $_SESSION['staff_id'] = $k['staff_id'];

 	 $_SESSION['uploads'] = $k['uploads'];

	 $_SESSION['email']=$k['email'];

   	 $_SESSION['fname']=$k['surname']." ".$k['fname'];

	 header("location:dashboard.php");
	}
	else{
		$_SESSION['error']=true;
	  header("location:login.php");
	}

 ?>
