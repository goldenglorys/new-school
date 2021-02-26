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
    <img src="../images/p.png" class="logo">
    <h3>Staff <span> Dashboard</span></h3>
  </div>

  <div class="right_area">
    <i class="fa fa-bell" style="color: white;" id="jj">
      <sup style="background:#F2990D;">1</sup>
    </i>

    <i class="fa fa-envelope" style="color: white;">
       <sup style="background:red;"> 3 </sup>
    </i>
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
        <a href="information.php"><i class="fa fa-edit"></i><span>Activities </span></a>
    </li>

    <li>
        <a href="save.php"><i class="fa fa-edit"></i><span>Input Result</span></a>
    </li>

<!--     <li>
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
    </li> -->

    <li>
        <a href="messages.php"><i class="fa fa-envelope"></i><span>Messages</span></a>
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




</div>

<div class="content">
  <!-- <h2>Welcome Back <?php echo "$fname";?></h2> -->

  <div class="row">
    <div class="col-md-6">
      <div class="card" style="border-bottom-right-radius: 8em;border-top-left-radius: 8em;">
        <div class="row">
          <div class="col-md-6">
            <i class="fa fa-users fa-4x" style="padding:0.8em;color: white"></i>
          </div>

          <div class="col-md-6">
            <h4>Total Number of Staffs</h4>
          </div>
        </div>
      </div>
    </div>

     <div class="col-md-6">
      <div class="card" style="border-bottom-left-radius: 8em;border-top-left-radius: 8em">
        <div class="row">
          <div class="col-md-6">
            <i class="fa fa-graduation-cap fa-4x" style="padding:0.8em;background: transparent;color: #F39C13"></i>
          </div>

          <div class="col-md-6">
            <h4>Total Number of Students</h4>
          </div>
        </div>
      </div>
    </div>

      <div class="col-md-6">
      <div class="card" style="border-bottom-left-radius: 8em;border-top-left-radius: 8em">
        <div class="row">
          <div class="col-md-6">
            <i class="fa fa-book fa-4x" style="padding:0.8em;color: white"></i>
          </div>

          <div class="col-md-6">
            <h4>Total Number of Subects</h4>
          </div>
        </div>
      </div>
    </div>

     <div class="col-md-6">
      <div class="card" style="border-bottom-left-radius: 8em;border-top-left-radius: 8em">
        <div class="row">
          <div class="col-md-6">
            <i class="fa fa-envelope fa-4x" style="padding:0.8em;color: white"></i>
          </div>

          <div class="col-md-6">
            <h4>Total Number of Messages</h4>
          </div>
        </div>
      </div>
    </div>
  </div>




















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

