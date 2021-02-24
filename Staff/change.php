<title>Student</title>

<?php 
include 'connect.php';
require '../dbcon.php';

session_start();
$fname=$_SESSION['fname'];
if (isset($fname))
 {

 	echo $fname;
 	$result=mysqli_query($con, "SELECT student_id,surname,fname,mname,email,gen,birth,nation,class,upload from student ORDER BY fname");
 	$row=mysqli_num_rows($result);
	echo "<div class='container'>";
	echo "<h3> </br>Welcome to Admin Panel</h3>";
	echo "Total Register users : ".$row;
	echo "<a href='stafflogout.php' <button class='btn btn-primary' style='float:right;margin-left:150px;'>Logout</button></a>";
	echo "</br></br>";
	echo "<table class ='table table-responsive table-striped table-bordered'";
	echo "<tr align='center'>";
	echo "<th>S.no</th>";
    echo "<th>Surname</th>";
	echo "<th>Firstname</th>";
	echo "<th>Middlename</th>";
	echo "<th>Email</th>";
	echo "<th>D O B</th>";
    echo "<th>Nationality</th>";
     echo "<th>Gender</th>";
    echo "<th>Class</th>";
	echo "<th>Profile</th>";
	echo "<th>Delete User</th>";
	echo "<th>Edit</th>";
	echo "</tr>";
	$i=0;
	while ($retrive=mysqli_fetch_array($result)) {

		$student_id=$retrive['student_id'];
        $surname=$retrive['surname'];
		$fname=$retrive['fname'];
		$mname=$retrive['mname'];
		$email=$retrive['email'];
		$birth=$retrive['birth'];
        $nation=$retrive['nation'];
        $gen=$retrive['gen'];
        $class=$retrive['class'];
		$upload=$retrive['upload'];
		echo "<tr align='center'>";
		echo "<th>".$i=$i+1;"</th>";
        echo "<th>$surname</th>";
		echo "<th>$fname</th>";
		echo "<th>$mname</th>";
		echo "<th>$email</th>";
		echo "<th>$birth</th>";
        echo "<th>$nation</th>";
        echo "<th>$gen</th>";
        echo "<th>$class</th>";
		echo "<th><img src='../Student/upload/$upload' height='100px' width='100px'></th>";
		echo "<th><a href='deletestudent.php?del=$student_id'> <button class='btn btn-danger'>Delete </button></a></th>";
		echo "<th><a href='admin.php?update=$student_id'> <button class='btn btn-success' id='myBtn'>Edit</button></a></th>";
		echo "</tr>";

	}
	echo "</table>";
    echo "</div>";
}
else
{
	header("location:logstaff.php");	
}




 ?>

 