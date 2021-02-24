<?php 
include '../connect.php'; 
// include '../dbcon.php';  
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <style type="text/css">
   body{
        color: black;
    }
    .container-fluid{
        margin-top: 70px
    }
        .card{
            width: 50%;
            box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.5);
            height: 70vh;
            border-radius: 0.5em;

        }
         #bem {
          background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("images/57.jpg");
          height: 70vh;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          position: relative;
          padding-top: 2em;
          width: 100%;
        }

       .text-over-img{
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        padding-top: 3em;

        }
        .form-control{
          border-radius: 0.5em
        }

        .forgot-password {
         text-align: left;
         float:left; ;
         font-weight: bold;
        }

      .forgot-password a {
          color: #438BFF;
          /*opacity: 0.6;*/
      }

      .forgot-password a:hover {
          opacity: 1;
      }
      label{
        float: left;
      }

        h1 {
        color: white;
        text-shadow: 2px 2px 4px #000000 ! important;
        }

       h3 {
      color: white;
      text-shadow: 2px 2px 4px #000000 ! important;
      }

       h2 {
      color: white;
      text-shadow: 2px 2px 4px #000000 ! important;
      }

      .control{
       width: 130px;
       border-radius: 80%;
       margin-top: 1.5em;
       -webkit-animation: mover 4s infinite  alternate;
       animation: mover 1s infinite  alternate;

        }

        @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }

      @media (max-width: 1300px) {
    .card{
            width: 95%;
            box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.5);
            height: 100%;
            border-radius: 0.5em;

        }
         .container-fluid{
        margin-top: 20px
        }
        label{
          padding-left: 2em;
        }
        .form-control{
          margin-left: 1em;
        }
    }




    </style>
</head>
<body>

      <center>
        <div class="card container-fluid" >
              <form method="post" action="loginstaffs.php">
               


          <!-- <div class="card"> -->
            <div class="row">
                <div class="col-md-6" id="bem">
                    <div class="card-text" >
                        <h1 style="color: DodgerBlue;">KQIBA</h1>
                        <img src="images/p.png" class="control">
                        <h2 class="text-over-img" style="color: white">Welcome <span style="color: dodgerblue">Back!</span></h2>    
                    </div>              
                </div>

                <div class="col-md-6" style="margin-top: 30px;padding-right: 2em;">
                   <?php 
                // session_start();                                                             

                if (isset($_SESSION['error'])) {
                  ?>
                    <div class="alert alert-danger">
                      <strong>Incorrect Name or Password</strong>
                    </div>
                    <?php
                    unset($_SESSION['error']);
                  }
                    ?>
                    <div>
                    <h3>STAFF <span style="color: dodgerblue"> LOGIN</span></h3><br>
                         <label for="fname"><b>Firstname</b></label><br>
                             <input type="text" placeholder="Enter email" name="fname" required class="form-control" maxlength=""/><br>

                       <label for="password"><b>Password</b></label>
                          <input type="password" placeholder="Input password" name="password" required class="form-control" maxlength="12"/><br>

                           <label class="forgot-password"><a href="#">Forgot Password ?<a></label><br><br> 

                          

                </div>
                   <input type="submit" name="" value="Login" class="btn btn-primary" style="float: left;">
            </div>
        </div>
      </form>
    </div>
  </center>




 <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>
</html>
