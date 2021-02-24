<?php
session_start();
$email=$_SESSION['email'];

$regnumber =$_SESSION['regnumber'];

$student_id=$_SESSION['student_id'];

$fname=$_SESSION['fname'];

$surname=$_SESSION['surname'];

$mname=$_SESSION['mname'];

$upload = $_SESSION['upload'];

include 'connect.php';
include '../dbcon.php';  
?>
<link rel="stylesheet" type="text/css" href="dashboard.css">

<input type="checkbox" id="check">

<header>

	<label for="check">
		<i class="fa fa-bars" id="sidebar_btn"></i>
	</label>
	<div class="left_area wow flip" data-wow-duration="3s">
		<img src="../images/p.png" class="logo">
		<h3>Student <span> Dashboard</span></h3>
	</div>

 	<div class="right_area">
		<div class="dropdown">
			<button type="button" class="dropdown-toggle" data-toggle="dropdown">
			<?php  echo  "<img src='upload/".$_SESSION['upload']."' class='profile_image'>" ;
			 echo " <span style='color:white;'>$surname"." $fname</span>";?>
		</button>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="#">Link 1</a>
			<a class="dropdown-item" href="#">Link 2</a>
			<a class="dropdown-item" href="logout.php"><i class="fa fa-book"></i> Logout</a>
			</div>
		</div>
	</div> 
</header>

<div class="sidebar">

	<div class="card" style="background: #152736;margin-top: -29px;height: 22vh">
            <div class="text-center">
                <h4><?php echo " <span style='color:white;'>$surname"." $fname</span>";?></h4>
                <p><?php echo " <span style='color:white;'>$email"."</span>";?></p>
            </div>
    				<div class="img2">
    					<?php  echo  "<img src='upload/".$_SESSION['upload']."' class='profile_image'>" ;?>
    				</div>
   				</div>

	<a href="#" class="active wow bounceIn" data-wow-duration="3s">
		<i class="fa fa-desktop"></i><span>Dashboard</span>
	</a>

	<a href="#" class="wow bounceIn" data-wow-duration="3s">
		<i class="fa fa-info-circle"></i><span>Activities / Informations</span>
	</a>

	<a href="result.php" class="wow bounceIn" data-wow-duration="3s">
		<i class="fa fa-book"></i><span>Check Result</span>
	</a>

	<?php echo"<a href='update.php?update=$student_id' class='wow bounceIn' data-wow-duration='3s'>
		<i class='fa fa-user'></i><span>Profile</span>
	</a>"
	?>

	<a href="subjectteacher.php" class="wow bounceIn" data-wow-duration="3s">
		<i class="fa fa-users"></i><span>Subject Teachers</span>
	</a>

	<a href="#" class="wow bounceIn" data-wow-duration="3s">
		<i class="fa fa-sliders-h"></i><span>Subjects</span>
	</a>

	<a href="#" class="wow bounceIn" data-wow-duration="3s">
		<i class="fa fa-info-circle"></i><span>Time-Table</span>
	</a>

</div>

<div class="content">
	<h2 class="text-center" style="background: #152736;color:white;padding: 20px;border-radius: 100px;font-family: serif; ">
		Welcome Back, <?php echo " ". "$fname";?>
	</h2>
	
	













	<label class="switch">
      <input type="checkbox">
     	<span class="slider round" id="change"></span>
    </label>
</div>








<script>
    let color = true
    $(document).ready(function(){
        $("#change").click(function(){
            if(color){
                color = !color
                 $("body").css({"background-color":"#1F2F3E"});
                 $("#sidemenu").css({"background-color":"white","color":"white"});
                  $("nav,a").css({"color":"white"});
            }
            else{
                color = !color
                 $("body, section").css({"background-color":"#808080", "color":"white"});
                  $("#sidemenu").css({"background-color":"#008B8B","color":"white"});
            }
           

        });
    });
</script>

