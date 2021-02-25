<?php 
require 'connect.php';
?>

<link rel="stylesheet" type="text/css" href="reg.css">

<div class="container">
  <center>
  <div class="card">
	<h1 class="text-center">Student Registration</h1>
  <center>
      <hr class="underline"><br>
  </center>


<!-- <div class="loader">
   <img src="../images/p.png" style="width: 95%;margin-top: 0.3em;border-radius: 100%">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>
   -->
  <center>
    <div class="circle">
      <img src="../images/p.png">
    </div>
   </center>

  <form method="post" action="regs.php" enctype="multipart/form-data">
  	<div class="row">
	   	<div class="col-lg-6">
			      
           	<label for="name">Surname</label><br>
            <input type="text" placeholder="Surname" name="surname" required class="form-control" maxlength="10"/>
            <br>

            <label for="name">Firstname</label>
            <input type="text" placeholder="Firstname" name="fname" required class="form-control" maxlength="10"/>
            <br>

            <label for="name">Middlename</label>
            <input type="text" placeholder="Middlename" name="mname" required class="form-control" maxlength="12"/>
            <br>
		
			     <label for="Gender">Gender</label><br>
            <select class="form-control"  name="gen">
            <option name="gen" id="ml" value="Male">Male</option>
            <option name="gen" id="mo" value="Female">Female</option>
            </select><br>

			     <label for="birth">D O B</label><br>
           	<input type="date" placeholder="Date of birth" name="birth" required class="form-control">
           	<br>

           <label for="religion">Religion</label>
           <select class="form-control" name="religion">
           <option>Choose your Religion</option>
           <option>Christain</option>
           <option>Muslim</option>
           </select>
           <br>
                      	
            <label for="email">Email</label>
            <input type="email" placeholder="Enter Email" name="email" required class="form-control" maxlength="50" /><br>

           <label for="name">Father Name</label>
           <input type="text" placeholder="Fathers' Name" name="father" required class="form-control" maxlength="10"/>
           <br>

           <label for="name">Mother Name</label>
           <input type="text" placeholder="Mothers' Name" name="mother" required class="form-control" maxlength="10"/>
           <br>

            <label for="name">Next of Kin Name</label>
            <input type="text" placeholder="Next of Kin Name" name="kin" required class="form-control" maxlength="10"/>
            <br>
  	
  		     <label>Choose your Profile Picture</label>
           <input type="file" name="pix" / required style="color: white" class="form-control">
           <br>
		  </div>

		  <div class="col-lg-6">
    			      <label for="name">Father's Number</label>
              	<input type="text" placeholder="Father's Number" name="digit" required class="form-control" maxlength="15"/>
                <br>

               <label for="number">Mother's Number</label>
               <input type="text" placeholder="Mothername Number" name="mnumber" required class="form-control" maxlength="11"/>
                <br>

               <label for="number">Next of kin Number</label>
               <input type="text" placeholder="Next of kin Number" name="knumber" required class="form-control" maxlength="11"/>
                <br>

                <label for="Phone">Student Phone Number</label>
                <input type="next" placeholder="Your Phone Number" name="numb" required class="form-control" maxlength="11" />
                <br>

                 <label for="class">Class</label>
                  <select class="form-control" name="class" id="get_class" onchange="determineCourse(this)">
                  <option>Select Your Class</option>
                  <option value="jss1">Jss 1</option>
                  <option value="jss2">Jss 2</option>
                  <option value="jss3">Jss 3</option>
                  <option value="sss1">Sss 1</option>
                  <option value="sss2">Sss 2</option>
                  <option value="sss3">Sss 3</option>
                  </select><br>
                  <div id="course">
                    <label for="course">Course</label>
                    <select class="form-control" name="course">
                    <option>Select Your Course</option>
                    <option value="Science">Science</option>
                    <option value="Art">Art</option>
                    <option value="Commercial">Commercial</option>
                    </select>
                  </div><br>

                  <label for="address">Home Address</label>
                  <input type="text" placeholder="Home Address" name="address" required class="form-control" maxlength="15"/><br>

                  <label for="state">State</label>
                  <input type="text" placeholder="Input your state" name="state" required class="form-control" maxlength="10" /><br>

                 <label for="address">Nationality</label>
                 <input type="text" placeholder="Nationality" name="nation" required class="form-control" maxlength="15"/><br>

                  <label for="password">Create Password</label>
                  <input type="password" placeholder="Password" name="password" required class="form-control" maxlength="6" / id="1st password"><br>


                <label for="password">Confirm Password</label>
                <input type="password" placeholder="Password" name="pass" required class="form-control" maxlength="6" / id="confirmPassword"><br>	
            	</div>
                <input type="submit" value="Submit" class="btn btn-primary btn-lg">
	          </div>
         </form>
      </div>
    </center>
</div>

<script type="text/javascript">
  function determineCourse(arg){
    let argValue = arg.value; 
    if(argValue == 'jss1' || argValue == 'jss2' || argValue == 'jss3'){
      document.getElementById('course').style.display = 'none';
    } else {
            document.getElementById('course').style.display = 'inline';
    }
  }
</script>