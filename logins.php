<?php 
require 'dbcon.php';
session_start();

$fname = $_POST["user"];
$password = $_POST["pass"];

$save = mysqli_query($con, "SELECT * from admin where user = '$user' and pass = '$pass'");

// echo mysqli_error($con);
$result= mysqli_num_rows($save);

if ($result > 0) {
	 $k = mysqli_fetch_assoc($save);

 	 $_SESSION['pics'] = $k['pics'];

	 $_SESSION['email']=$k['email'];

   	 $_SESSION['fname']=$k['surname']." ".$k['fname'];

	 header("location:dashboard.php");
	}
	else{
		$_SESSION['error']=true;
	  header("location:login.php");
	}

 ?>
