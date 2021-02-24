<?php
include 'connect.php'; 
include '../dbcon.php';  

session_start();
$staff_id=$_SESSION['staff_id'];

$email=$_SESSION['email'];
$fname=$_SESSION['fname'];
?>

<link rel="stylesheet" type="text/css" href="dashboard.css">

<input type="checkbox" id="check">

<header>

  <label for="check">
    <i class="fa fa-bars" id="sidebar_btn"></i>
  </label>
  <div class="left_area">
    <h3>Staff <span> Dashboard</span></h3>
  </div>

  <div class="right_area">
    <a href="#" class="logout_btn btn btn-primary">Logout</a>
  </div>
</header>

<div class="sidebar">
  <center>
    
    <?php  echo  "<img src='uploads/".$_SESSION['uploads']."' class='profile_image'>" ?> 


    <h4>
          <?php echo " <span style='color: white;'>$fname</span>";?>

    </h4>
  </center>

  <ul class="list-group">
    <li>
        <a href="#"><i class="fa fa-desktop"></i><span>Dashboard</span></a>
    </li>

    <li>
        <a href="save.php"><i class="fa fa-edit"></i><span>Input Result</span></a>
    </li>

    <li>
      <div class="dropdown dropright">
      <button class="dropdown-toggle" data-toggle="dropdown">
          <span style="padding-right: 50px">Check Student</span>
        </button>
        <div class="dropdown-menu" style="background: #2F323A">
          <a class="dropdown-item" href="#">Jss 1</a>
          <a class="dropdown-item" href="jss2.php">Jss 2</a>
          <a class="dropdown-item" href="#">Jss 3</a>
          <a class="dropdown-item" href="#">Sss 1</a>
          <a class="dropdown-item" href="Sss class/Sss 2.php">Sss 2</a>
          <a class="dropdown-item" href="Sss class/Sss 3.php">Sss 3</a>

        </div>
      </div>
    </li>

    <li>
        <a href="otherstaffs.php"><i class="fa fa-users"></i><span>Other Staffs</span></a>
    </li>

    <li>
        <a href="change.php"><i class="fa fa-users"></i><span>Check Students</span></a>
    </li>

    <li>
    <?php echo"<a href='update.php?update=$staff_id' class='wow bounceIn' data-wow-duration='3s'>
        <i class='fa fa-user'></i><span>Profile</span>
      </a>"
      ?>
      </li>

    <li>
        <a href="#"><i class="fa fa-th"></i><span>Mark Attendance</span></a>
    </li>

  </ul>




 




  <!--   <a href="#"><i class="fa fa-info-circle"></i><span>Check In</span></a>
    <a href="#"><i class="fa fa-sliders-h"></i><span>Settings</span></a> -->
</div>

<div class="content">
  <h2>Welcome Back</h2>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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

