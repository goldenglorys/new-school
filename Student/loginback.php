<?php 
require '../dbcon.php';
session_start();

		$regnumber = $_POST["regnumber"];
		$password = $_POST["password"];

		$save= mysqli_query($con, "SELECT * FROM student WHERE regnumber='$regnumber' AND password='$password'");

		$result=mysqli_num_rows($save);

		if ($result > 0) {
		  $k = mysqli_fetch_assoc($save);

		  $_SESSION['student_id']=$k['student_id'];

		  $_SESSION['surname']=$k['surname']; $_SESSION['fname']=$k['fname'];

		  $_SESSION['mname']=$k['mname'];

		  // $_SESSION['mname'] = $k['mname'];

		  $_SESSION['upload'] = $k['upload'];

		  $_SESSION['email']=$k['email'];

		 
		  $_SESSION['regnumber']=$k['regnumber'];

		  
		  header("location:dashboard.php");
			
		}
		else
		{
			$_SESSION["error"]=true;
		   header("location:login.php");		
	}
 ?>

