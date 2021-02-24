<?php
require '../connect.php';
include '../dbcon.php';
session_start();
?>

<link rel="stylesheet" type="text/css" href="login.css">


		<div class="fluid">

			<div class="card">
				<div class="row">
					 <div class="col-md-6">

					 	<div id="demo" class="carousel slide" data-ride="carousel">

						  <!-- Indicators -->
						  <ul class="carousel-indicators">
						    <li data-target="#demo" data-slide-to="0" class="active"></li>
						    <li data-target="#demo" data-slide-to="1"></li>
						    <li data-target="#demo" data-slide-to="2"></li>
						  </ul>
						  
						  <!-- The slideshow -->
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="../images/94.jpg" alt="Los Angeles" width="1100" height="500">
						    </div>
						    <div class="carousel-item">
						      <img src="../images/85.jpg" alt="Chicago" width="1100" height="500">
						    </div>
						    <div class="carousel-item">
						      <img src="../images/74.jpg" alt="New York" width="1100" height="500">
						    </div>
						  </div>
						  
						  <!-- Left and right controls -->
						</div>
					  <div class="caption">
						<center>
							<div class="control">
							      <img src="../images/p.png" style="border-radius: 100px">
							 </div>		
							 <br>				

							  <h2 style="text-align: center;color: white">
						   		<span style="color: dodgerblue">Welcome</span> Back
							  </h2><br><br><br><br>

							 	<a href="reg.php">
				                    	<button class="btn btn-success">Creat Account</button>
				                 </a> 

		                 </center>	
		                </div>               
		             </div>

					<div class="col-md-6">
						<form method="post" action="loginback.php">
						 <div class="Sub">
						   <h2 class="text-center">Student <span style="color: dodgerblue">Login </span></h2>
						   <br>

						 	    <?php 
		                       if( isset($_SESSION['error'])){ 
		                        ?>

		                        <div class="alert alert-danger" style="width: 100%">
		                            <strong>Incorrect Reg Number or Password</strong>
		                        </div>
		                        <?php
		                        unset($_SESSION['error']);
		                    }
		                        ?>
					        <div class="row100">
					          <div class="col">
					            <div class="inputBox">
					              <input type="text" name="regnumber" required>
					              <span class="text"> Registration Number</span>
					              <span class="line"></span>
					            </div>
					          </div>

					           <div class="col">
					             <div class="inputBox">
						              <input type="password" name="password" required>
						              <span class="text">Enter Password</span>
						              <span class="line"></span>
					            </div>
				          </div>
				          <br>

				          <p><a href="#" style="font-size: 1.3em"> Forget Password ?</a></p>

				           <div class="col">
					             <div class="inputBox">
					   		          <input type="submit" value="Login" class="btn  btn-lg">
					            </div>
				          </div>
				      </div>
					</div>
				</form>
				</div>
			 </div>
		  </div>
		</div>