<?php
session_start();
require '../dbcon.php';

$surname = $_POST["surname"];
$fname = $_POST["fname"];
$mname =$_POST["mname"];
$gen = $_POST["gen"];
$birth =$_POST["birth"];
$religion = $_POST["religion"];
$email = $_POST["email"];
$father = $_POST["father"];
$mother = $_POST["mother"];
$kin = $_POST["kin"];
$digit = $_POST["digit"];
$mnumber = $_POST["mnumber"];
$knumber = $_POST["knumber"];
$numb = $_POST["numb"];
$class = $_POST["class"];
$course = $_POST["course"];
$address = $_POST["address"];
$state = $_POST["state"];
$nation = $_POST["nation"];
$password = $_POST["password"];
$pass = $_POST["pass"];

for($i=0; ;$i++){
	$regnumber = mt_rand(1,10000000000);
	if(strlen($regnumber) == 10){
		break;
	}
}


$filetoupload = $_FILES["pix"]["name"];
$target_dir = "upload/";
$target_file = $target_dir . $filetoupload;
$filetouploadsize= $_FILES["pix"]["size"];
$filetouploadtype= $_FILES["pix"]["type"];
$tmp = $_FILES["pix"]["tmp_name"];

if ($password != $pass) {
	echo "<h1 color='white'>password does not match</h1>";
	include 'reg.php';
}

else {
	$pixmove = move_uploaded_file($tmp, $target_file);

		$save = mysqli_query($con, "INSERT into student (surname, fname, mname, gen, birth, religion, email, father, mother, kin, digit, mnumber, knumber, numb, class, course, address, state, nation, password, regnumber, upload) VALUES ('$surname', '$fname', '$mname', '$gen', '$birth', '$religion', '$email', '$father', '$mother', '$kin', '$digit', '$mnumber', '$knumber', '$numb', '$class', '$course', '$address', '$state', '$nation', '$password', '$regnumber', '$filetoupload')" );
	}
	echo mysqli_error($con);
			
			if ($save) {
				 $_SESSION['regnumber']=$regnumber;
				 echo "This is your Registration number  $regnumber ";
				header("location:login.php");
				}

			else{
				header("location:reg.php");
				}	
			

?>