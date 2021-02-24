<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Staff Registration</title>

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
      width: 100%;
      background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("images/57.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;

    }
    	.card{
        background:transparent;
      box-shadow: 0 7px 8px 0 rgba(0, 0, 0, 0.9);
       width: 60%;
       border-radius: 1em;
       border-left: thin;
       }


        .form-control{
          border-radius: 0.5em
        }
        h1{
          text-align: center;
          text-transform: uppercase;
          letter-spacing: 0.5px;
          margin-top: 0.5em;
          color: white;
        }
        label{
          color: white;
           text-shadow: 2px 2px 4px #000000 ! important;
            font-size: 1.1em;
            padding-top: 1em
        }
        @media (max-width: 1300px)
        {
          .card{
            /*width:100%;*/
              box-shadow: 0 7px 8px 0 rgba(0, 0, 0, 0.9);
              width: 95%;
              border-radius: 7px;
              margin-top: 1em;
              padding-bottom: 3em;
             background: transparent;
          }
        }
    </style>
</head>
<body>
		
		<!-- <center > -->

		<form method="post" action="adminreg.php" enctype="multipart/form-data">
    
			<div class="card container-fluid">
              <h1 class="card-header">Staff Registration</h1>
               <center>
                       <div class="logo" style=" padding-top:1em ">
                            <a href="#">
                                <img src="images/p.png" style="width: 130px;border-radius: 80%;" alt="Admin">
                            </a>
                        </div>
                </center>

            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                       <label for="name"><b>Surname</b></label><br>
              <input type="text" placeholder="Surname" name="surname" required class="form-control">


            <label for="name"><b>Firstname</b></label>
              <input type="text" placeholder="Firstname" name="fname" required class="form-control">


              <label for="name"><b>Middlename</b></label>
              <input type="text" placeholder="Middlename" name="mname" required class="form-control">

               <label><b>Place of Birth</b></label>
              <input type="text" placeholder="Birth Place"  name="place" class="form-control">

              <label for="birth"><b>D O B</b></label><br>
              <input type="date" placeholder="Date of birth" name="birth" required class="form-control">
              
              <label for="Gender"><b>Gender</b></label><br>
                 <select class="form-control"  name="gen">
                   <option name="gen" id="ml" value="Male">Male</option>
                   <option name="gen" id="mo" value="Female">Female</option>
                 </select><br>


              <label for=""><b>Marital status</b></label><br>
              <select class="form-control" name="status" required>
                <option>Choose marital status</option> 
                <option>Married</option>   
                <option>Single</option>
                <option>Divoice</option>
              </select>


              <label for="religion"><b>Religion</b></label><br>
              <select class="form-control" name="religion" required>
                <option>Choose your Religion</option>
                <option>Christain</option>
                <option>Muslim</option>
              </select><br>   

                <label><b>Qualification</b></label>
                 <input type="text" name="qualify" class="form-control" placeholder="Qualification" required >

                    
                </div>

                <div class="col-md-6">
                       
             
              <label><b>Nationality</b></label>
              <input type="text" name="nation" placeholder="Nationality" class="form-control" required>


               <label for="state"><b>State</b></label>
              <input type="text" placeholder="Input your state" name="state" required class="form-control"><br>


              <label>Choose your Profile Picture</label>
              <input type="file" name="pix" / required class="form-control"><br>


              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required class="form-control" >


              <label for="address"><b>Home Address</b></label>
              <input type="text" placeholder="Home Address" name="address" required class="form-control">

              <label for="Phone"><b>Phone Number</b></label>
              <input type="text" placeholder="Your Phone Number" name="numb" required class="form-control">

              <label for="password"><b>Create Password</b></label>
              <input type="password" placeholder="Password" name="password" required class="form-control ">

              <label for="password"><b>Confirm Password</b></label>
              <input type="password" placeholder="Password" name="pass" required class="form-control"><br>


                </div>
              </div>
                   <center>
                        <input class="btn btn-primary"  type="submit">
                    </center>
              
            </div>

      
		</form>

		<!-- </center> -->
	

    


<!-- Jquery JS-->
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