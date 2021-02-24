<?php
session_start(); 
include '../dbcon.php';
require '../connect.php';
include 'dashboard.php';

$student_id=$_SESSION['student_id'];

$surname = $_SESSION['surname'];

$fname = $_SESSION['fname'];

$mname = $_SESSION['mname'];

$regnumber = $_SESSION['regnumber'];

$upload = $_SESSION['upload'];

?>

<link rel="stylesheet" type="text/css" href="profile.css">

<div class="main">
	<div class="container">
		<div class="card" style="border-radius: 10px; box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.9);height: 100%">

				<h2 class="card-header">Profile</h2><br>

				<div class="row container">

					<div class="col-md-6">
					
						<div>
							<?php echo  "<img src='upload/".$_SESSION['upload']."' style='width:400px; height:400px; border-radius:100%'>"; ?>
						</div>
					<br><br>
						<input type="file" name="" value="Change Profile">
					</div>

						<div class="col-md-6">
						<form action="update.php" method="post">
						
							<input type="hidden" name="student_id" value=<?php echo $student_id;?>>

							<label>Surname</label>
					  		<input type="text" name="surname" class="form-control" value=<?php echo $surname;?>> 
					  		<br> 

							<label>Firstname</label>	
					  		<input type="text" name="fname" class="form-control" value=<?php echo $fname; ?>> <br>

					  		<label>Middlename</label>	
					  		<input type="text" name="mname" class="form-control" value=<?php echo $mname; ?>> <br>

					  		<!-- <label>Username</label>
					  		<input type="text" name="user" readonly class="form-control" value=<?php echo $user; ?>> 
					  		<br> -->

					  		<label>Registration Number</label>
					  		<input type="text" name="regnumber" readonly class="form-control" value=<?php echo $regnumber; ?>> <br>	
								</form>
						  </div>
					<?php  echo "<a href='update.php?update=$student_id'>	
					<button class='btn btn-success'> Save</button> "?>

					</div>
						
					<br>
					  	<p class="card-header" style="width: 100%;text-align:center;">Copyright@Customer Compalin</p>
			</div>
		</div>
	</div>