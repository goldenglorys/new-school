<?php 
include 'dbcon.php';
$surname = $_POST["surname"];
$fname = $_POST["fname"];
$mname = $_POST["mname"];
$place = $_POST["place"];
$birth = $_POST["birth"];
$gen = $_POST["gen"];
$status = $_POST["status"];
$religion = $_POST["religion"];
$qualify = $_POST["qualify"];
$nation = $_POST["nation"];
$state = $_POST["state"];
$email = $_POST["email"];
$address = $_POST["address"];
$numb = $_POST["numb"];
$password = $_POST["password"];
$pass = $_POST["pass"];



$filetoupload = $_FILES["pix"]["name"];
$target_dir = "pics/";
$target_file = $target_dir . $filetoupload;
$filetouploadsize= $_FILES["pix"]["size"];
$filetouploadtype= $_FILES["pix"]["type"];
$tmp = $_FILES["pix"]["tmp_name"];
// echo "Account Created"." ". $fname."<br/>".$password;


if ($password != $pass) {
	echo "password not match";
	include 'admin.php';
}

// echo "Done";

else{
	$pixmove = move_uploaded_file($tmp, $target_file);
	   
	$save = mysqli_query($con, "INSERT into admin (surname, fname, mname, place, birth, gen, status, religion, qualify, nation, state, email,address,  numb,  password,  pics) VALUES ('$surname', '$fname', '$mname', '$place', '$birth', '$gen','$status','$religion', '$qualify', '$nation', '$state', '$email', '$address', '$numb', '$password', '$filetoupload')");

		echo mysqli_error($con);	

		if ($save) {
		header("location:login.php");
		}
		else{
			include 'admin.php';
		}


	}


 ?>