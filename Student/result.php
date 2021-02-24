<?php 
session_start();
include '../connect.php';
include '../dbcon.php';
?>

<link rel="stylesheet" type="text/css" href="result.css">
<!-- <title>Result</title> -->
 <center>
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-4">
				 <div class="logo wow bounceIn" data-wow-duration="3s">
                    <a href="#">
                        <img src="../images/p.png">
                    </a>
                 </div>
			</div>

			<div class="col-md-8">
				<h1 style="color:dodgerblue;">Temple <span style="color: white">International Baptist</span> Academy</h1>
	            <p>P.O BOX 1554,Papa Alapo Ogbomosho.</p>
	           	<h3>Student Result</h3>
			</div>
		</div>

        <form method="post" action="results.php">
            <div class="container">
                <label>Name of Student</label>           
                <input type="text" value="<?php echo $_SESSION['surname'] . $_SESSION['fname']?>" class="form-control" placeholder="Name of student" readonly>
			</div>

            <?php                        
             $rid = $_SESSION['regnumber'];
             $any = mysqli_query($con, "SELECT * from math where regnumber = '$rid'");
           	 while($any1 = mysqli_fetch_array($any))
           	 {
             $test1 = $any1['test1'];
             $test2 = $any1['test2'];
             $test3 = $any1['test3'];
             $exam = $any1['exam'];
             $class = $any1['class'];
             $year = $any1['year'];
             $tchcmt = $any1['teachers_comment'];
             }
             ?>

           <div class="row">
            	<div class="col-md-6">
                   	<label>Regnumber</label>
                    <input type="text" value="<?php echo $_SESSION['regnumber']?>" name="regid" class="form-control" readonly>

                     <label>YEAR</label>
                     <input type="text" name="year" value="<?php echo $year?>" class="form-control"placeholder="Year and Section" readonly>
                </div>

                <div class="col-md-6">
                    <label>CLASS</label>
                    <input type="text" name="class" value="<?php echo $class?>" class="form-control" placeholder="Class" readonly>
                </div>
            </div><br>

            <div class="card">
                 <table>
                    <tr class="card-header">
                      <th>Subject</th>
                      <th>1ST C.A /10</th>
                      <th>2ND C.A /10</th>
                      <th>3RD C.A /10</th>
                      <!-- <th>TOTAL C.A /30</th>
   -->                <th>TERM'S EXAM /70</th>
                      <th>SUMMARY OF TERM'S WORK /100</th>
                      <th>POSITION</th>
                    </tr>

                    <tr>
                      <td>1. Mathematics</td>
		                  <td>
		                  	<input type="text" value="<?php echo $test1?>" name="tone" class="form-control" disabled>
		                  </td>

		                  <td>
		                  	<input type="text"  value="<?php echo $test2?>" name="ttwo" class="form-control" disabled>
		                  </td>
		                  
		                  <td>
		                  	<input type="text"  value="<?php echo $test3?>" name="tthree" class="form-control" disabled>
		                  </td>
		                 
		                  <td>
		                  	<input type="text" value="<?php echo $exam?>" name="exam" class="form-control" disabled>
		                  </td>

		                   <td>
		                  	<input type="text" value="<?php echo $exam?>" name="exam" class="form-control" disabled>
		                  </td>

                      <td>
                        <input type="text" value="<?php echo ''?>" name="" class="form-control" disabled>
                      </td>
                    </tr>
                                
                    <tr>
                        <td>2. English</td>
                          	<td>
                          	 	<input type="text" name="eone" class="form-control" disabled>
                          	</td>

                            <td>
                               	<input type="text" name="etwo" class="form-control" disabled>
                            </td>
                                        
                            <td>
                                <input type="text" name="ethree" class="form-control" disabled>
                            </td>

                            <td>
                                <input type="text" name="efour" class="form-control" disabled>
                            </td>
                               
                            <td>
                                <input type="text" name="efive" class="form-control" disabled>
                            </td>
                    </tr>

                     <tr>
                        <td>3. Yoruba</td>
                              <td>
                              	<input type="text" name="yone" class="form-control" disabled>
                              </td>

                              <td>
                              	<input type="text" name="ytwo" class="form-control"disabled>
                              </td>

                              <td>
                              	<input type="text" name="ythree" class="form-control" disabled>
                              </td>

                              <td>
                              	<input type="text" name="yfour" class="form-control" disabled>
                              </td>

                              <td>
                              	<input type="text" name="yfive" class="form-control" disabled>
                              </td>
                     </tr>

                      <tr>
                        <td>4. Computer Science</td>
                                 <td>
                                 	<input type="text" name="csone" class="form-control" disabled>
                                 </td>

                                 <td>
                                 	<input type="text" name="cstwo" class="form-control" disabled>
                                 </td>

                               	 <td>
                               	 	<input type="text" name="csthree" class="form-control" disabled>
                               	 </td>

                                 <td>
                                 	<input type="text" name="csfour" class="form-control" disabled>
                                 </td>
                                 
                                 <td>
                                 	<input type="text" name="csfive" class="form-control" disabled>
                                </td>
                         </tr>

                         <tr>
                            <td>5. Social Studies</td>
                                <td>
                                  <input type="text" name="ssone" class="form-control" disabled>
                                </td>

                                <td>
                                  <input type="text" name="sstwo" class="form-control" disabled>
                                </td>

                                <td>
                                  <input type="text" name="ssthree" class="form-control" disabled>
                                </td>

                                <td>
                                  <input type="text" name="ssfour" class="form-control" disabled>
                                </td>

                                 <td>
                                  <input type="text" name="ssfive" class="form-control" disabled>
                                </td>
                            </tr>

                             <tr>
                               <td>6. Agiculture</td>
                                  <td>
                                    <input type="text" name="aone" class="form-control" disabled>
                                  </td>

                                  <td>
                                    <input type="text" name="atwo" class="form-control" disabled>
                                  </td>

                                  <td>
                                    <input type="text" name="athree" class="form-control" disabled>
                                  </td>

                                  <td>
                                    <input type="text" name="afour" class="form-control" disabled>
                                  </td>

                                   <td>
                                    <input type="text" name="afive" class="form-control" disabled>
                                  </td>


                              </tr>

                              <tr>
                                <td>7. Basic Science</td>
                                   <td>
                                    <input type="text" name="bsone" class="form-control" disabled>
                                  </td>

                                  <td>
                                    <input type="text" name="bstwo" class="form-control" disabled>
                                  </td>

                                  <td>
                                    <input type="text" name="bsthree" class="form-control" disabled>
                                  </td>

                                  <td>
                                    <input type="text" name="bsfour" class="form-control" disabled>
                                  </td>

                                  <td>
                                    <input type="text" name="bsfive" class="form-control" disabled>
                                  </td>
                                </tr>

                                <tr>
                                  <td>8. Creative Arts</td>
                                    <td>
                                      <input type="text" name="caone" class="form-control"disabled>
                                    </td>

                                    <td>
                                      <input type="text" name="catwo" class="form-control"disabled>
                                    </td>

                                    <td>
                                      <input type="text" name="cathree" class="form-control"disabled>
                                    </td>

                                    <td>
                                      <input type="text" name="cafour" class="form-control"disabled>
                                    </td>


                                    <td>
                                      <input type="text" name="cafive" class="form-control"disabled>
                                    </td>
                                  </tr>

                                <tr>
                                  <td>9.Basic Technology</td>
                                    <td>
                                        <input type="text" name="btone" class="form-control" disabled>
                                    </td>

                                    <td>
                                      <input type="text" name="bttwo" class="form-control" disabled>
                                    </td>

                                    <td>
                                      <input type="text" name="btthree" class="form-control" disabled>
                                    </td>

                                    <td>
                                      <input type="text" name="btfour" class="form-control" disabled>
                                    </td>

                                    <td>
                                      <input type="text" name="btfive" class="form-control" disabled>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>10. Business Studies</td>
                                      <td>
                                        <input type="text" name="sbone" class="form-control" disabled>
                                      </td>

                                      <td>
                                        <input type="text" name="sbtwo" class="form-control" disabled>
                                      </td>

                                      <td>
                                        <input type="text" name="sbthree" class="form-control" disabled>
                                      </td>

                                      <td>
                                        <input type="text" name="sbfour" class="form-control" disabled>
                                      </td>

                                       <td>
                                        <input type="text" name="sbfive" class="form-control" disabled>
                                      </td>

                                    </tr>

                                  <tr>
                                    <td>11.French</td>
                                      <td>
                                        <input type="text" name="fone" class="form-control" disabled>
                                      </td>

                                        <td>
                                          <input type="text" name="ftwo" class="form-control" disabled>
                                      </td>

                                        <td>
                                          <input type="text" name="fthree" class="form-control" disabled>
                                      </td>

                                      <td>
                                          <input type="text" name="ffour" class="form-control" disabled>
                                      </td>

                                      <td>
                                          <input type="text" name="ffive" class="form-control" disabled>
                                      </td>
                                  </tr>

                                  <tr>
                                      <td>12. Civic Education</td>  
                                        <td>
                                          <input type="text" name="ceone" class="form-control" disabled>
                                        </td>

                                       <td>
                                         <input type="text" name="cetwo" class="form-control" disabled>
                                       </td>

                                      <td>
                                       <input type="text" name="cethree" class="form-control" disabled>
                                      </td>

                                      <td>
                                        <input type="text" name="cefour" class="form-control" disabled>
                                      </td>

                                      <td>
                                        <input type="text" name="cefive" class="form-control" disabled>
                                      </td>
                                  </tr>

                                <tr>
                                    <td>13. Christain Religion Studies</td>
                                        <td>
                                          <input type="text" name="crone" class="form-control" disabled>
                                        </td>

                                      <td>
                                        <input type="text" name="crtwo" class="form-control" disabled>
                                       </td>

                                      <td>
                                        <input type="text" name="crthree" class="form-control" disabled>
                                      </td>

                                       <td>
                                        <input type="text" name="crfour" class="form-control" disabled>
                                      </td>


                                       <td>
                                        <input type="text" name="crfive" class="form-control" disabled>
                                      </td>
                                  </tr>

                                   <tr>
                                      <td>14. Physical Health Education</td>
                                        <td>
                                          <input type="text" name="phone" class="form-control" disabled>
                                      </td>

                                      <td>
                                          <input type="text" name="phtwo" class="form-control" disabled>
                                      </td>

                                      <td>
                                        <input type="text" name="phthree" class="form-control" disabled>
                                      </td>

                                      <td>
                                        <input type="text" name="phfour" class="form-control" disabled>
                                      </td>

                                       <td>
                                        <input type="text" name="phfive" class="form-control" disabled>
                                      </td>
                                  </tr>                        
                 </table><br>

                  <h2>Teachers Report</h2>
                  <input type="text" disabled value="<?php echo $tchcmt?>"name="teacher" class="form-control">
             </div>
             
                  
            </form>

     
    </div>     	

</center>

