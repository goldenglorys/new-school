<?php 
include 'connect.php';
?>
<link rel="stylesheet" type="text/css" href="save.css">
<body>
	<div class="container">
		
			<div class="row">
				<div class="col-md-4">
					 <div class="logo">
                            <a href="#">
                                <img src="../images/p.png" style=" width: 130px;border-radius: 80%">
                            </a>
                        </div>
				</div>

				<div class="col-md-8" style="">
			        <h1 style="color:dodgerblue;">Kings and Queens International School</h1>
                <p>P.O BOX 1554, Flash Midpoint.</p>
                        	<h3 id="one">Student Result</h3>
				</div>
			</div>
      <form method="post" action="saves.php">
                        <div class="container">
                          <label>Name of Student</label>
                          <select name="name" onchange="show(this.value)" class="form-control">
                            <option></option>
                              <?php
                                require 'dbcon.php';
                                $any = mysqli_query($con, "SELECT * from student");
                                while($any1 = mysqli_fetch_array($any)){
                                  $one = $any1['surname'] ." ".$any1['fname']." ".$any1['mname'];
                                  $regid = $any1['regnumber'];
                                  echo"<option>".$one."</option>";
                                }
                              ?>
                          </select>
                         
                             <script type="text/javascript">
                              function show(s){
                                var xmlhttp = new XMLHttpRequest();
                                  xmlhttp.onreadystatechange = function() {
                                      if (this.readyState == 4 && this.status == 200) {
                                          id = this.responseText;
                                          reg.value = JSON.parse(id)[0].regnumber;
                                          classs.value = JSON.parse(id)[0].class;
                                          upload.src = "../Student/upload/"+JSON.parse(id)[0].upload;
                                        
                                      }
                                  };
                                  xmlhttp.open("POST", "saves.php?n=" + s, true);
                                  xmlhttp.send();
                              }
                            </script>
                         <!--  <input type="text" name="" class="form-control" placeholder="Name of student"> -->
                   
                        	
                        	
                        	
                        	<div class="row">
                            <div class="col-md-6">
                              <label>Registration Number</label>
                                <input type="text" name="regid" id="reg" class="form-control">
                              </div>

                              <div class="col-md-6">
                              <label>YEAR</label>
                                 <input type="text" name="year" class="form-control" placeholder="Year and Section">
                              </div>

                              <div class="col-md-6">
                                <label>CLASS</label>
                                <input type="text" name="class"  id="classs" class="form-control" placeholder="Class">
                               </div>

                               <div class="col-md-6">
                                <label>STUDENT PROFILE</label><br>
                                <span id="sss"></span>
                                
                                <span><img src="" height='100px' style="min-height: 150px;border-radius: 50%;width: 20%" width='150px' id="upload"></span>
                                  
                               
                               </div>

                             </div><br>
                              </div>
                        

                        		<!-- <div class="col-md-6"> -->
                        		<table>
                        			<tr>
                        				<th>Subject</th>
                        				<th>1ST C.A /10</th>
                        				<th>2ND C.A /10</th>
                        				<th>3RD C.A /10</th>
                        				<th>TOTAL C.A /30</th>
                        				<th>TERM'S EXAM /70</th>
                        				<th>SUMMARY OF TERM'S WORK /100</th>
                        				<th>POSITION</th>
                        			</tr>

                        			<tr>
                        				<td>1. Mathimatics</td>
                        			   	<td><input type="text" name="tone" class="form-control"></td>
                           				<td><input type="text" name="ttwo" class="form-control"></td>
                          				<td><input type="text" name="tthree" class="form-control"></td>
                          				<td><input type="text" name="mfour" class="form-control"></td>
                          				<td><input type="text" name="exam" class="form-control"></td>
                          				<td><input type="text" name="msix" class="form-control"></td>
                          				<td><input type="text" name="mseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>2. English</td>
                        				<td><input type="text" name="eone" class="form-control"></td>
                           				<td><input type="text" name="etwo" class="form-control"></td>
                          				<td><input type="text" name="ethree" class="form-control"></td>
                          				<td><input type="text" name="efour" class="form-control"></td>
                          				<td><input type="text" name="efive" class="form-control"></td>
                          				<td><input type="text" name="esix" class="form-control"></td>
                          				<td><input type="text" name="eseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>3. Yoruba</td>
                        				<td><input type="text" name="yone" class="form-control"></td>
                           				<td><input type="text" name="ytwo" class="form-control"></td>
                          				<td><input type="text" name="ythree" class="form-control"></td>
                          				<td><input type="text" name="yfour" class="form-control"></td>
                          				<td><input type="text" name="yfive" class="form-control"></td>
                          				<td><input type="text" name="ysix" class="form-control"></td>
                          				<td><input type="text" name="yseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>4. Computer Science</td>
                        				<td><input type="text" name="csone" class="form-control"></td>
                           				<td><input type="text" name="cstwo" class="form-control"></td>
                          				<td><input type="text" name="csthree" class="form-control"></td>
                          				<td><input type="text" name="csfour" class="form-control"></td>
                          				<td><input type="text" name="csfive" class="form-control"></td>
                          				<td><input type="text" name="cssix" class="form-control"></td>
                          				<td><input type="text" name="csseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>5. Social Studies</td>
                        				<td><input type="text" name="ssone" class="form-control"></td>
                           				<td><input type="text" name="sstwo" class="form-control"></td>
                          				<td><input type="text" name="ssthree" class="form-control"></td>
                          				<td><input type="text" name="ssfour" class="form-control"></td>
                          				<td><input type="text" name="ssfive" class="form-control"></td>
                          				<td><input type="text" name="sssix" class="form-control"></td>
                          				<td><input type="text" name="ssseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>6. Agiculture</td>
                        				<td><input type="text" name="aone" class="form-control"></td>
                           				<td><input type="text" name="atwo" class="form-control"></td>
                          				<td><input type="text" name="athree" class="form-control"></td>
                          				<td><input type="text" name="afour" class="form-control"></td>
                          				<td><input type="text" name="afive" class="form-control"></td>
                          				<td><input type="text" name="asix" class="form-control"></td>
                          				<td><input type="text" name="aseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>7. Basic Science</td>
                        				<td><input type="text" name="bsone" class="form-control"></td>
                           				<td><input type="text" name="bstwo" class="form-control"></td>
                          				<td><input type="text" name="bsthree" class="form-control"></td>
                          				<td><input type="text" name="bsfour" class="form-control"></td>
                          				<td><input type="text" name="bsfive" class="form-control"></td>
                          				<td><input type="text" name="bssix" class="form-control"></td>
                          				<td><input type="text" name="bsseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>8. Creative Arts</td>
                        				<td><input type="text" name="caone" class="form-control"></td>
                           				<td><input type="text" name="catwo" class="form-control"></td>
                          				<td><input type="text" name="cathree" class="form-control"></td>
                          				<td><input type="text" name="cafour" class="form-control"></td>
                          				<td><input type="text" name="cafive" class="form-control"></td>
                          				<td><input type="text" name="casix" class="form-control"></td>
                          				<td><input type="text" name="caseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>9.Basic Technology</td>
                        				<td><input type="text" name="btone" class="form-control"></td>
                           				<td><input type="text" name="bttwo" class="form-control"></td>
                          				<td><input type="text" name="btthree" class="form-control"></td>
                          				<td><input type="text" name="btfour" class="form-control"></td>
                          				<td><input type="text" name="btfive" class="form-control"></td>
                          				<td><input type="text" name="btsix" class="form-control"></td>
                          				<td><input type="text" name="btseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>10. Business Studies</td>
                        				<td><input type="text" name="sbone" class="form-control"></td>
                           				<td><input type="text" name="sbtwo" class="form-control"></td>
                          				<td><input type="text" name="sbthree" class="form-control"></td>
                          				<td><input type="text" name="sbfour" class="form-control"></td>
                          				<td><input type="text" name="sbfive" class="form-control"></td>
                          				<td><input type="text" name="sbsix" class="form-control"></td>
                          				<td><input type="text" name="sbseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>11.French</td>
                        				<td><input type="text" name="fone" class="form-control"></td>
                           				<td><input type="text" name="ftwo" class="form-control"></td>
                          				<td><input type="text" name="fthree" class="form-control"></td>
                          				<td><input type="text" name="ffour" class="form-control"></td>
                          				<td><input type="text" name="ffive" class="form-control"></td>
                          				<td><input type="text" name="fsix" class="form-control"></td>
                          				<td><input type="text" name="fseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>12. Civic Education</td>
                        				<td><input type="text" name="ceone" class="form-control"></td>
                           				<td><input type="text" name="cetwo" class="form-control"></td>
                          				<td><input type="text" name="cethree" class="form-control"></td>
                          				<td><input type="text" name="cefour" class="form-control"></td>
                          				<td><input type="text" name="cefive" class="form-control"></td>
                          				<td><input type="text" name="cesix" class="form-control"></td>
                          				<td><input type="text" name="ceseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>13. Christain Religion Studies</td>
                        				<td><input type="text" name="crone" class="form-control"></td>
                           				<td><input type="text" name="crtwo" class="form-control"></td>
                          				<td><input type="text" name="crthree" class="form-control"></td>
                          				<td><input type="text" name="crfour" class="form-control"></td>
                          				<td><input type="text" name="crfive" class="form-control"></td>
                          				<td><input type="text" name="crsix" class="form-control"></td>
                          				<td><input type="text" name="crseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>14. Physical Health Education</td>
                        				<td><input type="text" name="phone" class="form-control"></td>
                           				<td><input type="text" name="phtwo" class="form-control"></td>
                          				<td><input type="text" name="phthree" class="form-control"></td>
                          				<td><input type="text" name="phfour" class="form-control"></td>
                          				<td><input type="text" name="phfive" class="form-control"></td>
                          				<td><input type="text" name="phsix" class="form-control"></td>
                          				<td><input type="text" name="phseven" class="form-control"></td>
                        			</tr>

                        		</table>
                            <br>
                          <!-- </div> -->
                            <h2 style="color: white">Teachers Report</h2>
                            <input type="text" name="teacher" class="form-control"><br>

                            <button class="btn btn-info" value="submit">Submit</button>
                          </form>
                        		</div>
                        		<!-- <div class="col-md-6">
                        		<h3>Other Records</h3>
                        		<table>
                        			<tr  style="padding: 2em;width: 30%">
                        				<th style="padding: 2em;width: 30%">Skills</th>
                        				<th style="padding: 2em;width: 30%">1</th>
                        				<th style="padding: 2em;width: 30%">2</th>
                        				<th style="padding: 2em;width: 30%">3</th>
                        				<th style="padding: 2em;width: 30%">4</th>
                        				<th style="padding: 2em;width: 30%">5</th>
                        			</tr>

                        			<tr>
                        				<td>1.WRITING</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>2.FLUENCY</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>4.GAMES</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>5.SPORTS</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>6.HANDLING OF TOOLS</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>7.DRAWING AND PAINTING</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>8.CRAFT</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr><th style="background-color: gray;width: 100%;text-align: center;color: white">BEHAVIOUR</th></tr>

                        			<tr>
                        				
                        				<td>1.  PUNCTUALITY</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>2.  ATTENDANCE AT CLASS</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>3. RELIABILITY</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>4. NEATNESS</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>5. POLITENESS</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>6. HONESTY</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>7. RELATIONSHIP WITH STAFF</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>8. SELF CONTROL</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>9. ATTENTIVENESS</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>8. RELATIONSHIP WITH STUDENTS</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>9. CO-OPERATIVENESS</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>10. RESPONSIBILITY</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>11. PERSEVERANCE</td>
                        				<td><input type="checkbox" name="" class="form-control"></td>
                           				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                          				<td><input type="checkbox" name="" class="form-control"></td>
                        			</tr>
 -->
                        		</table>
                        	</div>
                        </div>

                        

                        	
                    </center>
	</div>
